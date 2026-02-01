<?php

require_once "../modelo/RegisterModel.php";

session_start();
$longitud_nombre = mb_strlen($nombre);;

if(isset($_POST['crear_cuenta'])) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $contrasena = trim($_POST['contrasena']);

    $erroresnombre[] = validarnombre($nombre, $longitud_nombre);
    $_SESSION['erroresnombre'] = $erroresnombre;

    header("Location: ../vista/Register.php");
}
?>