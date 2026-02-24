<?php

function obtenerIniciales($email) {
    if (!$email) return "??";
    $nombre = explode("@", $email)[0];
    return strtoupper(substr($nombre, 0, 2));
}

?>
