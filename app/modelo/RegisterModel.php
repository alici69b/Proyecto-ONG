<?php

function validarRegistro($nombre, $email, $contrasena) {
    $errores = [];

    // --- VALIDACIÓN DEL NOMBRE ---
    $nombre = trim($nombre); // Limpiamos espacios en blanco
    $longitud_nombre = strlen($nombre);

    if (empty($nombre)) {
        $errores['nombre'][] = "El nombre es obligatorio";
    } elseif (is_numeric($nombre)) {
        // Nota: is_numeric comprueba si el string es un número 
        $errores['nombre'][] = "El nombre no puede ser solo números";
    }

    if ($longitud_nombre < 3) {
        $errores['nombre'][] = "El nombre es demasiado corto (mínimo 3)";
    } elseif ($longitud_nombre > 20) {
        $errores['nombre'][] = "El nombre es demasiado largo (máximo 20)";
    }


    // --- VALIDACIÓN DEL EMAIL ---
    if (empty($email)) {
        $errores['email'][] = "El email es obligatorio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'][] = "El formato del email no es válido";
    }


    // --- VALIDACIÓN DE LA CONTRASEÑA ---
    if (empty($contrasena)) {
        $errores['contrasena'][] = "La contraseña es obligatoria";
    } else {
        if (strlen($contrasena) < 8) {
            $errores['contrasena'][] = "La contraseña debe tener al menos 8 caracteres";
        }
        
        // Usamos una expresión regular para verificar si tiene al menos un número
        if (!preg_match('/[0-9]/', $contrasena)) {
            $errores['contrasena'][] = "La contraseña debe incluir al menos un número";
        }
    }

    return $errores;
}



?>