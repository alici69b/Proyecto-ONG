<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
</head>
<body class="font-sans bg-[#004e64] pt-25">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "src/components/Header.php";
    ?>

    <div class="min-h-screen flex flex-col items-center justify-center p-5 text-center">
    <h1 class="text-9xl font-bold text-white/10 absolute select-none">404</h1>
    
    <div class="group bg-white/5 backdrop-blur-lg border border-white/10 flex flex-col items-center gap-6 rounded-2xl p-10 hover:bg-white/10 transition-all duration-300 z-10">
        <div class="p-4 rounded-full bg-[#ff3b30]/20 animate-bounce">
            <svg class="w-12 h-12 text-[#ff3b30]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
        </div>
        <h2 class="text-2xl font-bold text-white">¡Te has salido del mapa!</h2>
        <p class="text-white/60 max-w-xs">La página que buscas no existe o ha sido movida a otra dimensión.</p>
        
        <a href="index.php" class="px-6 py-3 bg-[#ff3b30] text-white rounded-full font-bold hover:scale-105 transition-transform">
            Volver al inicio
        </a>
    </div>
</div>


<!-- importamos el Footer, para tenelo en esta pagina -->
    <?php
    require_once "src/components/Footer.php";
    ?>
</body>
</html>