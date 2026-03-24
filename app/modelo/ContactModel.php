<?php
require_once "../config/db.php";


function Sanear($dato) {
    return htmlspecialchars(trim($dato));
}

function ValidarDatos($nombre_remitente, $email_remitente, $asunto, $cuerpo_mensaje) {
    $errores = [];


    $nombre_remitente = trim($nombre_remitente);
    $longitud_nombre = strlen($nombre_remitente);


    if(empty($nombre_remitente)) {
        $errores['nombre'][] = "El nombre está vacío";
    } elseif (is_numeric($nombre_remitente)) {
        $errores['nombre'][] = "El nombre no puede ser solo números";
    }

    if ($longitud_nombre < 3) {
        $errores['nombre'][] = "El nombre es demasiado corto (mínimo 3)";
    } elseif ($longitud_nombre > 20) {
        $errores['nombre'][] = "El nombre es demasiado largo (máximo 20)";
    }

    // Validamos email
    if (empty($email_remitente)) {
        $errores['email'][] = "El email es obligatorio";
    } elseif (!filter_var($email_remitente, FILTER_VALIDATE_EMAIL)) {
        $errores['email'][] = "El formato del email no es válido";
    }


    if(strlen($asunto) < 10)  {
        $errores['asunto'][] = "El asunto  debe tener al menos 10 caracteres";
    }

    if(strlen($cuerpo_mensaje) < 15)  {
        $errores['asunto'][] = "El mensaje debe tener al menos 15 caracteres";
        }
        
    
    

    return $errores;
}

//funcion para insertar los mensajes que se mandan a traves de la pagina de contacto y ser mostrados en la pagina del administrador
function InsertarMensaje($nombre_remitente, $email_remitent, $asunto, $cuerpo_mensaje, $id_usuario) {
    global $conexion;

    $id_usuario = isset($_SESSION['id_usuario']) ? (int)$_SESSION['id_usuario'] : "NULL";

    try {
        $sql = "INSERT INTO mensaje(nombre_remitente, email_remitente, asunto, cuerpo_mensaje, id_usuario)
        VALUES (?, ?,?, ?, ?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ssssi", $nombre_remitente, $email_remitent, $asunto, $cuerpo_mensaje, $id_usuario );

        $stmt->execute();

        return true;

    } catch (mysqli_sql_exception $error) {
        error_log("Error" . $error->getMessage());
        return false;
    }
}
    
?>