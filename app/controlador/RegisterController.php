<?php

require_once "../modelo/RegisterModel.php";

session_start();


if(isset($_POST['crear_cuenta'])) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $contrasena = trim($_POST['contrasena']);
    $rol = trim($_POST['tipo']) ?? '';

    $opcion = "";
    if ($rol === "soy-usuario") {
        $opcion = $_POST['tipo_ayuda_usuario'] ?? '';
    } elseif ($rol === "soy-voluntario") {
        $opcion = $_POST['tipo_ayuda_voluntario'] ?? '';
    }

    $longitud_nombre = mb_strlen($nombre);

    //agregamos las funciones para validar los campos
    $erroresnombre = validarnombre($nombre, $longitud_nombre);
    $_SESSION['erroresnombre'] = $erroresnombre;
    $erroresemail = validaremail( $email);
    $_SESSION['erroresemail'] = $erroresemail;
    $errorcontrasena = validarcontrasena($contrasena);
    $_SESSION['errorcontrasena'] = $errorcontrasena;

}
 header("Location: ../vista/Register.php");
 exit();
?>