<?php
session_start();

require_once "../../config/db.php";
require_once "../../modelo/AdminModel.php";

//mostrar los usuarios en el panel de administrador
$usuarios_totales = usuarios_totales($conexion);



//mostrar los resets pendientes
$total_usuarios_pendientes_resets = reset_pendientes($conexion);

//mostrar los resets Completado
$total_usuars_Completado_resets = reset_completados($conexion);

//mostrar los resets nuevos
$total_usuarios_Nuevo_resets = reset_nuevos($conexion);


// Contar voluntarios que existen  en la tabla usuarios
$sql_join_voluntarios = "SELECT COUNT(v.id_voluntario) as total 
                         FROM voluntario v 
                         INNER JOIN usuario u ON v.id_registrado = u.id_usuario";

$res_v = mysqli_query($conexion, $sql_join_voluntarios);
$datos_v = mysqli_fetch_assoc($res_v);
$total_usuarios_voluntarios = $datos_v['total'] ?? 0;

// Consulta para obtener usuarios y su estado de conexión
$sql_status = "SELECT *, 
               (CASE 
                    WHEN ultima_actividad > NOW() - INTERVAL 5 MINUTE THEN 'online' 
                    ELSE 'offline' 
                END) as estado_conexion 
               FROM usuario 
               WHERE id_rol != 3"; // Excluimos al admin si quieres

$res_status = mysqli_query($conexion, $sql_status);
$usuarios_con = [];
while ($u = mysqli_fetch_assoc($res_status)) {
    $usuarios_con[] = $u;
}

// Consultamos usuarios, calculando si están online (5 min de margen)
$sql_online = "SELECT nombre, foto_perfil, id_rol,
               (CASE 
                    WHEN ultima_actividad > NOW() - INTERVAL 5 MINUTE THEN 'online' 
                    ELSE 'offline' 
                END) as estado 
               FROM usuario 
               WHERE id_rol != 3 
               ORDER BY estado DESC, nombre ASC";

$res_online = mysqli_query($conexion, $sql_online);
$lista_usuarios = mysqli_fetch_all($res_online, MYSQLI_ASSOC);

?>
