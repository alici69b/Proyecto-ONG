<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../public/img/Logo_RESET.svg">
    <title>Sé voluntario - RESET</title>

        <!-- Fuentes de google fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Domine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bricolage Grotesque">


    <style>
      body {
        font-family: 'Bricolage Grotesque';
        }
        html {
            scroll-behavior: smooth; 
        }
    </style>
</head>
<body class="bg-[#f5f7fc]" id="inicio">

    <!-- Importamos el Menú de navegación -->
    <?php
    require_once "../src/components/Header.php";
    ?>

    <!-- BOTON DE IR A INICIO -->
    <div  class="scroll-smooth ">
        <a href="#inicio" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#25a18e] text-white hover:bg-[#1a7a6b] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>
    </div>

    
    <main class="pt-40 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Titulo -->
        <div class="flex flex-col align-middle text-center items-center justify-center space-y-4">
            <div class="flex flex-row space-x-1 bg-[#da5f4a]/10 rounded-full text-[#da5f4a] w-full max-w-xs mx-auto md:text-base text-sm p-1 justify-center text-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                <div class="">
                    Ofrece segundas oportunidades
                </div>
            </div>
            <div class="font-['Domine'] font-semibold md:text-5xl text-4xl">
                Hazte Voluntario RESET
            </div>
            <div class="md:text-xl text-lg text-gray-500/70">
                Tu experiencia puede ser la luz que alguien necesita para volver a empezar.
            </div>
        </div>

        <!-- Datos -->
        <div class="flex flex-row flex-1 space-x-5 pt-12 pb-12">
           <div class="flex flex-col flex-1 bg-teal-600/10 text-teal-600 items-center justify-center rounded-xl p-7">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 7a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                <div class="font-semibold text-2xl md:text-3xl">8</div>
                <div class="text-gray-500 text-sm">Voluntarios activos</div>
            </div> 
            <div class="flex flex-col flex-1 bg-[#da5f4a]/10 text-[#da5f4a] items-center justify-center rounded-xl p-7">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                <div class="font-semibold text-2xl md:text-3xl">4</div>
                <div class="text-gray-500 text-sm">RESETs logrados</div>
            </div>
            <div class="flex flex-col flex-1 bg-yellow-400/10 text-yellow-400 items-center justify-center rounded-xl p-7">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-carambola"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17.108 22.085c-1.266 -.068 -2.924 -.859 -5.071 -2.355l-.04 -.027l-.037 .027c-2.147 1.497 -3.804 2.288 -5.072 2.356l-.178 .005c-2.747 0 -3.097 -2.64 -1.718 -7.244l.054 -.178l-.1 -.075c-6.056 -4.638 -5.046 -7.848 2.554 -8.066l.202 -.005l.115 -.326c1.184 -3.33 2.426 -5.085 4.027 -5.192l.156 -.005c1.674 0 2.957 1.76 4.182 5.197l.114 .326l.204 .005c7.6 .218 8.61 3.428 2.553 8.065l-.102 .075l.055 .178c1.35 4.512 1.04 7.137 -1.556 7.24l-.163 .003z" /></svg>
                <div class="font-semibold text-2xl md:text-3xl">4.9<span class="text-sm text-gray-500"> / 5</span></div>
                <div class="text-gray-500 text-sm">Valoración media</div>
            </div>
        </div>
        
        <!-- Formulario -->
        <form action="../app/controlador/voluntariocontrolador.php" method="POST">
            <div class="bg-white rounded-xl shadow-lg text-start flex flex-col w-full max-w-3xl mx-auto pb-8 px-6 sm:px-8 md:px-10 pt-8 gap-7">
                <div class="flex md:flex-row flex-col gap-4 w-full max-w-4xl">
                    <div class="flex flex-col flex-1 min-w-0 space-y-2">
                        <label for="name">Tu nombre</label>
                        <input type="text" name="name" placeholder="¿Cómo te llamas?" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">

                    </div>
                    <div class="flex flex-col flex-1 min-w-0 space-y-2">
                        <label for="email">Tu email</label>
                        <input type="email" name="email" placeholder="Para contactarte" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                    </div>
                </div>
                <div class="flex md:flex-row flex-col gap-4 w-full">
                    <div class="flex flex-col flex-1 space-y-2">
                        <label for="tipo-ayuda">¿Cómo puedes ayudar?</label>
                        <select name="tipo-ayuda" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                        <option>Tipo de ayuda</option>
                        <option value="estudio">Mentoría en estudios</option>
                        <option value="salud">Coaching de salud</option>
                        <option value="creatividad">Guía creativa</option>
                        <option value="proyecto">Asesoría de emprendimiento</option>
                        <option value="otros">Otro</option>
                    </select>
                    </div>
                    <div class="flex flex-col flex-1 space-y-2">
                        <label for="disponibilidad">¿Cuánto tiempo tienes?</label>
                        <select name="disponibilidad" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                        <option>Disponibilidad</option>
                        <option value="estudio">2-4 horas/semana</option>
                        <option value="salud">Algunas horas/mes</option>
                        <option value="creatividad">Ayuda puntual</option>
                        <option value="proyecto">Flexible</option>
                    </select>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <label for="descripcion-problema">¿Cuál es tu experiencia?</label>
                    <textarea type="text" name="descripcion-problema" placeholder="Cuéntanos sobre tu experiencia profesional o personal que pueda ayudar a otros..." class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full min-h-[100px] resize-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]"></textarea>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <label for="causa-abandono">¿Por qué quieres ser voluntario/a?</label>
                    <textarea type="text" name="causa-abandono" placeholder="¿Qué te motiva a ayudar a otros a reiniciar?" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full min-h-[100px] resize-none focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]"></textarea>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mt-5 m-12 space-y-5">
                <button type="submit" class="flex flex-row bg-[#da5f4a] rounded-xl p-3 px-8 text-white space-x-3 cursor-pointer hover:bg-[#f37d68] transition duration-300 hover:shadow-lg hover:-translate-y-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" /></svg> 
                    <div class="text-lg">Quiero ser voluntario</div>
                </button>
                <div class="flex flex-row space-x-3">
                    <div class="text-base text-gray-500">Gracias por ofrecer segundas oportunidades.</div>
                </div>
            </div>
        </form>
    </main>

    <!-- Importamos el footer -->
    <footer>
    <?php
    require_once "../src/components/Footer.php";
    ?>    
    </footer>
</body>
</html>