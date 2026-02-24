<?php

session_start();
require_once "../../config/db.php";


$id_admin = $_SESSION['id_usuario']; // Asumiendo que guardas el ID en la sesión

// 1. Procesar la Foto
if (!empty($_FILES['nueva_foto']['name'])) {
    $nombre_foto = time() . "_" . $_FILES['nueva_foto']['name'];
    $ruta_destino = "uploads/" . $nombre_foto;

    if (move_uploaded_file($_FILES['nueva_foto']['tmp_name'], $ruta_destino)) {
        $sql_foto = "UPDATE usuario SET foto_perfil = '$nombre_foto' WHERE id_usuario = $id_admin";
        $conexion->query($sql_foto);
    }
}

// 2. Procesar la Contraseña
if (!empty($_POST['nueva_password'])) {
    // IMPORTANTE: Usar password_hash para que coincida con tu sistema de login
    $pass_hasheada = password_hash($_POST['nueva_password'], PASSWORD_DEFAULT);
    
    $sql_pass = "UPDATE usuario SET password = '$pass_hasheada' WHERE id_usuario = $id_admin";
    $conexion->query($sql_pass);
}

header("Location: ../vista/admin/configuration.php?msj=actualizado");


?>