<?php
function obtenerActividadReciente($conexion, $limite = 5) {
    // SVGs dependiendo de lo que sea
    $svgUser = '<svg width="64px" height="64px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#a3ddf0" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 18L14 18M17 15V21M4 21C4 17.134 7.13401 14 11 14C11.695 14 12.3663 14.1013 13 14.2899M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#1f57ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';
    $svgReset = '<svg width="64px" height="64px" viewBox="-5.52 -5.52 35.04 35.04" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#d6ffd9"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-5.52" y="-5.52" width="35.04" height="35.04" rx="17.52" fill="#befec2" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 11V17M12 17L9 14M12 17L15 14M16 4C16.93 4 17.395 4 17.7765 4.10222C18.8117 4.37962 19.6204 5.18827 19.8978 6.22354C20 6.60504 20 7.07003 20 8V17.2C20 18.8802 20 19.7202 19.673 20.362C19.3854 20.9265 18.9265 21.3854 18.362 21.673C17.7202 22 16.8802 22 15.2 22H8.8C7.11984 22 6.27976 22 5.63803 21.673C5.07354 21.3854 4.6146 20.9265 4.32698 20.362C4 19.7202 4 18.8802 4 17.2V8C4 7.07003 4 6.60504 4.10222 6.22354C4.37962 5.18827 5.18827 4.37962 6.22354 4.10222C6.60504 4 7.07003 4 8 4M9.6 6H14.4C14.9601 6 15.2401 6 15.454 5.89101C15.6422 5.79513 15.7951 5.64215 15.891 5.45399C16 5.24008 16 4.96005 16 4.4V3.6C16 3.03995 16 2.75992 15.891 2.54601C15.7951 2.35785 15.6422 2.20487 15.454 2.10899C15.2401 2 14.9601 2 14.4 2H9.6C9.03995 2 8.75992 2 8.54601 2.10899C8.35785 2.20487 8.20487 2.35785 8.10899 2.54601C8 2.75992 8 3.03995 8 3.6V4.4C8 4.96005 8 5.24008 8.10899 5.45399C8.20487 5.64215 8.35785 5.79513 8.54601 5.89101C8.75992 6 9.03995 6 9.6 6Z" stroke="#00753f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';
    $svgMsg = '<svg width="64px" height="64px"  viewBox="-4.08 -4.08 32.16 32.16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.08" y="-4.08" width="32.16" height="32.16" rx="16.08" fill="#f9f5d7" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 8V11M12 14H12.01M21 20L17.6757 18.3378C17.4237 18.2118 17.2977 18.1488 17.1656 18.1044C17.0484 18.065 16.9277 18.0365 16.8052 18.0193C16.6672 18 16.5263 18 16.2446 18H6.2C5.07989 18 4.51984 18 4.09202 17.782C3.71569 17.5903 3.40973 17.2843 3.21799 16.908C3 16.4802 3 15.9201 3 14.8V7.2C3 6.07989 3 5.51984 3.21799 5.09202C3.40973 4.71569 3.71569 4.40973 4.09202 4.21799C4.51984 4 5.0799 4 6.2 4H17.8C18.9201 4 19.4802 4 19.908 4.21799C20.2843 4.40973 20.5903 4.71569 20.782 5.09202C21 5.51984 21 6.0799 21 7.2V20Z" stroke="#eacb34" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>';

    $sql = "
        (SELECT 'usuario' as tipo, nombre as titulo, 'Nuevo registro' as detalle, fecha_registro as fecha FROM usuario)
        UNION ALL
        (SELECT 'reset' as tipo, nombre_contacto as titulo, CONCAT('Solicitud: ', necesidades_reset) as detalle, fecha FROM reset)
        UNION ALL
        (SELECT 'mensaje' as tipo, nombre_remitente as titulo, asunto as detalle, fecha FROM mensaje)
        ORDER BY fecha DESC LIMIT ?
    ";

    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, "i", $limite);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    
    $actividades = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        // Asignamos el SVG y el color según el tipo
        switch ($fila['tipo']) {
            case 'usuario':
                $fila['svg'] = $svgUser;
                $fila['color'] = 'bg-blue-50 text-blue-500 border-blue-100';
                break;
            case 'reset':
                $fila['svg'] = $svgReset;
                $fila['color'] = 'bg-emerald-50 text-emerald-500 border-emerald-100';
                break;
            case 'mensaje':
                $fila['svg'] = $svgMsg;
                $fila['color'] = 'bg-amber-50 text-amber-500 border-amber-100';
                break;
        }
        $fila['tiempo'] = tiempoTranscurrido($fila['fecha']);
        $actividades[] = $fila;
    }
    return $actividades;
}

function tiempoTranscurrido($fecha) {
    $diferencia = time() - strtotime($fecha);
    if ($diferencia < 3600) return round($diferencia / 60) . "m";
    if ($diferencia < 86400) return round($diferencia / 3600) . "h";
    return date('d/m', strtotime($fecha));
}
?>