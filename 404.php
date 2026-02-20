<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="public/img/Logo_RESET.svg">
    <title>Error 404 - RESET</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#004e64] max-h-screen  flex flex-col pt-40 pb-40">

    <?php require_once "src/components/Header.php"; ?>

    <main class="relative flex items-center justify-center py-15 ">
        
        <div class="absolute inset-0 flex flex-wrap justify-around content-around gap-4 p-4 opacity-5 pointer-events-none select-none overflow-hidden">
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
            <span class="text-9xl font-black text-white">404</span>
        </div>

        <div class="relative z-10 group bg-white/10 backdrop-blur-xl border border-white/20 flex flex-col items-center gap-8 rounded-3xl p-10 md:p-16 hover:bg-white/[0.15] transition-all duration-500 shadow-2xl text-center max-w-lg">
            
            <div class="p-5 rounded-3xl bg-[#ff3b30]/20 animate-bounce">
                <svg class="w-14 h-14 text-[#ff3b30]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>

            <div class="space-y-4">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white">¡Te has salido del mapa!</h2>
                <p class="text-white/70 text-lg leading-relaxed">La página que buscas no existe o ha sido movida a otra dimensión.</p>
            </div>
            
            <a href="index.php" class="px-10 py-4 bg-[#ff3b30] text-white rounded-full font-bold hover:scale-105 active:scale-95 transition-all shadow-lg shadow-[#ff3b30]/30">
                Volver al inicio
            </a>
        </div>
    </main>

  <?php require_once "src/components/footer.php"; ?>

</body>
</html>