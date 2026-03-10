<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once "../../config/db.php";
require_once "../../modelo/AdminModel.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Usamos la variable de conexión global de tu archivo db.php
global $conexion;

//guardamos los datos del formulario para gestionar los resets y poder asignarles un voluntario y el estado de su solicitud.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar_reset'])) {
    $id_reset = intval($_POST['id_reset']);
    $id_estado = intval($_POST['id_estado']);
    $id_voluntario = $_POST['id_voluntario'];

   
    //si el id del voluntario esta vacio mostraremos null
   if($id_voluntario ==  "") {
        $valor_voluntario = "NULL";
   } else {
        $valor_voluntario = $_POST['id_voluntario'];
   }

    //actualizamos con una query el voluntario si esta vacio y ejecutamos la consulta
    $sql_update = "UPDATE reset SET 
                   id_estado = " . intval($id_estado) . ", 
                   id_voluntario = $valor_voluntario 
                   WHERE id_reset = " . intval($id_reset);

    mysqli_query($conexion, $sql_update);

  

    
    header("Location: ../admin/gestionarreset.php");
    exit;
}

//CONSULTA DE RESETS
$resets = obtener_resets();

//CONSULTA DE VOLUNTARIOS
$voluntarios = obtener_voluntarios();

//CONSULTA DE ESTADOS
$estados = obtener_estados();

?>