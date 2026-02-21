<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/svg+xml" href="../public/img/Logo_RESET.svg">
    <title>Contacto - RESET</title>

     <!-- Link al css -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>


    <!-- Fuentes de google fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Domine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bricolage Grotesque">


    <style>
      body {
        font-family: 'Bricolage Grotesque';
        }
    </style>
   
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
<body class="font-['Bricolage Grotesque']  bg-[#f4f9fa]  " id="contacto">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "../src/components/Header.php";
    ?>

    <!-- BOTON DE IR AL PRINCIPIO DE LA PAGINA CONTACTO -->
    <div  class="scroll-smooth">

        <a href="#contacto" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#8CBEB2] text-white hover:bg-[#F2EBBF] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>

    </div> 
    <main class="max-w-7xl mx-auto px-4 py-12 pt-40">
   
           
            <!-- Título de la página -->
            <div class="text-center">
             <p class="text-[#00a5cf] font-bold text-sm tracking-[0.2em] uppercase 4 opacity-90">
                        Contacto
                    </p>
            <p class="font-['Domine'] md:text-6xl lg:text-6xl text-4xl p-3"><b>¿Tienes alguna <i class="bg-linear-to-r from-[#00a5cf] to-[#9fffcb] bg-clip-text text-transparent">pregunta</i>?</b></p>
            <p class="text-gray-500  sm:text-lg sm:p-2 lg:text-lg px-7">Puede ponerse en contacto con nosotros y le responderemos a la mayor brevedad posible.</p>
        </div>

        <!-- Texto de la izquierda -->
        <!-- Informacion sobre nosotros y preguntas frecuentes que hemos recibido -->
        <section class="mb-4 grid  grid-cols-1 lg:grid-cols-2 ">
            <div id="InformaciondeContacto" class=" px-5 py-4 focus:outline-none ">
        
            <p class=" text-black font-bold text-lg md:text-xl p-2 lg:text-xl">Información de contacto</p>
            
            <div class="  mx-auto px-4 py-7 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-3 ">
                <div class=" bg-white rounded-4xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <!-- Icono Email -->
                    <svg width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M13.025 17H3.707l5.963-5.963L12 12.83l2.33-1.794 1.603 1.603a5.463 5.463 0 0 1 1.004-.41l-1.808-1.808L21 5.9v6.72a5.514 5.514 0 0 1 1 .64V5.5A1.504 1.504 0 0 0 20.5 4h-17A1.504 1.504 0 0 0 2 5.5v11A1.5 1.5 0 0 0 3.5 18h9.525c-.015-.165-.025-.331-.025-.5s.01-.335.025-.5zM3 16.293V5.901l5.871 4.52zM20.5 5c.009 0 .016.005.025.005L12 11.57 3.475 5.005c.009 0 .016-.005.025-.005zm-2 8a4.505 4.505 0 0 0-4.5 4.5 4.403 4.403 0 0 0 .05.5 4.49 4.49 0 0 0 4.45 4h.5v-1h-.5a3.495 3.495 0 0 1-3.45-3 3.455 3.455 0 0 1-.05-.5 3.498 3.498 0 0 1 5.947-2.5H20v.513A2.476 2.476 0 0 0 18.5 15a2.5 2.5 0 1 0 1.733 4.295A1.497 1.497 0 0 0 23 18.5v-1a4.555 4.555 0 0 0-4.5-4.5zm0 6a1.498 1.498 0 0 1-1.408-1 1.483 1.483 0 0 1-.092-.5 1.5 1.5 0 0 1 3 0 1.483 1.483 0 0 1-.092.5 1.498 1.498 0 0 1-1.408 1zm3.5-.5a.5.5 0 0 1-1 0v-3.447a3.639 3.639 0 0 1 1 2.447z"></path><path fill="none" d="M0 0h24v24H0z"></path></g></svg>
                    <h4 class="text-xl font-bold mt-6 text-slate-800"><b>Email</b></h4>
                    <p class="text-[#004e64] font-bold" mailto:aliciaantonio@resetong.com>aliciaantonio@resetong.com</p>
                    <p class="text-gray-500">Puedes escribirnos cuando quieras, estaremos disponible para ti</p>
                </div>
                
                <div class=" bg-white rounded-4xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <!-- Icono Telefono -->
                    
                    <h4 class="text-xl font-bold mt-6 text-slate-800"><b>Teléfono</b></h4>
                    <p class="text-[#004e64] font-bold">+34 625 51 59 33</p>
                    <p class="text-gray-500">Lunes a Viernes, 8-15h</p>
                </div>

                <div class=" bg-white rounded-4xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <!-- Icono ubicacion -->
                    
                    <h4 class="text-xl font-bold mt-6 text-slate-800"><b>Ubicación</b></h4>
                    <p class="text-[#004e64] font-bold">Lepe, Huelva</p>
                    <!-- Api de google maps de donde nos situamos-->
                    <div class="w-full md:w-[210px] h-[180px]">
                    <iframe class="w-full h-full rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.4900009912135!2d-7.211520187600835!3d37.25980607200345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1031db3f21c39d%3A0x25ae42e91b0f6fdb!2sAv.%20Arboleda%2C%2021440%20Lepe%2C%20Huelva!5e0!3m2!1ses!2ses!4v1769950943506!5m2!1ses!2ses"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class=" bg-white rounded-4xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-slate-100">
                    <!-- Icono Horario -->
                    
                    <h4 class="text-xl font-bold mt-6 text-slate-800"><b>Horario</b></h4>
                    <p class="text-[#004e64] font-bold">Lun - Vie</p>
                    <p class="text-gray-500">8:15 - 14:45 h</p>
                    <p class="text-gray-500">Nuestro horario, para que podais contactar con nosotros si teneis algun problema</p>
                </div>

        </div>
            <!-- Preguntas frecuentes que hemos tenido que solventar-->
            <div class="mb-4  py-16 ">
                <h3 class="text-black font-bold text-lg sm:text-lg sm:p-2 lg:text-lg">Preguntas Frecuentes</h3><br>
                <div class="max-w-xl mx-auto space-y-4">
                <!-- FAQ 1 -->
                <details class="group rounded-xl border border-gray-200 p-4">
                    <summary class="flex cursor-pointer items-center justify-between font-medium">
                    ¿Cuánto cuesta el servicio?
                    <span class="transition group-open:rotate-180">⌄</span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                    RESET es una ONG sin animo de lucro. Aunque siempre tienes la opcion de poder donar algo por ayudarte.
                    </p>
                </details>
                <!-- FAQ 2 -->
                <details class="group rounded-xl border border-gray-200 p-4">
                    <summary class="flex cursor-pointer items-center justify-between font-medium">
                    ¿Cuánto tiempo tarda el proceso?
                    <span class="transition group-open:rotate-180">⌄</span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                    Depende de cada caso. Normalmente contactamos en 48h y el acompañamiento dura entre 1-6 meses.
                    </p>
                </details>

                <!-- FAQ 3 -->
                <details class="group rounded-xl border border-gray-200 p-4">
                    <summary class="flex cursor-pointer items-center justify-between font-medium">
                    ¿Puedo se voluntario desde cualquier país?
                    <span class="transition group-open:rotate-180">⌄</span>
                    </summary>
                    <p class="mt-3 text-gray-600">
                    ¡Síii! TRabajamos 100% online, así que puedes participar desde cualquier lugar del mundo.
                    </p>
                </details>

                
            </div>
        </div>
        </div>


        <div id="Formulario" class="max-w-100% grid">
                <form action="../../app/controlador/ContactController.php" method="post" class="m-6 rounded-xl border px-7 py-5 focus:outline-none border-stone-300 bg-white">
                    <h3 class="text-black font-bold text-lg sm:text-lg sm:p-2 lg:text-lg">Envíanos un mensaje</h3><br>
                <!-- Nombre y Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                        <label class="block font-medium mb-2">Nombre *</label>
                        <input type="text" placeholder="Tu nombre" class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#1a7a6b]" required/>
                        </div>

                        <div>
                        <label class="block font-medium mb-2">Email *</label>
                        <input type="email" placeholder="tu@email.com" class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#1a7a6b]" required />
                        </div>
                    </div>

                    <!-- Asunto -->
                    <div>
                        <label class="block font-medium mb-2">Asunto *</label>
                        <input type="text" placeholder="¿De qué quieres hablar?" class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#1a7a6b]" require />
                    </div>

                    <!-- Mensaje -->
                    <div>
                        <label class="block font-medium mb-2">Mensaje *</label>
                        <textarea rows="5" placeholder="Hablanos de lo que te ocurre" class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#1a7a6b] resize-none" required></textarea>
                    </div>

                    <!-- Botón -->
                    <button type="submit" class="w-full mt-3 px-4 py-4  bg-[#25a18e] text-white  hover:bg-[#1a7a6b] hover:text-white rounded-lg shadow-md  hover:shadow-lg  "> Enviar mensaje
                    </button>
                </form>
            </div>
        </section>

        
                 </main>
    <?php
    require_once "../src/components/Footer.php";
    ?>

</body>
</html>