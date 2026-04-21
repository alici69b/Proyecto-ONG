<?php


require_once "../../config/db.php";
require_once "../../modelo/AdminModel.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//editar usuarios


$error_edicion = '';
$exito_edicion = false;


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_usuario'])) {
 
    $id_editar  = (int) $_POST['id_usuario'];
    //mysqli_real_escape_strign saca todos los caracteres peligrosos
    $nombre     = mysqli_real_escape_string($conexion, trim($_POST['nombre']    ?? ''));
    $apellidos  = mysqli_real_escape_string($conexion, trim($_POST['apellidos'] ?? ''));
    $email      = mysqli_real_escape_string($conexion, trim($_POST['email']     ?? ''));
    $id_rol     = (int) ($_POST['id_rol'] ?? 1);
    $nueva_pass = $_POST['password_nuevo'] ?? '';
 
    // Validación rápida
    if (empty($nombre) || empty($email)) {
        $error_edicion = "El nombre y el email son obligatorios.";
    } else {
        // Construimos la parte de password solo si escribieron una nueva
        $sql_pass = '';
        if (!empty($nueva_pass)) {
            $hash     = password_hash($nueva_pass, PASSWORD_BCRYPT);
            $hash_esc = mysqli_real_escape_string($conexion, $hash);
            $sql_pass = ", password = '$hash_esc'";
        }
 
        $sql_update = "UPDATE usuario SET
                           nombre    = '$nombre',
                           apellidos = '$apellidos',
                           email     = '$email',
                           id_rol    = $id_rol
                           $sql_pass
                       WHERE id_usuario = $id_editar";
 
        if (mysqli_query($conexion, $sql_update)) {
            $exito_edicion = true;
        } else {
            $error_edicion = "Error al guardar: " . mysqli_error($conexion);
        }
    }
}

//borrar usuarios 
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {

    $id_a_eliminar = (int) $_GET['id'];

    $sql_delete = "DELETE FROM usuario WHERE id_usuario = $id_a_eliminar";

    if (mysqli_query($conexion, $sql_delete)) {
        // redirigimos de vuelta al listado con una señal de éxito
        header("Location: gestionusuarios.php?success=1");
        exit();
    } else {
        die("Error al eliminar el usuario: " . mysqli_error($conexion));
    }
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

while ($fila = mysqli_fetch_assoc($res_usuarios_lista)) {
    $fila['iniciales'] = obtenerIniciales($fila['email']);
    $usuarios[] = $fila;
}
