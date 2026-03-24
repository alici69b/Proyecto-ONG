<?php 
// Configuración para que el Mac muestre errores reales en lugar de páginas en blanco
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Llamamos al modelo y a la configuración de la base de datos
require_once "../modelo/ContactModel.php";

if(isset($_POST['enviar'])) {
    $nombre_remitente = Sanear($_POST['nombre_remitente']);
    $email_remitente = Sanear($_POST['email_remitente']); 
    $asunto = Sanear($_POST['asunto']);
    $cuerpo_mensaje = Sanear($_POST['cuerpo_mensaje']);

    //valido los campos
    $errores = ValidarDatos($nombre_remitente, $email_remitente, $asunto, $cuerpo_mensaje);
    $_SESSION['errores'] = $errores;

    //muestro la funcion 
    InsertarMensaje($nombre_remitente, $email_remitent, $asunto, $cuerpo_mensaje, $id_usuario);

    header("Location: ../../pages/Contact.php");
    exit();
}

mysqli_close($conexion);
// Redirigimos de vuelta a la pagina de contacto para mostrar mensajes o errores
header("Location: ../../pages/Contact.php");
    exit();

?>