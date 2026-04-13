<?php
// Importamos PHPMailer (ajusta la ruta según tu carpeta 'librerias')
// Subimos un nivel para salir de 'controlador' y entrar en 'librerias'
require_once "../../librerias/PHPMailer-master/src/Exception.php";
require_once "../../librerias/PHPMailer-master/src/PHPMailer.php";
require_once "../../librerias/PHPMailer-master/src/SMTP.php";

// Subimos un nivel para entrar en 'modelo'
require_once "../modelo/db.php";
require_once "../modelo/Reset_passwordModel.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// ... (Tus require de PHPMailer y modelos van aquí arriba) ...

if (isset($_POST['restablecer'])) {
    
    // AQUÍ es donde el controlador "coje" el dato del formulario
    $emailRecibido = $_POST['email_restablecer_contrasena'];

    // Limpiamos el dato por seguridad
    $email = mysqli_real_escape_string($conexion, $emailRecibido);

    // Verificamos en la base de datos si ese correo existe
    $checkEmail = mysqli_query($conexion, "SELECT nombre FROM usuario WHERE email = '$email'");

    if (mysqli_num_rows($checkEmail) > 0) {
        $datosUsuario = mysqli_fetch_assoc($checkEmail);
        
        // Generamos el token de seguridad
        $token = bin2hex(random_bytes(16));
        $expira = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Guardamos el token en los campos reset_token y token_expira
        if (guardarTokenPassword($conexion, $email, $token, $expira)) {
            
            // Configuración de PHPMailer
            $mail = new PHPMailer(true);
            try {
                // ... (Configuración SMTP de Gmail) ...

                // Usamos el email que capturamos del formulario como destino
                $mail->addAddress($email, $datosUsuario['nombre']); 

                $mail->isHTML(true);
                $mail->Subject = 'Recuperar Password - RESET';
                
                // El enlace dinámico con el token
                $url = "http://localhost/app/vista/auth/nueva_password.php?token=$token";
                
                $mail->Body = "Hola " . $datosUsuario['nombre'] . ", haz clic aquí: <a href='$url'>Restablecer clave</a>";
                
                $mail->send();
                header("Location: ../vista/auth/Reset_password.php?enviado=1");
            } catch (Exception $e) {
                echo "Error al enviar: {$mail->ErrorInfo}";
            }
        }
    } else {
        echo "El correo no existe en nuestra base de datos.";
    }
}
