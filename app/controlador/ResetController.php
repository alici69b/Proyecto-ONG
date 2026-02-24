<?php
//Inicializamos sesion
session_start();

//Hacemos conexion con la base de datos
require_once "../config/db.php";

//Llamamos a modelo para realizar funciones
require_once "../modelo/ResetModel.php";

//Datos recibidos por POST
if($_SERVER["REQUEST_METHOD"] === "POST") {
    //Variable errores
    $errores = [];

    //Sanitizamos los datos recibidos
    $nombre = sanear($_POST["name"]);
    $email = sanear($_POST["email"]);
    $categoria = sanear($_POST["categoria"]);
    $descripcion_problema = sanear($_POST["descripcion-problema"]);
    $causa_abandono = sanear($_POST["causa-abandono"]);
    $necesidades_reset = sanear($_POST["necesidades-reset"]);

    //Validamos los datos
    //Nombre
    if(!isset($nombre) || $nombre === "") {
        $_SESSION["error_nombre"] = "El usuario no puede estar vacío.";
        $errores[] = $_SESSION["error_nombre"];
    } else {
        //Validamos longitud
        if(longitud_nombre($nombre)) {
            //Todo correcto
        } else { 
            $_SESSION["error_nombre"] = "El nombre debe tener entre 2 y 20 caracteres";
            $errores[] = $_SESSION["error_nombre"];
        }
    }    
    
    //Email
    if(!isset($email) || $email === "") {
        $_SESSION["error_email"] = "El email no puede estar vacío";
        $errores[] = $_SESSION["error_email"];
    } else {
        //Validamos formato email
        if(validar_email($email)) {
            //Todo correcto
        } else {
            $_SESSION["error_email"] = "El email no tiene el formato correcto";
            $errores[] = $_SESSION["error_email"];
        }
    }
    
    //Categoria
    if (!isset($categoria) || $categoria === "") {
        $_SESSION["error_categoria"] = "La categoria no puede estar vacía.";
        $errores[] = $_SESSION["error_categoria"];
    } else  {
        //Validamos la categoria
        if(validar_categoria($categoria)) {
            //Todo correcto
        } else {
            $_SESSION["error_categoria"] = "La categoría no es válida";
            $errores[] = $_SESSION["error_categoria"];
        }
    }
    
    //Descripcion del problema
    if (!isset($descripcion_problema) || $descripcion_problema === "") {
        $_SESSION["error_descripcionProblema"] = "La descripcion es obligatoria. (Mínimo 10 caracteres)";
        $errores[] = $_SESSION["error_descripcionProblema"];
    } else {
        //Validamos la descripcion
        if(validar_descripcion($descripcion_problema)) {
            //Todo correcto
        } else {
            $_SESSION["error_descripcionProblema"] = "La descripcion tiene que tener mínimo 10 caracteres";
            $errores[] = $_SESSION["error_descripcionProblema"];
        }
    }
    
    //Causa del abandono
    if (!isset($causa_abandono) || $causa_abandono === "") {
        $_SESSION["error_causaAbandono"] = "La descripcion es obligatoria. (Mínimo 10 caracteres)";
        $errores[] = $_SESSION["error_causaAbandono"];
    } else {
        //Validamos la descripcion
        if(validar_descripcion($causa_abandono)) {
        } else {
            $_SESSION["error_causaAbandono"] = "La descripcion tiene que tener mínimo 10 caracteres";
            $errores[] = $_SESSION["error_causaAbandono"];
        }
    }
    
    //Necesidades para volver
    if (!isset($necesidades_reset) || $necesidades_reset === "") {
        $_SESSION["error_necesidadesReset"] = "La descripcion es obligatoria. (Mínimo 10 caracteres)";
        $errores[] = $_SESSION["error_necesidadesReset"];
    } else {
        
    //Validamos la descripcion
        if(validar_descripcion($necesidades_reset)) {
            
        //Todo correcto
        } else {
            $_SESSION["error_necesidadesReset"] = "La descripcion tiene que tener mínimo 10 caracteres";
            $errores[] = $_SESSION["error_necesidadesReset"];
        }
    }

    //Comprobamos que no hay errores
    if(empty($errores)) {

        //Array de las categorias
        $categorias = [
        "estudio" => 1,
        "salud" => 2,
        "creatividad" => 3,
        "proyecto" => 4,
        "otros" => 5
        ];
        //Predefinimos las variables de las ID
        $id_categoria = $categorias[$categoria];
        $id_estado = 1; // suponiendo que 1 = 'pendiente' por defecto

        //Guardamos los datos en un array
        $_SESSION["datos"] = [
            "nombre"                    => $nombre,
            "email"                     => $email,
            "id_categoria"              => $id_categoria,
            "descripcion_problema"      => $descripcion_problema,
            "causa_abandono"            => $causa_abandono,
            "necesidades"               => $necesidades_reset
        ];

        //Guardamos los datos en la base de datos
        // 1. PREPARACIÓN: Enviamos la estructura SQL con un "comodín" (?)
        $sql = "INSERT INTO reset (descripcion, causa_abandono, necesidades_reset, fecha, id_categoria, id_estado, nombre_contacto, email_contacto) VALUES (?, ?, ?, NOW(), ?, ?, ?, ?)";
        
        //El servidor de BD ya sabe qué orden va a ejecutar
        $stmt = mysqli_prepare($conexion, $sql);
        if(!$stmt) {
            die("Error al preparar la consulta: " . mysqli_error($conexion));
        }


        // 2. VINCULACIÓN: Asignamos la variable al "?" - VINCULAMOS los parámetros (s = string, i = integer)
        mysqli_stmt_bind_param($stmt, "sssiiss",
            $descripcion_problema,
            $causa_abandono,
            $necesidades_reset,
            $id_categoria,
            $id_estado,
            $nombre,
            $email
        );

        //3. Ejecutamos la solicitud
        if(mysqli_stmt_execute($stmt)) {
            //Si se manda el formulario correctamente
            $_SESSION["exito"] = "Solicitud enviada correctamente.";
            header("Location: ../../pages/RequestReset.php");
            exit;
        } else {
            $_SESSION["errorSolicitud"] = "Error al guardar la solicitud: " . mysqli_stmt_errno($stmt);
        }

        //cerramos el stmt
        mysqli_stmt_close($stmt);

    } else {
        //Redirigimos a la pagina REQUESTRESET para mostramos errores
        //Cerramos la conexion con la base de datos
        mysqli_close($conexion);
        header("Location: ../../pages/RequestReset.php");
        exit;
    }
}




//Cerramos la conexion con la base de datos
mysqli_close($conexion);

//Redirigimos a la pagina REQUESTRESET si no se reciben los datos por el FOrmulario
header("Location: ../../pages/RequestReset.php");
exit;
?>