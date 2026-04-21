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

    $errores = ValidarDatos($nombre_remitente, $email_remitente, $asunto, $cuerpo_mensaje);

   if (!empty($errores)) {
        // si hay errores pues lo guardo en la sesion
        $_SESSION['errores'] = $errores;
        header("Location: ../../pages/Contact.php");
        exit();
    }

    // lo guardo en una variable para ahora verificar si no hay errores o si hay mostrarlo
    $ok = InsertarMensaje($nombre_remitente, $email_remitente, $asunto, $cuerpo_mensaje);

    if ($ok) {
        $_SESSION['exito'] = "Mensaje enviado correctamente.";
    } else {
        $_SESSION['errores'] = ['db' => 'Error al enviar el mensaje. Inténtalo de nuevo.'];
    }

    header("Location: ../../pages/Contact.php");
    exit();

}

// Redirigimos de vuelta a la pagina de contacto para mostrar mensajes o errores
header("Location: ../../pages/Contact.php");
    exit();

?>