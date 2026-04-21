<?php
//Inicializamos sesion
session_start();

//Llamamos a modelo para funciones
require_once "../modelo/LoginModel.php";

//Conexion con la base de datos
require_once "../config/db.php";

//Si el usuario manda el formulario de login
if($_SERVER["REQUEST_METHOD"] === "POST") {
    
    //Saneamos los datos recibidos
    $email = sanear($_POST["email"]);
    $password = sanear($_POST["pass"]);

    //Comprobamos las credenciales
    $usuario = comprobar_credenciales($email, $password, $conexion);

    if(isset($usuario) && $usuario !== false) {
        
        //Si las credenciales son correctas, guardamos los datos del usuario en la sesión
        //Guardamos usuario en sesion
        $_SESSION["usuario"] = $usuario;
        
        //Dependiendo del rol del usuario, lo redirigimos a una páginaau otra
        switch($rol = $usuario["nombre_rol"]) {
            case "admin": // 3 es el id_rol = Admin
                header("Location: ../vista/admin/dashboard.php");
                exit;
            case "soy-voluntario": // 2 es el id_rol = Voluntario
                header("Location: ../vista/voluntario/dashboard.php");
                exit;
            case "soy-usuario": // 1 es el id_rol = Usuario
                header("Location: ../vista/usuario/dashboard.php");
                exit;
            default:
                //Si el rol no es reconocido, redirigimos al login con un mensaje de error
                $_SESSION["error_login"] = "Rol de usuario no reconocido.";
                //Cerramos la conexión a la base de datos
                mysqli_close($conexion);
                header("Location: ../vista/auth/Login.php");
                break;
        }
    } else {
        //Si las credenciales son incorrectas
        
        //Cerramos la conexión a la base de datos
        mysqli_close($conexion);
        
        //Redirigimos
        $_SESSION["error_login"] = "Comprueba tu email y tu contraseña e inténtalo de nuevo.";
        header("Location: ../vista/auth/Login.php");
        exit;
    }
}

//Cerramos la conexión a la base de datos
mysqli_close($conexion);

//Si acceden sin POST redirigimos
header("Location: ../vista/auth/Login.php");
exit;
?>