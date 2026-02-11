<?php
// Esto obtiene el nombre de la carpeta principal automáticamente, para que así no de fallos a la hora de moverte de una pagina a otra. Lo que fallan son las rutas relativas que estaba poniendo, porque como el header se incluye en todas las paginas, cada una esta en un sitio diferente.
// 1. Obtener la ruta del directorio actual de forma segura
$root = "http://" . $_SERVER['HTTP_HOST'];

// 2. Detectar si estamos en una carpeta (Local) o en la raíz (Hosting)
// Esto extrae "/RESET-ong/" o "/Proyecto-ong/" automáticamente
$folder = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', __DIR__));

// 3. Definir la constante global URL_BASE
define("URL_BASE", $root . $folder . "/");
?>


