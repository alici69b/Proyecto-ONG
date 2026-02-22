<?php
require_once "../../config/bd.php";
require_once "../modelo/AdminModel.php";

$consulta = "Select nombre, apellidos, email From usuario";
 


// Contar cuántos usuarios hay en total
$res_usuarios = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuario");
$data_u = mysqli_fetch_assoc($res_usuarios);
$total_usuarios = $data_u['total'];
?>