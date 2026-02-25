<?php 


require_once "../../config/db.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Usamos la variable de conexión global de tu archivo db.php
global $conexion;

//metemos un formulario, donde
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar_reset'])) {
    $id_reset = $_POST['id_reset'];
    $id_estado = $_POST['id_estado'];
    $id_voluntario = $_POST['id_voluntario'];

    $val_voluntario = ($id_voluntario == "") ? "NULL" : intval($id_voluntario);

    $sql_update = "UPDATE reset SET 
                   id_estado = " . intval($id_estado) . ", 
                   id_voluntario = $val_voluntario 
                   WHERE id_reset = " . intval($id_reset);

    mysqli_query($conexion, $sql_update);
    
    header("Location: ../vista/admin/gestionarreset.php");
    exit;
}

// Inicializamos los arrays para que NUNCA estén indefinidos en la vista
$resets = [];
$voluntarios = [];
$estados = [];

// 2. CONSULTA DE RESETS
$sql_resets = "SELECT r.*, u.nombre as solicitante, c.nombre_categoria, e.nombre_estado 
               FROM reset r
               LEFT JOIN usuario u ON r.id_usuario = u.id_usuario
               LEFT JOIN categoria_reset c ON r.id_categoria = c.id_categoria
               LEFT JOIN estado_maestro e ON r.id_estado = e.id_estado";
$res_resets = mysqli_query($conexion, $sql_resets);
if ($res_resets) {
    while ($row = mysqli_fetch_assoc($res_resets)) {
        $resets[] = $row;
    }
}

// 3. CONSULTA DE VOLUNTARIOS
$sql_vols = "SELECT v.id_voluntario, u.nombre 
             FROM voluntario v
             JOIN registrado reg ON v.id_registrado = reg.id_registrado
             JOIN usuario u ON reg.id_registrado = u.id_usuario";
$res_vols = mysqli_query($conexion, $sql_vols);
if ($res_vols) {
    while ($row = mysqli_fetch_assoc($res_vols)) {
        $voluntarios[] = $row;
    }
}

// 4. CONSULTA DE ESTADOS
$sql_est = "SELECT * FROM estado_maestro";
$res_est = mysqli_query($conexion, $sql_est);
if ($res_est) {
    while ($row = mysqli_fetch_assoc($res_est)) {
        $estados[] = $row;
    }
}

?>