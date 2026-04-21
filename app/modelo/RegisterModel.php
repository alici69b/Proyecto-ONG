<?php


//funcion para sanear los datos 
function SanearDatos($dato) {
    return htmlspecialchars(trim($dato));
}


//funcion para validar el registro cuando lo enviamos
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
        
        // Usamos una expresión regular para verificar si tiene al menos un número
        if (!preg_match('/[0-9]/', $contrasena)) {
            $errores['contrasena'][] = "La contraseña debe incluir al menos un número";
        }
    }

    return $errores;
}

// Función para manejar el registro del usuario después de validaciones
function RegistrarUsuario($conexion, $nombre, $email, $contrasena, $rol) {

    $password_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

    //Obtenemos el id_rol desde la tabla roles
    $sql_rol = "SELECT id_rol FROM roles WHERE nombre_rol = ?";
    $stmt_rol = mysqli_prepare($conexion, $sql_rol);
    mysqli_stmt_bind_param($stmt_rol, "s", $rol);
    mysqli_stmt_execute($stmt_rol);
    $res_rol = mysqli_stmt_get_result($stmt_rol);
    $fila_rol = mysqli_fetch_assoc($res_rol);
    $id_rol_db = $fila_rol['id_rol'] ?? 1;

    //Insertamos en la tabla principal 'usuario'
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

    //Obtenemos el ID del nuevo usuario
    $id_usuario = mysqli_insert_id($conexion);

    //Insertamos en 'usuario_normal' (obligatorio para todos los registrados)
    $sql_normal = "INSERT INTO usuario_normal (id_user_normal, fecha_ultimo_acceso) VALUES (?, NOW())";
    $stmt_normal = mysqli_prepare($conexion, $sql_normal);
    mysqli_stmt_bind_param($stmt_normal, "i", $id_usuario);
    mysqli_stmt_execute($stmt_normal);

    // 5. Insertamos en registrado
    $sql_reg = "INSERT INTO registrado (id_registrado, estado_registro) VALUES (?, 'activo')";
    $stmt_reg = mysqli_prepare($conexion, $sql_reg);
    mysqli_stmt_bind_param($stmt_reg, "i", $id_usuario);
    mysqli_stmt_execute($stmt_reg);

    // 6. Según el rol: voluntario o usuario normal
    if ($rol === "soy-voluntario") {
        // Insertamos en 'voluntario' con su tipo de ayuda e id_registrado
        $ayuda = $_POST['tipo_ayuda_voluntario'] ?? 'General';
        $sql_voluntario = "INSERT INTO voluntario (id_registrado, tipo_ayuda) VALUES (?, ?)";
        $stmt_vol = mysqli_prepare($conexion, $sql_voluntario);
        mysqli_stmt_bind_param($stmt_vol, "is", $id_usuario, $ayuda);
        mysqli_stmt_execute($stmt_vol);
    }
    // Si es 'soy-usuario' no hace falta insertar en ninguna tabla extra,
    // ya está registrado correctamente en usuario_normal y registrado.

    $_SESSION['mensaje_exito'] = "¡Registro completado! Ya puedes iniciar sesión con tu cuenta.";
    header("Location: ../vista/auth/Register.php");
    exit();
}



?>