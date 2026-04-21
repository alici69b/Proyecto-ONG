<?php
global $conexion;

//funcion de una consulta para obtener los resets totales de la base de datos
function obtener_resets() {
    global $conexion;
    $resets = [];
    $sql_resets = "SELECT r.*, u.nombre as solicitante, c.nombre_categoria, e.nombre_estado 
                FROM reset r
                LEFT JOIN usuario u ON r.id_usuario = u.id_usuario
                LEFT JOIN categoria_reset c ON r.id_categoria = c.id_categoria
                LEFT JOIN estado_maestro e ON r.id_estado = e.id_estado
                WHERE e.nombre_estado = 'pendiente'";
    $res_resets = mysqli_query($conexion, $sql_resets);
    if ($res_resets) {
        while ($row = mysqli_fetch_assoc($res_resets)) {
            $resets[] = $row;
        }
    }
    return $resets;
}

//funcion con consulta para obtener los voluntarios totales de la base de datos
function obtener_voluntarios() {
    global $conexion;
    $voluntarios = [];
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
    return $voluntarios;
}

//funcion con consulta para obtener los voluntarios totales de la base de datos
function obtener_estados() {
    global $conexion;
    $estados = [];
    $sql_est = "SELECT * FROM estado_maestro";
    $res_est = mysqli_query($conexion, $sql_est);
    if ($res_est) {
        while ($row = mysqli_fetch_assoc($res_est)) {
            $estados[] = $row;
        }
    }
    return $estados;
}

?>