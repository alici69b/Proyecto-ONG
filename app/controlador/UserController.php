<?php


require_once "../../config/db.php";
require_once "../../modelo/AdminModel.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



//mostrar los usuarios en el panel de administrador en la pagina de usuarios
$res_usuarios = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuario");
$data_u = mysqli_fetch_assoc($res_usuarios);
$total_usuarios = $data_u['total'] ?? 0;

//pagin de usuaios, para mostrarlos paginados
// 1. Configuración de Paginación y Búsqueda
//quiero 7 usuarios por pagina
$usuarios_por_pagina = 7;
//revisa la url haciendo que si hay p=3 se dividirá en 3 paginas
$pagina_actual = isset($_GET['p']) ? (int)$_GET['p'] : 1;
//usuarios que ignora desde donde empezo a mostrar los usuarios
$offset = ($pagina_actual - 1) * $usuarios_por_pagina;


$buscar = isset($_GET['search']) ? mysqli_real_escape_string($conexion, $_GET['search']) : '';
$condicion = "";
if (!empty($buscar)) {
    $condicion = "WHERE nombre LIKE '%$buscar%' OR apellidos LIKE '%$buscar%' OR email LIKE '%$buscar%'";
}

// 2. Obtener el total de registros filtrados
$res_count = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuario $condicion");
$total_registros = mysqli_fetch_assoc($res_count)['total'];
$total_paginas = ceil($total_registros / $usuarios_por_pagina);

// 3. Consulta de usuarios con LIMIT para la página actual
$sql_usuarios = "SELECT id_usuario, nombre, apellidos, email, fecha_registro 
                 FROM usuario $condicion 
                 ORDER BY fecha_registro DESC 
                 LIMIT $offset, $usuarios_por_pagina";
                 
$res_usuarios_lista = mysqli_query($conexion, $sql_usuarios);
$usuarios = [];

while($fila = mysqli_fetch_assoc($res_usuarios_lista)) {
    $fila['iniciales'] = obtenerIniciales($fila['email']); 
    $usuarios[] = $fila;
}
?>