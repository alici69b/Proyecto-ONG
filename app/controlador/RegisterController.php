<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../modelo/RegisterModel.php";
require_once "../config/db.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['crear_cuenta'])) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $contrasena = trim($_POST['contrasena']);
    $rol = $_POST['tipo'] ?? 'soy-usuario';

    

    //agregamos las funciones para validar los campos
    $errores = validarRegistro($nombre, $email, $contrasena);
    $_SESSION['errores'] = $errores;

    if(empty($errores)) {
        // haseamos la contraseña y luego la utilizaremos de nuevo
        $password_hasheada = password_hash($contrasena, PASSWORD_DEFAULT);

        $sql_rol = "SELECT id_rol FROM roles WHERE nombre_rol = ?";
        $stmt_rol = mysqli_prepare($conexion, $sql_rol);
        mysqli_stmt_bind_param($stmt_rol, "s", $rol);
        mysqli_stmt_execute($stmt_rol);
        $res_rol = mysqli_stmt_get_result($stmt_rol);
        $fila_rol = mysqli_fetch_assoc($res_rol);
        $id_rol_db = $fila_rol['id_rol'] ?? 1;

        //Inserto la consulta sql para guardar los datos
        $sql = "INSERT INTO usuario (nombre, email, password, id_rol) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conexion, $sql);
    
        // aqui usamos todos los parametros 
        mysqli_stmt_bind_param($stmt, "sssis", $nombre, $email, $password_hasheada, $id_rol_db);
        //ejecuto lo que he hecho con el comando anterior con el execute
        if(mysqli_stmt_execute($stmt)) {

            //esto lo que hace es obtener el id  que se le asigno a el nuevo usuario
            $id_usuario = mysqli_insert_id($conexion);

            // Insertar en usuario_normal
            $sql_normal = "INSERT INTO usuario_normal (id_user_normal, fecha_ultimo_acceso) VALUES (?, NOW())";
            $stmt_normal = mysqli_prepare($conexion, $sql_normal);
            mysqli_stmt_bind_param($stmt_normal, "i", $id_usuario);
            mysqli_stmt_execute($stmt_normal);

            //Insertar en registrado
            $sql_reg = "INSERT INTO registrado (id_registrado, estado_registro) VALUES (?, 'activo')";
            $stmt_reg = mysqli_prepare($conexion, $sql_reg);
            mysqli_stmt_bind_param($stmt_reg, "i", $id_usuario);
            mysqli_stmt_execute($stmt_reg);
            

                //seguun el rol que tenga, tendrá que hacer una cosas u otra
                if($rol === "soy-voluntario") {
                    //metemos el voluntario dentro de su tabla
                    $sql_voluntario = "INSERT INTO voluntario (id_registrado, tipo_ayuda) VALUES (?, ?)";
                    $stmt_vol = mysqli_prepare($conexion, $sql_voluntario);
                    $ayuda = $_POST['tipo_ayuda_voluntario'] ?? 'General';
                    mysqli_stmt_bind_param($stmt_vol, "is", $id_usuario, $ayuda);
                    mysqli_stmt_execute($stmt_vol);

                } 

                if($rol === "admin") {
                    $sql_admin = "INSERT INTO admin (id_admin, nivel_permiso) VALUES (?, 'Básico')";
                    $stmt_adm = mysqli_prepare($conexion, $sql_admin);
                    mysqli_stmt_bind_param($stmt_adm, "i", $id_usuario);
                    mysqli_stmt_execute($stmt_adm);
                }


            $_SESSION['mensaje_exito'] = "¡Registro completado! Ya puedes iniciar sesión con tu cuenta.";
            
        }  else {
            if (mysqli_errno($conexion) == 1062) {
                $_SESSION['errores']['db'][] = "El correo ya existe.";
            } else {
                $_SESSION['errores']['db'][] = "Error en el registro: " . mysqli_error($conexion);
            }
        }
    }
}
 header("Location: ../vista/auth/Register.php");
 exit();
?>