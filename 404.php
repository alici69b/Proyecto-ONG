<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
</head>
<body class="font-sans bg-[#EBEBEB] pt-25">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "src/components/Header.php";
    ?>
    <div class="flex p-30 justify-center items-center gap-4">
        <h1 class="font-bold text-9xl text-[#ff3b30]">404!</h1>

        <div>
           
                
                <h4>OPSSS!!!</h4>
            
            
            <p>No hemos podido encontrar la pagina que buscas</p>
        </div>
    
    </div>


<!-- importamos el Footer, para tenelo en esta pagina -->
    <?php
    require_once "src/components/Footer.php";
    ?>
</body>
</html>