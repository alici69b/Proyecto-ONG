<?php
//Funcion para satinizar datos
function sanear($dato) {
    $dato = htmlspecialchars(trim($dato));
    return $dato;
}

//Funcion para longitud de nombre
function longitud_nombre($nombre) {
    if(strlen($nombre) >= 2 && strlen($nombre) <= 20) {
        return true;
    } else {
        return false;
    }
}

//Funcion para validar email
function validar_email($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

//Funcion para validar categoria
function validar_categoria($categoria) {
    $categorias_validas = ["estudio", "salud", "creatividad", "proyecto", "otros"];
    if(in_array($categoria, $categorias_validas)) {
        return true;
    } else {
        return false;
    }
}

//Funcion para validar descripciones
function validar_descripcion($descripcion) {
    if(strlen($descripcion) >= 10 && strlen($descripcion) <= 200) {
        return true;
    } else {
        return false;
    }
}
?>