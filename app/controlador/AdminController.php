<?php
require_once "../../config/db.php";



$res_usuarios = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuario");
$data_u = mysqli_fetch_assoc($res_usuarios);
$total_usuarios = $data_u['total'] ?? 0;
?>