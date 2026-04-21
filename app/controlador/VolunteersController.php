<?php
//Iniciamos sesion
session_start();

//Hacemos conexion con la base de datos
require_once "../../config/db.php";

//Llamamos a modelo
require_once "../../modelo/VolunteersModel.php";

//Guardamos la id del usuario y la comprobamos con la BD
$id = $_SESSION["usuario"]["id_usuario"];

$voluntario = datosVoluntario($id, $conexion);


?>