<?php
session_start();

require_once "../../config/db.php";
require_once "../../modelo/AdminModel.php";

//mostrar los usuarios en el panel de administrador
$usuarios_totales = usuarios_totales($conexion);



//mostrar los resets pendientes
$total_usuarios_pendientes_resets = reset_pendientes($conexion);

//mostrar los resets Completado
$total_usuarios_Completado_resets = reset_completados($conexion);

//mostrar los resets nuevos
$total_usuarios_Nuevo_resets = reset_nuevos($conexion);

// Contar voluntarios que existen  en la tabla usuarios
$total_usuarios_voluntarios = ContarVoluntarios($conexion);

?>