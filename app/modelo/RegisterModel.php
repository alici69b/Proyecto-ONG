<?php


// Función para sanear los datos 
function SanearDatos($dato) {
    return htmlspecialchars(trim($dato));
}


// Función para validar el registro cuando lo enviamos
function ValidarRegistro($nombre, $email, $contrasena) {
    $errores = [];

    // Validamos el nombre
    $nombre = trim($nombre);
    $longitud_nombre = strlen($nombre);

    if (empty($nombre)) {
        $errores['nombre'][] = "El nombre es obligatorio";
    } elseif (is_numeric($nombre)) {
        $errores['nombre'][] = "El nombre no puede ser solo números";
    }

    if ($longitud_nombre < 3) {
        $errores['nombre'][] = "El nombre es demasiado corto (mínimo 3)";
    } elseif ($longitud_nombre > 20) {
        $errores['nombre'][] = "El nombre es demasiado largo (máximo 20)";
    }

    // Validamos email
    if (empty($email)) {
        $errores['email'][] = "El email es obligatorio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'][] = "El formato del email no es válido";
    }

    // Validamos la contraseña
    if (empty($contrasena)) {
        $errores['contrasena'][] = "La contraseña es obligatoria";
    } else {
        if (strlen($contrasena) < 8) {
            $errores['contrasena'][] = "La contraseña debe tener al menos 8 caracteres";
        }
        
        if (!preg_match('/[0-9]/', $contrasena)) {
            $errores['contrasena'][] = "La contraseña debe incluir al menos un número";
        }
    }

    return $errores;
}

// Función para manejar el registro del usuario después de validaciones
function RegistrarUsuario($conexion, $nombre, $email, $contrasena, $rol) {

    $password_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

    //  El rol que llega desde el controlador ya viene validado y saneado.
    // La comparación es directa y clara.
    $id_rol_db = ($rol === 'soy-voluntario') ? 2 : 1;

    error_log("Registro - Rol recibido: $rol | ID_ROL a guardar: $id_rol_db");

    // Insertamos en la tabla principal 'usuario'
    $sql = "INSERT INTO usuario (nombre, email, password, id_rol) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $nombre, $email, $password_hasheada, $id_rol_db);

    if (!mysqli_stmt_execute($stmt)) {
        // Email duplicado
        if (mysqli_errno($conexion) == 1062) {
            $_SESSION['errores']['email'] = "Este correo electrónico ya está registrado.";
        } else {
            $_SESSION['errores']['db'][] = "Error en el registro: " . mysqli_error($conexion);
        }
        header("Location: ../vista/auth/Register.php");
        exit();
    }

    // Obtenemos el ID del nuevo usuario
    $id_usuario = mysqli_insert_id($conexion);

    // Insertamos en 'usuario_normal' (obligatorio para todos los registrados)
    $sql_normal = "INSERT INTO usuario_normal (id_user_normal, fecha_ultimo_acceso) VALUES (?, NOW())";
    $stmt_normal = mysqli_prepare($conexion, $sql_normal);
    if (!$stmt_normal) {
        return ['exito' => false, 'error' => 'db', 'mensaje' => 'Error al preparar la consulta de usuario_normal'];
    }
    mysqli_stmt_bind_param($stmt_normal, "i", $id_usuario);
    if (!mysqli_stmt_execute($stmt_normal)) {
        return ['exito' => false, 'error' => 'db', 'mensaje' => 'Error al registrar usuario_normal: ' . mysqli_error($conexion)];
    }
    mysqli_stmt_close($stmt_normal);

    // Insertamos en registrado
    $sql_reg = "INSERT INTO registrado (id_registrado, estado_registro) VALUES (?, 'activo')";
    $stmt_reg = mysqli_prepare($conexion, $sql_reg);
    if (!$stmt_reg) {
        return ['exito' => false, 'error' => 'db', 'mensaje' => 'Error al preparar la consulta de registrado'];
    }
    mysqli_stmt_bind_param($stmt_reg, "i", $id_usuario);
    if (!mysqli_stmt_execute($stmt_reg)) {
        return ['exito' => false, 'error' => 'db', 'mensaje' => 'Error al registrar en registrado: ' . mysqli_error($conexion)];
    }
    mysqli_stmt_close($stmt_reg);

    // Según el rol: voluntario o usuario normal
    if ($rol === "soy-voluntario") {
        //  Leemos tipo_ayuda_voluntario aquí dentro del modelo, igual que antes.
        // Esto es correcto porque en este punto el rol ya está confirmado como voluntario.
        $ayuda = $_POST['tipo_ayuda_voluntario'] ?? 'otros';
        $sql_voluntario = "INSERT INTO voluntario (id_registrado, tipo_ayuda) VALUES (?, ?)";
        $stmt_vol = mysqli_prepare($conexion, $sql_voluntario);
        if (!$stmt_vol) {
            return ['exito' => false, 'error' => 'db', 'mensaje' => 'Error al preparar la consulta de voluntario'];
        }
        mysqli_stmt_bind_param($stmt_vol, "is", $id_usuario, $ayuda);
        if (!mysqli_stmt_execute($stmt_vol)) {
            return ['exito' => false, 'error' => 'db', 'mensaje' => 'Error al registrar voluntario: ' . mysqli_error($conexion)];
        }
        mysqli_stmt_close($stmt_vol);
    }

    return ['exito' => true, 'mensaje' => '¡Registro completado! Ya puedes iniciar sesión con tu cuenta.'];
}

?>