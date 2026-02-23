<?php
$servername = "127.0.0.1";
$username  = "root";
$database = "proyecto_ong";
$password = "";

/*
 Guardamos la conexion en una variable
*/
$conexion = mysqli_connect($servername, $username, $password, $database);

// Miramos si hemos hecho bien la conexionn, si no, manda un mensaje con el problema detallado
if (!$conexion) {
    die("Error al conectar: " . mysqli_connect_error());
}

?>