<?php 
// Configuración para que el Mac muestre errores reales en lugar de páginas en blanco
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Llamamos al modelo y a la configuración de la base de datos
require_once "../config/db.php";

if(isset($_POST['enviar'])) {
    $nombre_remitente = htmlspecialchars(trim($_POST['nombre_remitente']));
    $email_remitente = htmlspecialchars(trim($_POST['email_remitente'])); 
    $asunto = htmlspecialchars(trim($_POST['asunto']));
    $cuerpo_mensaje = htmlspecialchars(trim($_POST['cuerpo_mensaje']));

    // Definino el  id_usuario (si está logueado usar su ID, si no, NULL)
    $id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : "NULL";

    //inserto la tabla mensaje
    $sql = "INSERT INTO mensaje (nombre_remitente, email_remitente, asunto, cuerpo_mensaje, id_usuario) VALUES ('$nombre_remitente', '$email_remitente', '$asunto', '$cuerpo_mensaje', $id_usuario)";

    if(mysqli_query($conexion , $sql )) {
     if (mysqli_query($conexion, $sql)) {
        // Éxito: Redirigir de vuelta o mostrar mensaje
        header("Location: ../../pages/Contact.php?status=success");
        exit();
    } else {
        // Error
        echo "Error al enviar: " . mysqli_error($conexion);
    }
}



}

mysqli_close($conexion);
// Redirigimos de vuelta a la pagina de contacto para mostrar mensajes o errores
header("Location: ../../pages/Contact.php");
exit();

?>