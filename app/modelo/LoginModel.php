<?php

require_once __DIR__ . "/../config/Database.php";

class LoginModel {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function comprobarCredenciales(string $email, string $password): array|false {
        $stmt = $this->db->prepare(
            "SELECT u.id_usuario, u.nombre, u.email, u.password, r.nombre_rol
             FROM usuario u
             LEFT JOIN roles r ON u.id_rol = r.id_rol
             WHERE u.email = ?"
        );
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($password, $usuario["password"])) {
            unset($usuario["password"]);
            return $usuario;
        }

        return false;
    }
}