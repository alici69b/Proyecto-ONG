<?php

global $conexion ;

//funcion para obtener las iniciales de el email y ahcer la foto de perfil 
function obtenerIniciales($email) {
    if (!$email) return "??";
    $nombre = explode("@", $email)[0];
    return strtoupper(substr($nombre, 0, 2));
}

//funcion para mostrar los usuarios en el panel del administrador
function usuarios_totales($conexion) {
    
    $res_usuarios = mysqli_query($conexion, "SELECT COUNT(*) as total FROM usuario");
    $data_u = mysqli_fetch_assoc($res_usuarios);
    $total_usuarios = $data_u['total'] ?? 0;

    return $total_usuarios;
}

//funcion para mostrar los resets pendientes
function reset_pendientes($conexion) {

    $usuarios_resets_pendientes = mysqli_query($conexion, 
            "SELECT r.id_reset,
                r.titulo,
                r.descripcion,
                r.fecha,
                c.nombre_categoria,
                e.nombre_estado,
                COUNT(r.id_reset) as contar_reset
            FROM reset r
            JOIN categoria_reset c ON r.id_categoria = c.id_categoria
            JOIN estado_maestro e ON r.id_estado = e.id_estado
            WHERE e.nombre_estado = 'pendiente'
            ORDER BY r.fecha ASC; ");
    $datos_reset = mysqli_fetch_assoc($usuarios_resets_pendientes);
    $total_usuarios_pendientes_resets = $datos_reset['contar_reset'] ?? 0;

    return $total_usuarios_pendientes_resets;

}


//funcion para mostrar los rest completados
function reset_completados($conexion) {

        $usuarios_resets_Completado = mysqli_query($conexion, 
            "SELECT r.id_reset,
                r.titulo,
                r.descripcion,
                r.fecha,
                c.nombre_categoria,
                e.nombre_estado,
                COUNT(r.id_reset) as contar_reset_resuelto
            FROM reset r
            JOIN categoria_reset c ON r.id_categoria = c.id_categoria
            JOIN estado_maestro e ON r.id_estado = e.id_estado
            WHERE e.nombre_estado = 'resuelto'
            ORDER BY r.fecha ASC; ");
        $datos_reset_completado = mysqli_fetch_assoc($usuarios_resets_Completado);
        $total_usuarios_Completado_resets = $datos_reset_completado['contar_reset_resuelto'] ?? 0;


    return $total_usuarios_Completado_resets;

}

//funcion para contar los reset nuevos que hay en la base de datos
function reset_nuevos($conexion) {
    $usuarios_resets_Nuevo = mysqli_query($conexion, 
            "SELECT r.id_reset,
                r.titulo,
                r.descripcion,
                r.fecha,
                c.nombre_categoria,
                e.nombre_estado,
                COUNT(r.id_reset) as contar_reset_resuelto
            FROM reset r
            JOIN categoria_reset c ON r.id_categoria = c.id_categoria
            JOIN estado_maestro e ON r.id_estado = e.id_estado
            WHERE e.nombre_estado = 'activo'
            ORDER BY r.fecha ASC; ");
    $datos_reset_Nuevo = mysqli_fetch_assoc($usuarios_resets_Nuevo);
    $total_usuarios_Nuevo_resets = $datos_reset_Nuevo['contar_reset_resuelto'] ?? 0;

    return $total_usuarios_Nuevo_resets;

}

//funcion para contar los voluntarios y mostrarlos en la base de datos
function ContarVoluntarios($conexion) {
    $sql_join_voluntarios = "SELECT COUNT(v.id_voluntario) as total 
                         FROM voluntario v 
                         INNER JOIN usuario u ON v.id_registrado = u.id_usuario";

    $res_v = mysqli_query($conexion, $sql_join_voluntarios);
    $datos_v = mysqli_fetch_assoc($res_v);
    $total_usuarios_voluntarios = $datos_v['total'] ?? 0;


    return $total_usuarios_voluntarios;
}


  

?>