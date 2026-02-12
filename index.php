<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>
    

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

<!-- Fuentes de google fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    

   
<!--font-family: font-serif
    colores
        -azul oscuro: #004e64
        -azul: #00a5cf
        - verdeagua  #9fffcb
        -verde : #25a18e
        -verde vivo: #7ae582
        -coral: #ff3b30
        -poner letras con el degradado del inicio: bg-linear-to-r from-[#00a5cf] to-[#9fffcb] bg-clip-text text-transparent 
        -color del  bg-[#f4f9fa]

    -->

</head>
<body class=" animacion-entrada bg-[#f4f9fa] " id="inicio">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "src/components/Header_index.php";
    ?>

    <!-- BOTON DE IR A INICIO -->
    <div  class="scroll-smooth ">

        <a href="#inicio" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#8CBEB2] text-white hover:bg-[#F2EBBF] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>

    </div>

    <!-- Aqui podremos encontrar 
            - Que es esta ong
            - Mensaje positivo
            - Los botones principales 
                - Reset
                -Voluntarios
            - REcuento de las personas que participan en esta ong
     -->
    <main class=" bg-linear-to-r from-[#00a5cf] to-[#9fffcb] min-h-130  pt-40">
        <div class="p-4 py-6 sm:px-10 md:px-20 flex justify-center ">
            <div class="flex bg-white/60 backdrop-blur-md border-white/60 items-center justify-center rounded-full px-4 py-2 sm:px-3 sm:py-2 gap-3 border border-gray-100">
            <svg class="w-5 h-5 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5766 8.70419C11.2099 7.56806 11.5266 7 12 7C12.4734 7 12.7901 7.56806 13.4234 8.70419L13.5873 8.99812C13.7672 9.32097 13.8572 9.48239 13.9975 9.5889C14.1378 9.69541 14.3126 9.73495 14.6621 9.81402L14.9802 9.88601C16.2101 10.1643 16.825 10.3034 16.9713 10.7739C17.1176 11.2443 16.6984 11.7345 15.86 12.715L15.643 12.9686C15.4048 13.2472 15.2857 13.3865 15.2321 13.5589C15.1785 13.7312 15.1965 13.9171 15.2325 14.2888L15.2653 14.6272C15.3921 15.9353 15.4554 16.5894 15.0724 16.8801C14.6894 17.1709 14.1137 16.9058 12.9622 16.3756L12.6643 16.2384C12.337 16.0878 12.1734 16.0124 12 16.0124C11.8266 16.0124 11.663 16.0878 11.3357 16.2384L11.0378 16.3756C9.88634 16.9058 9.31059 17.1709 8.92757 16.8801C8.54456 16.5894 8.60794 15.9353 8.7347 14.6272L8.76749 14.2888C8.80351 13.9171 8.82152 13.7312 8.76793 13.5589C8.71434 13.3865 8.59521 13.2472 8.35696 12.9686L8.14005 12.715C7.30162 11.7345 6.88241 11.2443 7.02871 10.7739C7.17501 10.3034 7.78993 10.1643 9.01977 9.88601L9.33794 9.81402C9.68743 9.73495 9.86217 9.69541 10.0025 9.5889C10.1428 9.48239 10.2328 9.32097 10.4127 8.99812L10.5766 8.70419Z" stroke="#ead757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
            <p class="text-gray-900 font-base text-sm sm:text-base md:text-lg whitespace-nowrap">
                ONG de Segundas Oportunidades
            </p>
            </div>
        </div>

        <!-- Mensaje principal -->
        <div>
            <div class="flex justify-center  text-center my-3 p-2">
                <h1 class="max-w-3xl text-gray-900 font-bold text-4xl sm:text-5xl sm:p-3 lg:text-6xl">
                    Nada está <i class="text-white">perdido</i> hasta que decides <i class="text-white">reiniciarlo</i>
                </h1>
            </div>
            <div class=" max-w-xl mx-auto text-center my-4 top-0">
                <p class="pl-3 pr-3 mb-5  text-gray-700  sm:text-sm sm:p-2 lg:text-lg font-["Archivo Black"]">Volvemos a dar vida a proyectos, hábitos, ideas, estudios y pequeños sueños que quedaron en pausa</p>
                <div class=" flex justify-center text-center items-center  gap-3 p-2">
                    <a class="block w-47 px-4 py-2 bg-[#1a7a6b]  text-white  rounded-full shadow-md  hover:shadow-lg  hover:-translate-y-1 transition transform duration-300" href="pages/RequestReset.php">Solicitar RESET</a>
                <a class="block w-47 px-4 py-2   bg-[#1a7a6b] text-white  hover:bg-[#1a7a6b] hover:text-white rounded-full shadow-md  hover:shadow-lg  hover:-translate-y-1 transition transform duration-300" href="pages/Volunteers.php">Quiero ser voluntario</a>
               
                </div>
            </div>
        </div>
        
        <!-- Botones conectados con la base de datos, deberan aumentar cuando las personas escriban  --> 
        <div class="flex justify-center gap-10 ">
            <div class="text-center">
                <p class="text-white font-bold text-[clamp(1.25rem,4vw,2.5rem)]">127</p>
                <p class="text-gray-900">Reset Iniciados</p>
            </div>
            <div class="text-center">
                <p class="text-white font-bold text-[clamp(1.25rem,4vw,2.5rem)]">89</p>
                <p class="text-gray-900">Completados</p>
            </div>
            <div class="text-center">
                <p class="text-white font-bold text-[clamp(1.25rem,4vw,2.5rem)]">34</p>
                <p class="text-gray-900">Voluntarios</p>
            </div>
        </div>
    </main>

    <!-- ola del inicio -->
        <div class=" relative bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] w-full pt-20 pb-40">
            <div class="relative z-10"></div>
            <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
                <svg class="relative block w-full h-[120px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#f4f9fa" fill-opacity="1" d="M0,320L26.7,293.3C53.3,267,107,213,160,202.7C213.3,192,267,224,320,245.3C373.3,267,427,277,480,261.3C533.3,245,587,203,640,165.3C693.3,128,747,96,800,74.7C853.3,53,907,43,960,74.7C1013.3,107,1067,181,1120,192C1173.3,203,1227,149,1280,149.3C1333.3,149,1387,203,1413,229.3L1440,256L1440,320L0,320Z"></path>
                </svg>
            </div>
        </div>

            <div class="flex flex-col items-center text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-slate-800">
                    ¿Cómo funciona <span class="text-[#ff3b30]">RESET</span>?
                </h2>
                <p class="text-slate-600 text-lg max-w-2xl leading-relaxed">
                    Un proceso sencillo, humano y acompañado. <br class="hidden md:block"> 
                    Diseñado para que retomes tus metas con seguridad.
                </p>
            </div>

            <div class=" max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-3 mt-10 gap-6 p">
                <!-- CARD 1 -->
                <div class="relative bg-white rounded-4xl p-8 md:col-span-2 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <div class="absolute -top-3 -left-4 w-10 h-10 bg-[#00a5cf] text-white rounded-full flex items-center justify-center font-bold shadow-lg ">1</div>
                    
                    <svg class="group-hover:bg-[#00a5cf]/10" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[#004e64]"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path><path d="M8 9h8"></path><path d="M8 13h6"></path></svg>
                    <h4 class="text-xl font-bold mt-6 text-slate-800">Cuéntanos tu historia</h4>
                    <p class="text-gray-500">
                    Comparte con nosotros que avandonaste y por qué. Sin juicios, solo para comprenderte
                    </p>
                </div>

                <!-- CARD 2 -->
                <div class="relative bg-white rounded-4xl p-8  hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <div class="absolute -top-3 -left-4 w-10 h-10 bg-[#00a5cf] text-white rounded-full flex items-center justify-center font-bold shadow-lg">2</div>
                    <svg class="group-hover:bg-[#00a5cf]/10" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[#004e64]"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>

                    <h4 class="text-xl font-bold mt-6 text-slate-800">Te conectamos</h4>
                    <p class="text-gray-500">
                    Un voluntario con algun problema similar te acompañará en el proceso.
                    </p>
                </div>

                <!-- CARD 4 -->
                <div class="relative bg-white rounded-4xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <div class="absolute -top-3 -right-4 w-10 h-10 bg-[#00a5cf] text-white rounded-full flex items-center justify-center font-bold shadow-lg">4</div>
                    <svg class="group-hover:bg-[#00a5cf]/10" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[#004e64]"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg>

                    <h4 class="text-xl font-bold mt-6 text-slate-800">Lo logras</h4>
                    <p class="text-gray-500">
                    Celebramos contigo tu nueva oportunidad hecha realidad.
                    </p>
                </div>
                <!-- CARD 3 -->
                <div class=" relative bg-white rounded-4xl p-8  md:col-span-2 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <div class="absolute -top-3 -right-4 w-10 h-10 bg-[#00a5cf] text-white rounded-full flex items-center justify-center font-bold shadow-lg">3</div>
                   <svg class="group-hover:bg-[#00a5cf]/10" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-[#004e64]"><path d="M12 2v2"></path><path d="m4.93 4.93 1.41 1.41"></path><path d="M20 12h2"></path><path d="m19.07 4.93-1.41 1.41"></path><path d="M15.947 12.65a4 4 0 0 0-7.925 0"></path><path d="M2 12h2"></path><path d="M2 16h20"></path><path d="M4 20h16"></path></svg>

                    <h4 class="text-xl font-bold mt-6 text-slate-800">Empiezas de nuevo</h4>
                    <p class="text-gray-500">
                    Con nuestro apoyo, recursos y un plan personalizado para tu RESET.
                    </p>
                </div>
                </div>
            </div>
            </section>
            
        <!-- Tarjetas donde se explican sobre que pueden escribir los que tienen problemas -->
        <section class="max-w-full mb-20 md:mb-40 text-white mt-10 md:mt-20 font-sans px-4">
            <div class="bg-[#004e64] rounded-3xl md:rounded-[2vw] overflow-hidden relative p-6 md:p-12 lg:p-20">
                
                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-48 md:h-64 bg-cyan-500/10 blur-[60px] md:blur-[100px] rounded-full pointer-events-none"></div>

                <div class="text-center pt-10 md:pt-16 pb-12 relative z-10">
                    <p class="text-[#00a5cf] font-bold text-xs md:text-sm tracking-[0.2em] uppercase mb-4 opacity-90">
                        ¿Qué ayudamos a reiniciar?
                    </p>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 text-slate-800">
                        Todos merecemos una <br class="block sm:hidden"> <span class="text-[#ff3b30]">segunda oportunidad</span>
                    </h2>
                </div>

                <div class="max-w-7xl mx-auto pb-10 md:pb-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 text-center relative z-10">
                    
                    <div class="group bg-white/5 backdrop-blur-lg border border-white/10 flex flex-col items-center gap-5 rounded-2xl p-6 md:p-8 hover:bg-white/10 hover:border-white/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="p-4 rounded-full bg-white/5 group-hover:bg-[#ff3b30]/20 duration-300">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white group-hover:text-[#ff3b30] duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg md:text-xl font-bold mb-2">Estudios</h4>
                            <p class="text-white/70 text-sm">Carreras, cursos y certificaciones que quedaron en pausa.</p>
                        </div>
                    </div>

                    <div class="group bg-white/5 backdrop-blur-lg border border-white/10 flex flex-col items-center gap-5 rounded-2xl p-6 md:p-8 hover:bg-white/10 hover:border-white/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="p-4 rounded-full bg-white/5 group-hover:bg-[#ff3b30]/20 duration-300">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white group-hover:text-[#ff3b30] duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 18h6"></path>
                                <path d="M10 22h4"></path>
                                <path d="M12 2a7 7 0 0 1 7 7c0 2.38-1.19 4.47-3 5.74V17a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 0 1 7-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg md:text-xl font-bold mb-2">Proyectos</h4>
                            <p class="text-white/70 text-sm">Apps, negocios e ideas brillantes que no llegaron a lanzarse.</p>
                        </div>
                    </div>

                    <div class="group bg-white/5 backdrop-blur-lg border border-white/10 flex flex-col items-center gap-5 rounded-2xl p-6 md:p-8 hover:bg-white/10 hover:border-white/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="p-4 rounded-full bg-white/5 group-hover:bg-[#ff3b30]/20 duration-300">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white group-hover:text-[#ff3b30] duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <path d="M9 13v-1h6v1"></path>
                                <path d="M12 18v-6"></path>
                                <path d="M9 17h6"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg md:text-xl font-bold mb-2">Hábitos</h4>
                            <p class="text-white/70 text-sm">Rutinas de ejercicio, lectura y alimentación saludable.</p>
                        </div>
                    </div>

                    <div class="group bg-white/5 backdrop-blur-lg border border-white/10 flex flex-col items-center gap-5 rounded-2xl p-6 md:p-8 hover:bg-white/10 hover:border-white/20 hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                        <div class="p-4 rounded-full bg-white/5 group-hover:bg-[#ff3b30]/20 duration-300">
                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white group-hover:text-[#ff3b30] duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg md:text-xl font-bold mb-2">Sueños</h4>
                            <p class="text-white/70 text-sm">Esas metas personales importantes que dejaste de lado.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

            <!-- Ola de los botones reset y voluntarios del final de la pagina -->
                <div class="relative bg-transparent pt-20">
                    <div class="relative overflow-hidden leading-[0] h-[150px]">
                        <svg class="relative block w-full h-[150px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
                            <defs>
                                <linearGradient id="waveGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#9fffcb" />
                                    <stop offset="100%" stop-color="#00a5cf" />
                                </linearGradient>
                            </defs>
                            <path fill="url(#waveGradient)" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                    </div>
                </div>
                
            <!-- Botones de reset y voluntarios en la pagina -->
            <section class="relative  bg-linear-to-r from-[#9fffcb] to-[#00a5cf] min-h-150  py-20">
            
                <div>
                    <div class="flex justify-center  text-center my-10 p-2">
                        <h1 class="max-w-3xl text-gray-900 font-bold text-4xl sm:text-5xl sm:p-3 lg:text-6xl">
                            Hoy puede ser el <i class="text-white">dia</i> que todo lo <i class="text-white">cambie</i>
                        </h1>
                    </div>
                    <div class="max-w-xl mx-auto text-center my-8 top-0">
                        <p class="pl-3 pr-3 mb-5  text-gray-900  sm:text-sm sm:p-2 lg:text-lg">No tienes que hacerlo solo/a. Da el primer paso y déjanos ayudarte a reiniciar lo que quedó pendiente.</p>
                        <div class=" flex justify-center text-center items-center  gap-3 p-2">
                            <a class="block w-47 px-4 py-2 bg-[#1a7a6b]  text-white  rounded-full shadow-md  hover:shadow-lg  hover:-translate-y-1 transition transform duration-300" href="pages/RequestReset.php">Solicitar RESET</a>
                        <a class="block w-47 px-4 py-2   bg-[#1a7a6b] text-white  hover:bg-[#1a7a6b] hover:text-white rounded-full shadow-md  hover:shadow-lg  hover:-translate-y-1 transition transform duration-300" href="pages/Volunteers.php">Quiero ser voluntario</a>
                    
                        </div>
                    </div>
                </div> 
            </section>
    
    <!-- Importacion del footer -->
    <?php
    require_once "src/components/Footer.php";
    ?>

</body>
</html>