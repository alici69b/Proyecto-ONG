<?php

session_start();

require_once "../modelo/LoginModel.php";

$login_valido = false;
$max_intentos = 3;
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}
    

//Para verificar si estan los usuarios , tendremos que crear la base de datos y hacerlo con consultas
if($_POST['iniciar_sesion']) {

     if($_SESSION['intentos'] >= $max_intentos) {
        $_SESSION['error_intentos'] = "Demasiados intentos.";
        header("Location: ../../index.php"); 
        exit();
    }

    $email = trim($_POST['email']);
    $contrasena = trim($_POST['contrasena']);

   
    } else {
        $_SESSION['error_login'] = "Por favor, rellena todos los campos.";
        header("Location: ../vista/Login.php");
        exit();
    }

    if($login_valido) {
        $_SESSION['intentos'] = 0;
        $_SESSION['usuarios_logueado'] = $email;
        header("Location: ../../index.php"); 
    } else {
        $_SESSION['intentos']++;
        $restantes = $max_intentos - $_SESSION['intentos'];
        
        if ($_SESSION['intentos'] >= $max_intentos) {
            $_SESSION['error_login'] = "Has agotado tus intentos. Acceso bloqueado temporalmente.";
        } else {
            $_SESSION['error_login'] = "Datos incorrectos. Te quedan $restantes intentos.";
        }
        
        header("Location: ../vista/Login.php");
    }
    exit();


?>