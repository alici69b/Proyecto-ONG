<?php
require_once "../../config/db.php";


//mostrar los usuarios en el panel de administrador
$res_usuarios = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuario");
$data_u = mysqli_fetch_assoc($res_usuarios);
$total_usuarios = $data_u['total'] ?? 0;


//mostrar los resets pendientes
$usuarios_resets_pendientes = mysqli_query($conexion, 
        "SELECT r.id_reset,
            r.titulo,
            r.descripcion,
            r.fecha,
            c.nombre_categoria,
            e.nombre_estado
        FROM reset r
        JOIN categoria_reset c ON r.id_categoria = c.id_categoria
        JOIN estado_maestro e ON r.id_estado = e.id_estado
        WHERE e.nombre_estado = 'Pendiente'
        ORDER BY r.fecha ASC; ");
$datos_reset = mysqli_fetch_assoc($usuarios_resets_pendientes);
$total_usuarios_pendientes_resets = $datos_reset['TOTAL_RESET_PENDIENTES'] ?? 0;


//mostrar los resets Completado
$usuarios_resets_Completado = mysqli_query($conexion, 
        "SELECT r.id_reset,
            r.titulo,
            r.descripcion,
            r.fecha,
            c.nombre_categoria,
            e.nombre_estado
        FROM reset r
        JOIN categoria_reset c ON r.id_categoria = c.id_categoria
        JOIN estado_maestro e ON r.id_estado = e.id_estado
        WHERE e.nombre_estado = 'Completado'
        ORDER BY r.fecha ASC; ");
$datos_reset_completado = mysqli_fetch_assoc($usuarios_resets_Completado);
$total_usuarios_Completado_resets = $datos_reset['TOTAL_RESET_Completado'] ?? 0;


//mostrar los usuarios en el panel de administrador
$usuarios_voluntarios = mysqli_query($conexion, "SELECT COUNT(*) as total FROM voluntario");
$datos_volutarios = mysqli_fetch_assoc($usuarios_voluntarios);
$total_usuarios_voluntarios = $datos_voluntarios['total'] ?? 0;

?>
