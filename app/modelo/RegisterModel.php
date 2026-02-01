<?php

function validarnombre($nombre, $longitud_nombre) {
    $errornombre = [];

    //Comporbamos que el nombre no este vacio y no sea numerico
   
    if(empty($nombre)) {
        $errornombre[] = "El nombre es obligatorio";
    } 
    
    if(is_numeric($nombre)) {
        $errornombre[] = "El nombre tiene números";
    }

     // Longitud del nombre, no puede pasarse de 20 caracteres y no puede ser mas pequeño de  3
    if($longitud_nombre < 3) {
        $errornombre[] = "El nombre es demasido corto (minimo 3)";
    } elseif($longitud_nombre > 20) {
        $errornombre[] = "El nombre es demasiado largo (maximo 20)";
    }
    return $errornombre;
}

function validaremail( $email) {
    $erroresemail = [];
//comprobamos que el email no esté vacio y el formato sea valido
    if(empty($email)) {
        $erroresemail[] = "El email es obligatorio";
    } 
    
    if(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $erroresemail[] = "El formato del email no es válido";
    }
    return $erroresemail;
}

function validarcontrasena($contrasena) {
    $errorescontra = [];
    $tieneNumero = false;

    //mira si esta vacía
    if(empty($contrasena)) {
        $errorescontra[] = "La contraseña es obligatoria";
    }

    //medimos la logitud de la contraseña
    if(strlen($contrasena) < 8) {
        $errorescontra[] = "Debe tener al menos 8 caracteres";
    }

    // comprueba que la contraseña tenga algun numero, si tiene estará correcto 
    $letras = str_split($contrasena);
    foreach ($letras as $letra) {
        if (is_numeric($letra)) {
            $tieneNumero = true;
            break; 
        }
    }

    //si tiene no tiene algun número, entonces mandará el mensaje
    if($tieneNumero == false) {
        $errorescontra[] = "Debe incluir al menos un número";
    }

    return $errorescontra;
    
}

function validarSeleccion($opcion, $rol) {
    $errores = [];
    
    // Lista de opciones permitidas
    $opcionesUsuario = ['estudios', 'proyecto', 'personal', 'otro'];
    $opcionesVoluntario = ['Apoyo emocional', 'Ayuda técnica', 'Guía creativa'];

    if ($rol == "soy-usuario") {
        if (!in_array($opcion, $opcionesUsuario)) {
            $errores[] = "La opción de ayuda no es válida.";
        }
    } else {
        if (!in_array($opcion, $opcionesVoluntario)) {
            $errores[] = "La opción de voluntariado no es válida.";
        }
    }

    return $errores;
}
?>