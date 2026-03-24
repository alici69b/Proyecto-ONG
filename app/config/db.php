<?php
function cargarEnv($ruta) {
    if (!file_exists($ruta)) {
        die("Error crítico: No se encontró el archivo .env en: " . $ruta);
    }

    $lineas = file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lineas as $linea) {
        if (strpos(trim($linea), '#') === 0) continue;
        if (strpos($linea, '=') !== false) {
            list($nombre, $valor) = explode('=', $linea, 2);
            $_ENV[trim($nombre)] = trim($valor);
            $_SERVER[trim($nombre)] = trim($valor);
        }
    }
}

cargarEnv(dirname(__DIR__, 2) . '/.env');

$servername = $_ENV['DB_HOST'] ?? 'localhost';
$username   = $_ENV['DB_USER'] ?? 'root';
$password   = $_ENV['DB_PWD']  ?? '';
$database   = $_ENV['DB_NAME'] ?? 'proyecto_ong';

if (empty($database)) {
    die("Error: La variable DB_NAME no se cargó correctamente desde el .env");
}

$conexion = mysqli_connect($servername, $username, $password, $database) or die("Error al conectar: " . mysqli_connect_error());

?>