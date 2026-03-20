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
    $nombre = SanearDatos($_POST['nombre']);
    $email = SanearDatos($_POST['email']); 
    $contrasena = SanearDatos($_POST['contrasena']);
    $rol = SanearDatos($_POST['tipo']);

    $_SESSION['rol'] = $rol;
    $errores = ValidarRegistro($nombre, $email, $contrasena);
    $_SESSION['errores'] = $errores;

    // Si no hay errores de validación, procedemos al registro
    $resultado = RegistrarUsuario($conexion, $nombre, $email, $contrasena, $rol);

    if ($resultado['exito']) {
        $_SESSION['mensaje_exito'] = $resultado['mensaje'];
         header("Location: ../vista/auth/Register.php");
        exit();
    } else {
        $_SESSION['errores'][$resultado['error']] = $resultado['mensaje'];
    }


    //cerramos la conexion con la base de datos
    mysqli_close($conexion);

    // Redirigimos de vuelta a la vista de registro para mostrar mensajes o errores
    header("Location: ../vista/auth/Register.php");
    exit();
}




?>