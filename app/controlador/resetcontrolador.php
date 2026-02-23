<?php
//Inicializamos sesion
session_start();

//Llamamos a modelo para realizar funciones
require_once "../modelo/reset.php";

//Datos recibidos por POST
if($_SERVER["REQUEST_METHOD"] === "POST") {
    //Sanitizamos los datos recibidos
    $nombre = sanear($_POST["name"]);
    $email = sanear($_POST["email"]);
    $categoria = sanear($_POST["categoria"]);
    $descripcion_problema = sanear($_POST["descripcion-problema"]);
    $causa_abandono = sanear($_POST["causa-abandono"]);
    $necesidades_reset = sanear($_POST["necesidades-reset"]);

    //Validamos los datos
    //Nombre
    if(!isset($nombre) && $nombre === "") {
        $_SESSION["error_nombre"] = "El usuario no puede estar vacío.";
    } else {
        //Validamos longitud
        if(longitud_nombre($nombre)) {
            $_SESSION["nombre"] = $nombre;
        } else { 
            $_SESSION["error_nombre"] = "El nombre debe tener entre 2 y 20 caracteres.";
        }
    }    
    //Email
    
    //Categoria
    
    //Descripcion del problema
    
    //Causa del abandono
    
    //Necesidades para volver
}

//Redirigimos a la pagina REQUESTRESET
header("Location: ../../pages/requesReset.php");
exit;
?>