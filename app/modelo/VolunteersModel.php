<?php
//Funcion para obtener los datos del voluntario
function datosVoluntario($id, $conexion) {
    //Creamos la consulta
    $sql = "SELECT u.nombre, u.email, u.foto_perfil, v.tipo_ayuda
        FROM usuario u
        INNER JOIN voluntario v ON u.id_usuario = v.id_registrado
        WHERE u.id_usuario = ?
    ";

    //Preparamos la consulta
    $stmt = mysqli_prepare($conexion, $sql);

    if(!$stmt) {
        die("Error en prepare: " . mysqli_error($conexion));
    }

    //Vinculamos los parametros
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    //Ejecutamos
    mysqli_stmt_execute($stmt);

    //Guardamos resultado
    $resultado = mysqli_stmt_get_result($stmt);

    //Traemos la fila como array asociativo
    $datos = mysqli_fetch_assoc($resultado);

    //Cerramos STMT
    mysqli_stmt_close($stmt);

    //Devolvemos datos
    return $datos;
}
?>