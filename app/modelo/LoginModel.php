<?php
//Funcion para satinizar datos
function sanear($dato) {
    $dato = htmlspecialchars(trim($dato));
    return $dato;
}


//Funcion para comprobar credenciales
function comprobar_credenciales($email, $password, $conexion) {
    //Preparamos la consulta
    $stmt = mysqli_prepare($conexion,
        "SELECT u.id_usuario, u.nombre, u.email, u.password, r.nombre_rol 
        FROM usuario u
        LEFT JOIN roles r ON u.id_rol = r.id_rol
        WHERE u.email = ?"
    );

    //Comprobamos si el correo existe
    if (!$stmt) {
        return false;
    }

    //Le decimos a la consulta que reemplace el "?" por el email (tipo string)
    mysqli_stmt_bind_param($stmt, "s", $email);

    //Ejecutamos la consulta
    mysqli_stmt_execute($stmt);

    //Guardamos el resultado de la consulta para poder usarlo después
    $resultado = mysqli_stmt_get_result($stmt);

    if($usuario = mysqli_fetch_assoc($resultado)) {
        /*
        //Para pruebas con contraseñas en texto plano
        if ($password === $usuario["password"]) {
            unset($usuario["password"]);
            return $usuario;
        }
        */

        //Para contraseñas hasheadas
        if(password_verify($password, $usuario["password"])) {
            unset($usuario["password"]);
            return $usuario;
        }
    }
    return false;
}
?>