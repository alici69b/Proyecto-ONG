<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

   
<!--font-family: font-serif
    color: coral principal #ff3b30
    color: beige #f6f6f2
    color footer gray-900 
    color numeros conectados con la base de datos #1441a5
    color fondo-ayudar-reiniciar #ffe7e5-->

</head>
<body class="font-sans bg-[#fAfAfA]">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "src/components/Header.php";
    ?>
        <div class="text-center pt-15 pb-15">
            <p class=" text-[#ff3b30] text-xl sm:text-xl sm:p-2 lg:text-xl"><b>Contacto</b></p>
            <p class=" text-3xl sm:text-4xl sm:p-3 md:text-3xl lg:text-5xl"><b>¿Tienes alguna <i class="text-[#ff3b30]">pregunta</i>?</b></p>
            <p class="text-gray-500  sm:text-lg sm:p-2 lg:text-lg px-7">Puede ponerse en contacto con nosotros y le responderemos a la mayor brevedad posible.</p>
        </div>

        <section class="mb-4 grid  sm:grid-cols-1 lg:grid-cols-2 ">
            <div id="InformaciondeContacto">
        
        <p class=" text-black text-lg sm:text-lg sm:p-2 lg:text-lg">Información de contacto</p>
        <div class="  mx-auto px-4 py-7 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-3 ">
            <div class="p-7 flex flex-col  gap-4  bg-white rounded-lg   ">
                <!-- Icono Email -->
                <svg width="50px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="6.624" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z" fill="#ff3b30"></path> </g></svg>
                <h4 ><b>Email</b></h4>
                <p class="text-[#ff3b30]" mailto:aliciaantonio@resetong.com>aliciaantonio@resetong.com</p>
                <p class="text-[#999]">Puedes escribirnos cuando quieras, estaremos disponible para ti</p>
            </div>
            <div class=" flex flex-col  gap-4 border-white bg-white rounded-lg p-5  ">
                <!-- Icono telefono -->
                <svg width="50px" height="50px" viewBox="-4.32 -4.32 32.64 32.64" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.32" y="-4.32" width="32.64" height="32.64" rx="7.5072" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 5V9M15 9L19 9M15 9L21 3M18.5 21C9.93959 21 3 14.0604 3 5.5C3 5.11378 3.01413 4.73086 3.04189 4.35173C3.07375 3.91662 3.08968 3.69907 3.2037 3.50103C3.29814 3.33701 3.4655 3.18146 3.63598 3.09925C3.84181 3 4.08188 3 4.56201 3H7.37932C7.78308 3 7.98496 3 8.15802 3.06645C8.31089 3.12515 8.44701 3.22049 8.55442 3.3441C8.67601 3.48403 8.745 3.67376 8.88299 4.05321L10.0491 7.26005C10.2096 7.70153 10.2899 7.92227 10.2763 8.1317C10.2643 8.31637 10.2012 8.49408 10.0942 8.64506C9.97286 8.81628 9.77145 8.93713 9.36863 9.17882L8 10C9.2019 12.6489 11.3501 14.7999 14 16L14.8212 14.6314C15.0629 14.2285 15.1837 14.0271 15.3549 13.9058C15.5059 13.7988 15.6836 13.7357 15.8683 13.7237C16.0777 13.7101 16.2985 13.7904 16.74 13.9509L19.9468 15.117C20.3262 15.255 20.516 15.324 20.6559 15.4456C20.7795 15.553 20.8749 15.6891 20.9335 15.842C21 16.015 21 16.2169 21 16.6207V19.438C21 19.9181 21 20.1582 20.9007 20.364C20.8185 20.5345 20.663 20.7019 20.499 20.7963C20.3009 20.9103 20.0834 20.9262 19.6483 20.9581C19.2691 20.9859 18.8862 21 18.5 21Z" stroke="#ff3b30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <h4 ><b>Telefono</b></h4>
                <p class="text-[#ff3b30]" >+34 625 51 59 33</p>
                <p class="text-[#999]">Lunes a Viernes, 8-15h </p>
            </div>
            <div class=" flex flex-col  gap-4 border-white bg-white rounded-lg p-5  ">
                <!-- Icono telefono -->
                <svg width="50px" height="50px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="6.624" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z" stroke="#ff3b30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" stroke="#ff3b30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <h4 ><b>Telefono</b></h4>
                <p class="text-[#ff3b30]">Lepe, Huelva</p>
            </div>
            <div class=" flex flex-col gap-4 border-white bg-white rounded-lg p-5  ">
                <!-- Icono horario -->
                <svg width="50px" height="50px" viewBox="-4.08 -4.08 32.16 32.16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.08" y="-4.08" width="32.16" height="32.16" rx="7.718399999999999" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.8284 6.75736C12.3807 6.75736 12.8284 7.20507 12.8284 7.75736V12.7245L16.3553 14.0653C16.8716 14.2615 17.131 14.8391 16.9347 15.3553C16.7385 15.8716 16.1609 16.131 15.6447 15.9347L11.4731 14.349C11.085 14.2014 10.8284 13.8294 10.8284 13.4142V7.75736C10.8284 7.20507 11.2761 6.75736 11.8284 6.75736Z" fill="#ff3b30"></path> </g></svg>
                <h4 ><b>Horario</b></h4>
                <p class="text-[#ff3b30]" >Lun - Vie</p>
                <p class="text-[#999]">8:15 - 14:45 h</p>
            </div>
        </div>
            </div>


            <div id="Formulario" class="max-w-100% ">
                <form action="../../app/controlador/ContactController.php" method="post" class="m-6 rounded-xl border border-stone-300 px-5 py-4 focus:outline-none border-stone-300 border-white bg-white">
                    <h3 class="text-black font-bold text-sm]">Envíanos un mensaje</h3><br>
                <!-- Nombre y Email -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                        <label class="block font-medium mb-2">Nombre *</label>
                        <input
                            type="text"
                            placeholder="Tu nombre"
                            class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#ff3b30]"
                            required/>
                        </div>

                        <div>
                        <label class="block font-medium mb-2">Email *</label>
                        <input
                            type="email"
                            placeholder="tu@email.com"
                            class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#ff3b30]"
                            required
                        />
                        </div>
                    </div>

                    <!-- Asunto -->
                    <div>
                        <label class="block font-medium mb-2">Asunto *</label>
                        <input
                        type="text"
                        placeholder="¿De qué quieres hablar?"
                        class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#ff3b30]"
                        required
                        />
                    </div>

                    <!-- Mensaje -->
                    <div>
                        <label class="block font-medium mb-2">Mensaje *</label>
                        <textarea
                        rows="5"
                        placeholder="Hablanos de lo que te ocurre"
                        class="w-full rounded-xl border border-stone-300 px-5 py-4 focus:outline-none focus:ring-2 focus:ring-[#ff3b30] resize-none"
                        required></textarea>
                    </div>

                    <!-- Botón -->
                    <button
                        type="submit"
                        class="w-full bg-[#ff3b30] hover:bg-red-600  shadow-md  hover:shadow-lg  text-white font-semibold py-4 rounded-xl">
                        Enviar mensaje
                    </button>
                </form>
            </div>
        </section>
    
    <?php
    require_once "src/components/Footer.php";
    ?>

</body>
</html>