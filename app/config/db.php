<?php
$servername = "localhost";
$username  = "root";
$database = "proyecto_ong";
$password = "";

/*
 Guardamos la conexion en una variable
*/
$conexion = mysqli_connect($servername, $username, $database, $password);

// Miramos si hemos hecho bien la conexionn, si no, manda un mensaje con el problema detallado
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

echo "Conectado correctamente a Proyecto_ong";
?>