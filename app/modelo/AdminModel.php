<?php

require_once "../../config/db.php";

function crearAdmin($nombre, $apellidos, $email, $password, $nivel) {
    global $pdo;
    
    try {
        $pdo->beginTransaction(); // Iniciamos la transacción

        // 1. Insertar en la tabla madre 'usuario'
        $passHash = password_hash($password, PASSWORD_BCRYPT);
        $sql1 = "INSERT INTO usuario (nombre, apellidos, email, password) VALUES (?, ?, ?, ?)";
        $stmt1 = $pdo->prepare($sql1);
        $stmt1->execute([$nombre, $apellidos, $email, $passHash]);
        
        // Obtenemos el ID que se acaba de generar
        $id_usuario = $pdo->lastInsertId();

        // 2. Insertar en la tabla hija 'admin' usando ese ID
        $sql2 = "INSERT INTO admin (id_admin, nivel_permiso) VALUES (?, ?)";
        $stmt2 = $pdo->prepare($sql2);
        $stmt2->execute([$id_usuario, $nivel]);

        $pdo->commit(); // Si todo salió bien, guardamos cambios
        return true;
    } catch (Exception $e) {
        $pdo->rollBack(); // Si algo falló, deshacemos todo
        return "Error: " . $e->getMessage();
    }
}
?>
