<?php
$servidor = "localhost";
$usuario  = "root";
$password = "";
$base_datos = "Proyecto_ong";

// Guardamos la conexion en una variable
$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Miramos si hemos hecho bien la conexionn, si no, manda un mensaje con el problema detallado
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

echo "Conectado correctamente a Proyecto_ong";
?>