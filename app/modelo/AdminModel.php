<?php

global $conexion ;

//funcion para obtener las iniciales de el email y ahcer la foto de perfil 
function obtenerIniciales($email) {
    if (!$email) return "??";
    $nombre = explode("@", $email)[0];
    return strtoupper(substr($nombre, 0, 2));
}






    

?>
