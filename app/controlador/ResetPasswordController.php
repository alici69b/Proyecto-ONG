<?php
session_start();

require_once "../modelo/ResetPasswordModel.php";

if(isset($_POST['restablecer'])) {
    $email_restablecer_contrasena = $_POST['email_restablecer_contrasena'];
}

?>