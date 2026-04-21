<?php
// Función para guardar el token en la tabla usuario
function guardarTokenPassword($conexion, $email, $token, $expira) {
    // Usamos los campos reset_token y token_expira definidos en tu SQL
    $sql = "UPDATE usuario SET reset_token = ?, token_expira = ? WHERE email = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $token, $expira, $email);
    return mysqli_stmt_execute($stmt);
}

// Función para verificar si el token existe y no ha caducado
function validarToken($conexion, $token) {
    $sql = "SELECT id_usuario FROM usuario WHERE reset_token = ? AND token_expira > NOW()";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "s", $token);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    return mysqli_fetch_assoc($resultado);
}

// Función para actualizar la contraseña real
function actualizarPassword($conexion, $token, $password_encriptada) {
    $sql = "UPDATE usuario SET password = ?, reset_token = NULL, token_expira = NULL WHERE reset_token = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $password_encriptada, $token);
    return mysqli_stmt_execute($stmt);
}

?>