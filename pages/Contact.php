<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>


    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

   
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
<body class="font-sans bg-[#EBEBEB] " id="contacto" >
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "../src/components/Header.php";
    ?>

    <!-- BOTON DE IR AL PRINCIPIO DE LA PAGINA CONTACTO -->
    <div  class="scroll-smooth ">

        <a href="#contacto" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#8CBEB2] text-white hover:bg-[#F2EBBF] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>

    </div>

        <div class="text-center pt-35   pb-15">
            <p class=" text-[#00a5cf] text-xl sm:text-xl sm:p-2 lg:text-xl"><b>Contacto</b></p>
            <p class=" text-3xl sm:text-4xl sm:p-3 md:text-3xl lg:text-5xl"><b>¿Tienes alguna <i class="text-[#ff3b30]">pregunta</i>?</b></p>
            <p class="text-gray-500  sm:text-lg sm:p-2 lg:text-lg px-7">Puede ponerse en contacto con nosotros y le responderemos a la mayor brevedad posible.</p>
        </div>

        <!-- Texto de la izquierda -->
        <!-- Informacion sobre nosotros y preguntas frecuentes que hemos recibido -->
        <section class="mb-4 grid  grid-cols-1 lg:grid-cols-2 ">
            <div id="InformaciondeContacto" class="bg-white m-6 rounded-xl border border-stone-300 px-5 py-4 focus:outline-none border-stone-300 border-white bg-white">
        
            <p class=" text-black font-bold text-lg sm:text-lg sm:p-2 lg:text-lg">Información de contacto</p>
            <div class="  mx-auto px-4 py-7 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-3 ">
            <div class="p-7 flex flex-col  gap-4  bg-[#F6f6f6] rounded-lg   ">
                <!-- Icono Email -->
                <svg width="50px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="6.624" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#7ae582"></path> </g></svg>
                <h4 ><b>Email</b></h4>
                <p class="text-[#004e64] font-bold" mailto:aliciaantonio@resetong.com>aliciaantonio@resetong.com</p>
                <p class="text-[#999]">Puedes escribirnos cuando quieras, estaremos disponible para ti</p>
            </div>
            <div class=" flex flex-col  gap-4 border-white bg-[#F6f6f6] rounded-lg p-5  ">
                <!-- Icono telefono -->
                <svg width="50px" height="50px" viewBox="-4.32 -4.32 32.64 32.64" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.32" y="-4.32" width="32.64" height="32.64" rx="7.5072" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 5V9M15 9L19 9M15 9L21 3M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21Z" stroke="#7ae582" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <h4 ><b>Teléfono</b></h4>
                <p class="text-[#004e64] font-bold" >+34 625 51 59 33</p>
                <p class="text-[#999]">Lunes a Viernes, 8-15h </p>
            </div>
            <div class=" flex  gap-4 border-white bg-[#F6f6f6] rounded-lg p-5  ">
                <div class="felx flex-cols">
                <!-- Icono telefono -->
                <svg width="50px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="6.624" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#7ae582" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#7ae582" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <h4 ><b>Ubicación</b></h4>
                <p class="text-[#004e64] font-bold">Lepe, Huelva</p>
                </div>

                <!-- Api de google maps de donde nos situamos-->
                 <div class="w-full md:w-[300px] h-[220px]">
                 <iframe class="w-full h-full rounded-lg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3175.4900009912135!2d-7.211520187600835!3d37.25980607200345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1031db3f21c39d%3A0x25ae42e91b0f6fdb!2sAv.%20Arboleda%2C%2021440%20Lepe%2C%20Huelva!5e0!3m2!1ses!2ses!4v1769950943506!5m2!1ses!2ses"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class=" flex flex-col gap-4 border-white bg-[#F6f6f6] rounded-lg p-5  ">
                <!-- Icono horario -->
                <svg width="50px" height="50px" viewBox="-4.08 -4.08 32.16 32.16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.08" y="-4.08" width="32.16" height="32.16" rx="7.718399999999999" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.8284 6.75736C12.3807 6.75736 12.8284 7.20507 12.8284 7.75736V12.7245L16.3553 14.0653C16.8716 14.2615 17.131 14.8391 16.9347 15.3553C16.7385 15.8716 16.1609 16.131 15.6447 15.9347L11.4731 14.349C11.085 14.2014 10.8284 13.8294 10.8284 13.4142V7.75736C10.8284 7.20507 11.2761 6.75736 11.8284 6.75736Z" fill="#7ae582"></path> </g></svg>
                <h4 ><b>Horario</b></h4>
                <p class="text-[#004e64] font-bold" >Lun - Vie</p>
                <p class="text-[#999]">8:15 - 14:45 h</p>
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
                <form action="../../app/controlador/ContactController.php" method="post" class="m-6 rounded-xl border border-stone-300 px-7 py-5 focus:outline-none border-stone-300 border-white bg-white">
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

        
    
    <?php
    require_once "../src/components/Footer.php";
    ?>

</body>
</html>