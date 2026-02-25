<?php
// Configuración para que el Mac muestre errores reales en lugar de páginas en blanco
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Llamamos al modelo y a la configuración de la base de datos
require_once "../modelo/RegisterModel.php";
require_once "../config/db.php";

// Iniciamos la sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['crear_cuenta'])) {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email'])); 
    $contrasena = htmlspecialchars(trim($_POST['contrasena']));
    $rol = htmlspecialchars(trim($_POST['tipo']));

    $errores = validarRegistro($nombre, $email, $contrasena);

    if(empty($errores['email'])) { 
        $sql_check = "SELECT email FROM usuario WHERE email = ?";
        $stmt_check = mysqli_prepare($conexion, $sql_check);
        mysqli_stmt_bind_param($stmt_check, "s", $email);
        mysqli_stmt_execute($stmt_check);
        mysqli_stmt_store_result($stmt_check);
        
        if(mysqli_stmt_num_rows($stmt_check) > 0) {
            $errores['email'] = "Este correo electrónico ya está registrado.";
        }
        mysqli_stmt_close($stmt_check);
    }

    $_SESSION['errores'] = $errores;

    // Si no hay errores de validación ni el email está duplicado, procedemos al registro
    if(empty($errores)) {
        // ... el resto de tu código INSERT sin cambios ...
        // Hasheamos la contraseña para guardarla de forma segura
        $password_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

        // Buscamos el ID del rol correspondiente en la tabla roles
        $sql_rol = "SELECT id_rol FROM roles WHERE nombre_rol = ?";
        $stmt_rol = mysqli_prepare($conexion, $sql_rol);
        mysqli_stmt_bind_param($stmt_rol, "s", $rol);
        mysqli_stmt_execute($stmt_rol);
        $res_rol = mysqli_stmt_get_result($stmt_rol);
        $fila_rol = mysqli_fetch_assoc($res_rol);
        $id_rol_db = $fila_rol['id_rol'] ?? 1; // Si no lo encuentra, por defecto es 1 (usuario)

        // INSERT principal: Guardamos los datos en la tabla 'usuario'
        // Corregido: 4 columnas (nombre, email, password, id_rol) y 4 signos '?'
        $sql = "INSERT INTO usuario (nombre, email, password, id_rol) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $sql);

        // Vinculamos los parámetros: "sssi" (string, string, string, integer)
        mysqli_stmt_bind_param($stmt, "sssi", $nombre, $email, $password_hasheada, $id_rol_db);
    
        // Ejecutamos la consulta principal
        if(mysqli_stmt_execute($stmt)) {

            // Obtenemos el ID que se le asignó automáticamente al nuevo usuario
            $id_usuario = mysqli_insert_id($conexion);

            // Insertar en la tabla 'usuario_normal' (registro de acceso)
            $sql_normal = "INSERT INTO usuario_normal (id_user_normal, fecha_ultimo_acceso) VALUES (?, NOW())";
            $stmt_normal = mysqli_prepare($conexion, $sql_normal);
            mysqli_stmt_bind_param($stmt_normal, "i", $id_usuario);
            mysqli_stmt_execute($stmt_normal);

            // Insertar en la tabla 'registrado' (estado del registro)
            $sql_reg = "INSERT INTO registrado (id_registrado, estado_registro) VALUES (?, 'activo')";
            $stmt_reg = mysqli_prepare($conexion, $sql_reg);
            mysqli_stmt_bind_param($stmt_reg, "i", $id_usuario);
            mysqli_stmt_execute($stmt_reg);
            
            // Según el rol seleccionado, insertamos en tablas adicionales
            if($rol === "soy-voluntario") {
                // Si es voluntario, guardamos su tipo de ayuda
                $sql_voluntario = "INSERT INTO voluntario (id_registrado, tipo_ayuda) VALUES (?, ?)";
                $stmt_vol = mysqli_prepare($conexion, $sql_voluntario);
                $ayuda = $_POST['tipo_ayuda_voluntario'] ?? 'General';
                mysqli_stmt_bind_param($stmt_vol, "is", $id_usuario, $ayuda);
                mysqli_stmt_execute($stmt_vol);
            } 

            if($rol === "admin") {
                // Si es admin, le asignamos nivel de permiso básico
                $sql_admin = "INSERT INTO admin (id_admin, nivel_permiso) VALUES (?, 'Básico')";
                $stmt_adm = mysqli_prepare($conexion, $sql_admin);
                mysqli_stmt_bind_param($stmt_adm, "i", $id_usuario);
                mysqli_stmt_execute($stmt_adm);
            }

            // Si todo sale bien, guardamos mensaje de éxito
            $_SESSION['mensaje_exito'] = "¡Registro completado! Ya puedes iniciar sesión con tu cuenta.";
            
        } else {
            // Manejo de errores específicos de la base de datos
            if (mysqli_errno($conexion) == 1062) {
                $_SESSION['errores']['db'][] = "El correo ya existe.";
            } else {
                $_SESSION['errores']['db'][] = "Error en el registro: " . mysqli_error($conexion);
            }
        }

    }

}

//cerramos la conexion con la base de datos
mysqli_close($conexion);


// Redirigimos de vuelta a la vista de registro para mostrar mensajes o errores
header("Location: ../vista/auth/Register.php");
exit();
?>