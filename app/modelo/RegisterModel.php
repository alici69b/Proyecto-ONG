<?php

function validarnombre($nombre, $longitud_nombre) {
    $erroresnombre = [];

    //Comporbamos que el nombre no este vacio y no sea numerico
    if(empty($nombre)) {
        $erroresnombre[] = "El nombre esta vacío o es incorrecto";
    } elseif(!is_numeric($nombre)) {
        $erroresnombre[] = "El nombre tiene números";
    }

        // Longitud del nombre, no puede pasarse de 20 caracteres y no puede ser mas pequeño de 3
        if($longitud_nombre < 3) {
            $erroresnombre[] = "El nombre es demasido corto (minimo 3)";
        } elseif($longitud_nombre > 20) {
            $erroresnombre[] = "El nombre es demasiado largo (maximo 20)";
        }
}

function validaremail( $email) {
    $erroresemail = [];
//comprobamos que el email no esté vacio y el formato sea valido
    if(empty($email)) {
        $erroresemail[] = "El email está vacío o es incorrecto";
    } elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $erroresemail[] = "El formato del email no es válido";
    }
}
?>