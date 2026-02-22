<body class="bg-[#004e64] min-h-screen flex flex-col items-center ">

    <header class="w-full flex justify-center pt-6 z-[110]">
        <div class="w-[95%] max-w-7xl">
            <?php require_once "src/components/Header_index.php"; ?>
        </div>
    </header>
        
    <div class="text-7xl md:text-9xl font-black text-white mt-40">Error 404</div>
    
    <main class="flex-grow relative flex items-center justify-center overflow-hidden w-full px-4 my-20">
        
        

            <div class="relative z-10 bg-white/10 backdrop-blur-xl border border-white/20 flex flex-col items-center gap-8 rounded-3xl p-8 md:p-16 shadow-2xl text-center max-w-lg w-full">
                
                <div class="p-5 rounded-3xl bg-[#ff3b30]/20 animate-bounce">
                    <svg class="w-14 h-14 text-[#ff3b30]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>

                <div class="space-y-4">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-white">¡Te has salido del mapa!</h2>
                    <p class="text-white/70 text-lg leading-relaxed">La página que buscas no existe o ha sido movida a otra dimensión.</p>
                </div>
                
                <a href="../index.php" class="w-full md:w-auto px-10 py-4 bg-[#ff3b30] text-white rounded-full font-bold hover:scale-105 transition-all shadow-lg shadow-[#ff3b30]/30">
                    Volver al inicio
                </a>
            </div>
        
    </main>

    <footer class="w-full">
        <?php require_once "src/components/footer_index.php"; ?>
    </footer>

</body>