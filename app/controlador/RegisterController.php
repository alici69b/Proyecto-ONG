<?php
// Configuración para mostrar errores reales en lugar de páginas en blanco
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Llamamos al modelo y a la configuración de la base de datos
require_once "../modelo/RegisterModel.php";
require_once "../config/db.php";

// Iniciamos la sesión si no está activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['crear_cuenta'])) {
    $nombre    = SanearDatos($_POST['nombre']);
    $email     = SanearDatos($_POST['email']);
    $contrasena = SanearDatos($_POST['contrasena']);

    // 
    //  Leemos el rol directamente del POST sin aplicar SanearDatos,
    // porque htmlspecialchars podría alterar guiones u otros caracteres del valor.
    // Lo validamos a continuación de forma estricta.
    $rol = isset($_POST['tipo']) ? trim($_POST['tipo']) : 'soy-usuario';

    // 
    //  Validación estricta del rol. Si no es uno de los dos valores
    // exactos que esperamos, lo forzamos a 'soy-usuario' para evitar datos inesperados.
    if ($rol !== 'soy-usuario' && $rol !== 'soy-voluntario') {
        $rol = 'soy-usuario';
    }

    // 
    //  Guardamos en sesión el rol ya validado para usarlo después si hace falta.
    $_SESSION["usuario"] = $nombre;
    $_SESSION['rol'] = $rol;

    // Log para depuración: confirmar qué rol llega al controlador
    error_log("RegisterController - Rol recibido del POST: " . $_POST['tipo'] . " | Rol validado: $rol");

    $errores = ValidarRegistro($nombre, $email, $contrasena);

    if (empty($errores)) {
        // 
        //  Pasamos $rol (ya limpio y validado) al modelo.
        $resultado = RegistrarUsuario($conexion, $nombre, $email, $contrasena, $rol);

        if ($resultado['exito']) {
            $_SESSION['mensaje_exito'] = $resultado['mensaje'];
        } else {
            $_SESSION['errores'][$resultado['error']] = $resultado['mensaje'];
        }
    } else {
        $_SESSION['errores'] = $errores;
    }

    mysqli_close($conexion);
    header("Location: ../vista/auth/Register.php");
    exit();
}
?>