<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>
    
    <!-- Link al css -->
    <link rel="stylesheet" href="css/style.css">

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

    -->

</head>
<body class="font-sans animacion-entrada bg-[#f4f9fa] " id="inicio">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "../src/Header.php";
    ?>

    <!-- BOTON DE IR A INICIO -->
    <div  class="scroll-smooth">

        <a href="#inicio" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#8CBEB2] text-white hover:bg-[#F2EBBF] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>

    </div>

    <!-- Aqui podremos encontrar 
            - Que es esta ong
            - Mensaje positivo
            - Los botones principales 
                - Reset
                -Voluntarios -->
    <main class=" bg-linear-to-r from-[#00a5cf] to-[#9fffcb] min-h-150  py-20">
        <div class="px-4 py-6 sm:px-10 md:px-20 flex justify-center ">
            <div class="flex bg-[#f6f6f2] items-center justify-center rounded-full px-4 py-2 sm:px-3 sm:py-2 gap-3 border border-gray-100">
            <svg class="w-6 h-6 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5766 8.70419C11.2099 7.56806 11.5266 7 12 7C12.4734 7 12.7901 7.56806 13.4234 8.70419L13.5873 8.99812C13.7672 9.32097 13.8572 9.48239 13.9975 9.5889C14.1378 9.69541 14.3126 9.73495 14.6621 9.81402L14.9802 9.88601C16.2101 10.1643 16.825 10.3034 16.9713 10.7739C17.1176 11.2443 16.6984 11.7345 15.86 12.715L15.643 12.9686C15.4048 13.2472 15.2857 13.3865 15.2321 13.5589C15.1785 13.7312 15.1965 13.9171 15.2325 14.2888L15.2653 14.6272C15.3921 15.9353 15.4554 16.5894 15.0724 16.8801C14.6894 17.1709 14.1137 16.9058 12.9622 16.3756L12.6643 16.2384C12.337 16.0878 12.1734 16.0124 12 16.0124C11.8266 16.0124 11.663 16.0878 11.3357 16.2384L11.0378 16.3756C9.88634 16.9058 9.31059 17.1709 8.92757 16.8801C8.54456 16.5894 8.60794 15.9353 8.7347 14.6272L8.76749 14.2888C8.80351 13.9171 8.82152 13.7312 8.76793 13.5589C8.71434 13.3865 8.59521 13.2472 8.35696 12.9686L8.14005 12.715C7.30162 11.7345 6.88241 11.2443 7.02871 10.7739C7.17501 10.3034 7.78993 10.1643 9.01977 9.88601L9.33794 9.81402C9.68743 9.73495 9.86217 9.69541 10.0025 9.5889C10.1428 9.48239 10.2328 9.32097 10.4127 8.99812L10.5766 8.70419Z" stroke="#ead757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
            <p class="text-gray-900 font-base text-sm sm:text-base md:text-lg whitespace-nowrap">
                ONG de Segundas Oportunidades
            </p>
            </div>
        </div>

        <div>
            <div class="flex justify-center  text-center my-10 p-2">
                <h1 class="max-w-3xl text-gray-900 font-bold text-4xl sm:text-5xl sm:p-3 lg:text-6xl">
                    Nada está <i class="text-white">perdido</i> hasta que decides <i class="text-white">reiniciarlo</i>
                </h1>
            </div>
            <div class="max-w-xl mx-auto text-center my-8 top-0">
                <p class="pl-3 pr-3 mb-5  text-gray-900  sm:text-sm sm:p-2 lg:text-lg">Volvemos a dar vida a proyectos, hábitos, ideas, estudios y pequeños sueños que quedaron en pausa</p>
                <div class=" flex justify-center text-center items-center  gap-3 p-2">
                    <a class="block w-47 px-4 py-2 bg-[#1a7a6b] text-black text-white  rounded-lg shadow-md  hover:shadow-lg  hover:-translate-y-1 transition transform duration-300" href="../public/RequestReset.php">Solicitar RESET</a>
                <a class="block w-47 px-4 py-2   bg-[#1a7a6b] text-white  hover:bg-[#1a7a6b] hover:text-white rounded-lg shadow-md  hover:shadow-lg  hover:-translate-y-1 transition transform duration-300" href="../public/Volunteers.php">Quiero ser voluntario</a>
               
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

    <div class=" relative bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] w-full pt-20 pb-40">
  
  <div class="relative z-10"> ... </div>

  <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
    <svg class="relative block w-full h-[120px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
      <path fill="#f4f9fa" fill-opacity="1" d="M0,320L26.7,293.3C53.3,267,107,213,160,202.7C213.3,192,267,224,320,245.3C373.3,267,427,277,480,261.3C533.3,245,587,203,640,165.3C693.3,128,747,96,800,74.7C853.3,53,907,43,960,74.7C1013.3,107,1067,181,1120,192C1173.3,203,1227,149,1280,149.3C1333.3,149,1387,203,1413,229.3L1440,256L1440,320L0,320Z"></path>
    </svg>
  </div>
</div>

        <section class="bg-[#f4f9fa] py-24">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16">

                <!-- Texto de la izquierda -->
                <div class="lg:sticky lg:top-32 h-fit">
                <h2 class="text-4xl font-bold mb-6">
                    ¿Cómo funciona <span class="text-[#ff3b30]">RESET</span>?
                </h2>

                <p class="text-gray-700 text-lg max-w-md">
                    Un proceso sencillo, humano y acompañado.  
                    A medida que bajas, descubrirás cada paso.
                </p>
                </div>

                <!-- tarjetas de la derecha -->
                <div class="relative space-y-32">

                <!-- CARD 1 -->
                <div class="sticky top-24 bg-white rounded-lg p-8 shadow-lg">
                    <div class="absolute -top-5 left-6 w-10 h-10  text-white flex items-center justify-center rounded-full font-bold bg-[#8CBEB2] text-white">1</div>
                    <svg class="" fill="#7ae582" width="64px" height="64px" viewBox="-3.84 -3.84 31.68 31.68" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-3.84" y="-3.84" width="31.68" height="31.68" rx="7.2863999999999995" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M10.968 18.769C15.495 18.107 19 14.434 19 9.938a8.49 8.49 0 0 0-.216-1.912C20.718 9.178 22 11.188 22 13.475a6.1 6.1 0 0 1-1.113 3.506c.06.949.396 1.781 1.01 2.497a.43.43 0 0 1-.36.71c-1.367-.111-2.485-.426-3.354-.945A7.434 7.434 0 0 1 15 19.95a7.36 7.36 0 0 1-4.032-1.181z" fill="#7ae582"></path><path d="M7.625 16.657c.6.142 1.228.218 1.875.218 4.142 0 7.5-3.106 7.5-6.938C17 6.107 13.642 3 9.5 3 5.358 3 2 6.106 2 9.938c0 1.946.866 3.705 2.262 4.965a4.406 4.406 0 0 1-1.045 2.29.46.46 0 0 0 .386.76c1.7-.138 3.041-.57 4.022-1.296z" fill="#7ae582"></path></g></svg>
                    

                    <h4 class="font-bold mt-6">Cuéntanos tu historia</h4>
                    <p class="text-gray-500">
                    Comparte con nosotros que avandonaste y por qué. Sin juicios, solo para comprenderte
                    </p>
                </div>

                <!-- CARD 2 -->
                <div class="sticky top-32 bg-white rounded-lg p-8 shadow-lg">
                    <div class="absolute -top-5 left-6 w-10 h-10  text-white flex items-center justify-center rounded-full font-bold  bg-[#8CBEB2] text-white">
                    2
                    </div>
                    <svg fill="#7ae582" width="64px" height="64px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="6.624" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3 18C3 15.3945 4.66081 13.1768 6.98156 12.348C7.61232 12.1227 8.29183 12 9 12C9.70817 12 10.3877 12.1227 11.0184 12.348C11.3611 12.4703 11.6893 12.623 12 12.8027C12.3107 12.623 12.6389 12.4703 12.9816 12.348C13.6123 12.1227 14.2918 12 15 12C15.7082 12 16.3877 12.1227 17.0184 12.348C19.3392 13.1768 21 15.3945 21 18V21H15.75V19.5H19.5V18C19.5 15.5147 17.4853 13.5 15 13.5C14.4029 13.5 13.833 13.6163 13.3116 13.8275C14.3568 14.9073 15 16.3785 15 18V21H3V18ZM9 11.25C8.31104 11.25 7.66548 11.0642 7.11068 10.74C5.9977 10.0896 5.25 8.88211 5.25 7.5C5.25 5.42893 6.92893 3.75 9 3.75C10.2267 3.75 11.3158 4.33901 12 5.24963C12.6842 4.33901 13.7733 3.75 15 3.75C17.0711 3.75 18.75 5.42893 18.75 7.5C18.75 8.88211 18.0023 10.0896 16.8893 10.74C16.3345 11.0642 15.689 11.25 15 11.25C14.311 11.25 13.6655 11.0642 13.1107 10.74C12.6776 10.4869 12.2999 10.1495 12 9.75036C11.7001 10.1496 11.3224 10.4869 10.8893 10.74C10.3345 11.0642 9.68896 11.25 9 11.25ZM13.5 18V19.5H4.5V18C4.5 15.5147 6.51472 13.5 9 13.5C11.4853 13.5 13.5 15.5147 13.5 18ZM11.25 7.5C11.25 8.74264 10.2426 9.75 9 9.75C7.75736 9.75 6.75 8.74264 6.75 7.5C6.75 6.25736 7.75736 5.25 9 5.25C10.2426 5.25 11.25 6.25736 11.25 7.5ZM15 5.25C13.7574 5.25 12.75 6.25736 12.75 7.5C12.75 8.74264 13.7574 9.75 15 9.75C16.2426 9.75 17.25 8.74264 17.25 7.5C17.25 6.25736 16.2426 5.25 15 5.25Z" fill="#7ae582"></path> </g></svg>
                    <h4 class="font-bold mt-6">Te conectamos</h4>
                    <p class="text-gray-500">
                    Un voluntario con algun problema similar te acompañará en el proceso.
                    </p>
                </div>

                <!-- CARD 3 -->
                <div class="sticky top-40 bg-white rounded-lg p-8 shadow-lg">
                    <div class="absolute -top-5 left-6 w-10 h-10  text-white flex items-center justify-center rounded-full font-bold  bg-[#8CBEB2] text-white">
                    3
                    </div>
                    <svg fill="#7ae582" width="64px" height="64px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="6.624" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.75 5.99996V10.5817L20.25 15.4567V19.5L14.85 17.25H14.164C14.2486 17.7211 14.3143 18.3821 14.142 18.9632C13.9659 19.5569 13.4881 20.2215 13.1356 20.6687C12.9464 20.9088 12.7667 21.1187 12.6346 21.2684C12.5683 21.3434 12.5134 21.404 12.4746 21.4463C12.4552 21.4674 12.4398 21.484 12.429 21.4957L12.4162 21.5094L12.4125 21.5133L12.4113 21.5145L12.4108 21.5151L11.8348 22.1242L11.2932 21.4844L11.2915 21.4825L11.2881 21.4784L11.2764 21.4644C11.2665 21.4525 11.2525 21.4357 11.235 21.4143C11.2 21.3715 11.1507 21.3104 11.0913 21.2347C10.9731 21.0839 10.8128 20.8723 10.6459 20.6301C10.3367 20.1815 9.91547 19.504 9.79514 18.8955C9.68449 18.3359 9.79889 17.7103 9.92202 17.25H9.15L3.75 19.5V15.4567L8.25 10.5817V5.99996C8.25 5.35551 8.54034 4.80104 8.87841 4.36963C9.21911 3.93484 9.65484 3.56455 10.0602 3.2711C10.4698 2.97466 10.8748 2.73774 11.175 2.57572C11.326 2.49424 11.4525 2.43056 11.5426 2.38666C11.5877 2.36469 11.6238 2.34761 11.6494 2.33567L11.6799 2.32162L11.6889 2.31754L11.6917 2.31624L11.6935 2.31543L12 2.17822L12.3072 2.31577L12.3083 2.31624L12.3111 2.31754L12.3201 2.32162L12.3506 2.33567C12.3762 2.34761 12.4123 2.36469 12.4574 2.38666C12.5475 2.43056 12.674 2.49424 12.825 2.57572C13.1252 2.73774 13.5302 2.97466 13.9398 3.2711C14.3452 3.56455 14.7809 3.93484 15.1216 4.36963C15.4597 4.80104 15.75 5.35551 15.75 5.99996ZM11.4896 17.25C11.4625 17.3292 11.4346 17.4157 11.4078 17.5068C11.2792 17.9448 11.2175 18.3559 11.2666 18.6045C11.3201 18.8746 11.5662 19.3221 11.881 19.7789L11.9023 19.8097C11.9206 19.7869 11.939 19.7637 11.9575 19.7402C12.3185 19.2821 12.6193 18.8218 12.7039 18.5367C12.7799 18.2806 12.7573 17.8699 12.6733 17.4389C12.6605 17.3731 12.6468 17.3098 12.633 17.25H11.4896ZM15.75 16V12.7932L18.75 16.0432V17.25L15.75 16ZM14.25 5.99996V15.75H9.75V5.99996C9.75 5.81598 9.83466 5.58123 10.0591 5.29482C10.2809 5.01178 10.5952 4.73562 10.9398 4.48618C11.2802 4.23973 11.6252 4.0373 11.8875 3.89571C11.9272 3.87428 11.9648 3.85435 12 3.83598C12.0352 3.85435 12.0728 3.87428 12.1125 3.89571C12.3748 4.0373 12.7198 4.23973 13.0602 4.48618C13.4048 4.73562 13.7191 5.01178 13.9409 5.29482C14.1653 5.58123 14.25 5.81598 14.25 5.99996ZM8.25 12.7932V16L5.25 17.25V16.0432L8.25 12.7932Z" fill="#7ae582"></path> </g></svg>
                    <h4 class="font-bold mt-6">Empiezas de nuevo</h4>
                    <p class="text-gray-500">
                    Con nuestro apoyo, recursos y un plan personalizado para tu RESET.
                    </p>
                </div>

                <!-- CARD 4 -->
                <div class="sticky top-48 bg-white rounded-lg p-8 shadow-lg">
                    <div class="absolute -top-5 left-6 w-10 h-10  text-white flex items-center justify-center rounded-full font-bold  bg-[#8CBEB2] text-white">
                    4
                    </div>

                    <svg fill="#7ae582" width="64px" height="64px" viewBox="-51.2 -51.2 614.40 614.40" enable-background="new 0 0 512 512" id="Trophy" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#7ae582"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-51.2" y="-51.2" width="614.40" height="614.40" rx="141.31199999999998" fill="#004e64" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M355.414,68.2H321.82H190.18h-33.595H72.979l7.227,41.272c7.76,44.321,41.838,78.145,84.524,86.656 c10.603,24.363,30.766,43.605,55.766,52.969c1.067,13.227,10.77,24.009,23.466,26.709v56.714 c-13.134,2.837-23.038,14.331-23.453,28.214h-35.93c-6.431,0-11.645,5.214-11.645,11.645V443.8h166.131v-63.238 c0-10.95-8.877-19.827-19.827-19.827H291.49c-0.414-13.883-10.318-25.377-23.452-28.214v-56.757 c12.575-2.763,22.171-13.463,23.265-26.587c25.094-9.335,45.336-28.618,55.967-53.048c42.687-8.511,76.764-42.334,84.524-86.656 l7.227-41.272H355.414z M293.635,411.873c0,4.023-3.261,7.283-7.283,7.283h-60.704c-4.021,0-7.282-3.26-7.282-7.283v-20.572 c0-4.021,3.261-7.283,7.282-7.283h60.704c4.022,0,7.283,3.262,7.283,7.283V411.873z M97.937,106.368L94.406,86.2h62.179v70.713 c0,6.511,0.637,12.873,1.844,19.03C127.598,166.028,103.785,139.775,97.937,106.368z M298.855,135.397l-15.364,14.977 c-1.297,1.264-1.889,3.085-1.583,4.871l3.627,21.147c0.771,4.495-3.946,7.922-7.983,5.8l-18.991-9.985 c-1.604-0.842-3.519-0.842-5.121,0l-18.992,9.985c-4.036,2.122-8.754-1.306-7.982-5.8l3.627-21.147 c0.306-1.785-0.286-3.606-1.583-4.871l-15.364-14.977c-3.266-3.183-1.464-8.729,3.049-9.385l21.233-3.085 c1.792-0.26,3.342-1.386,4.144-3.01l9.496-19.241c2.018-4.089,7.85-4.089,9.867,0l9.496,19.241c0.802,1.624,2.352,2.75,4.143,3.01 l21.234,3.085C300.319,126.668,302.121,132.214,298.855,135.397z M414.063,106.368c-5.849,33.407-29.661,59.661-60.493,69.576 c1.207-6.158,1.844-12.52,1.844-19.031V86.2h62.18L414.063,106.368z"></path></g></svg>
                    <h4 class="font-bold mt-6">Lo logras</h4>
                    <p class="text-gray-500">
                    Celebramos contigo tu nueva oportunidad hecha realidad.
                    </p>
                </div>

                </div>
            </div>
            </section>

    <!-- Tarjetas donde se explican sobre que pueden escribir los que tienen problemas -->
    <section class=" min-h-150 max-w-full pb-25 text-white">
        <div class="bg-[#004e64] m-6 rounded-[2vw] ">
        <div class=" text-center pt-30 pb-20">
            <p class=" text-[#00a5cf] text-xl sm:text-xl sm:p-2 lg:text-xl"><b>¿Qué ayudamos a reiniciar?</b></p>
            <p class=" text-1xl sm:text-2xl sm:p-3 md:text-3xl  lg:text-4xl"><b>Todos merecemos una <i class="text-[#ff3b30]">segunda oportunidad</i></b></p>
        </div>
        <div class=" shadow-xl max-w-7xl mx-auto pb-15 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center ">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 flex flex-col items-center gap-4 border-white  rounded-lg p-5 hover:shadow-lg hover:-translate-y-1 transition transform duration-300 m-2 ease-[cubic-bezier(0.34,1.56,0.64,1)] hover:-translate-y-4 hover:scale-105 hover:shadow-[0_25px_50px_-12px_rgba(255,59,48,0.4)]">
                <!-- Icono Estudios -->
                <svg height="64px" width="64px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-7.68 -7.68 47.36 47.36" xml:space="preserve" fill="#ff3b30" stroke="#ff3b30"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="47.36" height="47.36" rx="10.8928" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#FFFFFF;} </style> <g> <path d="M31,25H10.5C8,25,6,23,6,20.5S8,16,10.5,16H31c0.6,0,1,0.4,1,1s-0.4,1-1,1H10.5C9.1,18,8,19.1,8,20.5S9.1,23,10.5,23H31 c0.6,0,1,0.4,1,1S31.6,25,31,25z"></path> </g> <g> <path d="M30,25c-0.3,0-0.7-0.2-0.9-0.5c-1.4-2.5-1.4-5.5,0-8c0.3-0.5,0.9-0.6,1.4-0.4c0.5,0.3,0.6,0.9,0.4,1.4 c-1.1,1.9-1.1,4.1,0,6c0.3,0.5,0.1,1.1-0.4,1.4C30.3,25,30.2,25,30,25z"></path> </g> <g> <path d="M25,32H4.5C2,32,0,30,0,27.5S2,23,4.5,23H25c0.6,0,1,0.4,1,1s-0.4,1-1,1H4.5C3.1,25,2,26.1,2,27.5S3.1,30,4.5,30H25 c0.6,0,1,0.4,1,1S25.6,32,25,32z"></path> </g> <g> <path d="M24,32c-0.3,0-0.7-0.2-0.9-0.5c-1.4-2.5-1.4-5.5,0-8c0.3-0.5,0.9-0.6,1.4-0.4c0.5,0.3,0.6,0.9,0.4,1.4 c-1.1,1.9-1.1,4.1,0,6c0.3,0.5,0.1,1.1-0.4,1.4C24.3,32,24.2,32,24,32z"></path> </g> <g> <path d="M16.9,5c-0.6,0-1-0.4-1-1c0-0.7-0.6-1.5-1.5-2l-0.2-0.1c-0.5-0.3-0.7-0.9-0.4-1.3c0.3-0.5,0.9-0.7,1.3-0.4l0.2,0.1 c1.6,0.9,2.6,2.3,2.6,3.8C17.9,4.6,17.5,5,16.9,5z"></path> </g> <path d="M21.5,3.1L21.5,3.1c-1.2-0.2-2.4,0.1-3.4,0.7c-0.3,0.2-0.8,0.2-1.1,0c-0.3-0.2-0.7-0.4-1.1-0.5c0,0.2,0.1,0.5,0.1,0.7 c0,0.6-0.4,1-1,1s-1-0.4-1-1c0-0.3-0.1-0.6-0.3-0.9c0,0-0.1,0-0.1,0c-2.9,0.5-4.9,3.5-4.5,6.7c0.3,2.3,1.9,5.8,3.9,7.3 c0.7,0.5,1.4,0.8,2,0.8c0.1,0,0.3,0,0.4,0c0.5-0.1,0.9-0.3,1.3-0.6c0.4-0.3,1.1-0.3,1.5,0c0.4,0.3,0.9,0.5,1.3,0.6 c0.8,0.1,1.6-0.1,2.5-0.7c2-1.5,3.6-5,3.9-7.3C26.3,6.6,24.3,3.5,21.5,3.1z"></path> </g></svg>
                <h4 ><b>Estudios</b></h4>
                <p class="text-[#999]">Carreras, cursos, certificaciones abandonadas</p>
            </div>
            <div class="p-10 flex flex-col items-center gap-4 border-white bg-white/10 backdrop-blur-md border border-white/20 rounded-lg p-5 hover:shadow-lg hover:-translate-y-1 transition transform duration-300 m-2 ease-[cubic-bezier(0.34,1.56,0.64,1)] hover:-translate-y-4 hover:scale-105 hover:shadow-[0_25px_50px_-12px_rgba(255,59,48,0.4)] ">
                <!-- Icono Proyectos -->
                <svg fill="#ff3b30" width="64px" height="64px" viewBox="-10.04 -10.04 120.43 120.43" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-10.04" y="-10.04" width="120.43" height="120.43" rx="27.698900000000002" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M69.294,11.442c-6.788-5.594-15.724-7.82-24.512-6.109C32.951,7.636,23.449,17.623,21.675,29.62 c-1.447,9.79,2.031,19.567,9.304,26.155c3.277,2.968,5.254,7.243,5.568,12.039c0.006,0.087,0.023,0.171,0.042,0.254v15.039 c0,0.828,0.671,1.5,1.5,1.5h1.495c0.609,4.359,3.813,7.697,7.672,7.697h6.81c3.859,0,7.062-3.338,7.671-7.697h1.495 c0.828,0,1.5-0.672,1.5-1.5V67.828c0-0.003,0.001-0.006,0.001-0.01c0-4.462,2.026-8.771,5.706-12.133 c6.062-5.538,9.538-13.415,9.538-21.61C79.978,25.287,76.084,17.037,69.294,11.442z M45.357,39.91h-2.305 c-1.271,0-2.305-1.034-2.305-2.305s1.034-2.305,2.305-2.305s2.305,1.034,2.305,2.305V39.91z M55.966,37.605 c0-1.271,1.034-2.305,2.306-2.305c1.271,0,2.305,1.034,2.305,2.305s-1.034,2.305-2.305,2.305h-2.303L55.966,37.605z M55.063,69.211 h6.67v12.396H60.36c-0.003,0-0.006-0.001-0.01-0.001s-0.006,0.001-0.01,0.001H40.982c-0.003,0-0.006-0.001-0.01-0.001 s-0.006,0.001-0.01,0.001H39.59V69.211h14.366 M48.357,66.211V42.91h4.617l0.034,23.301H48.357z M54.066,89.304h-6.81 c-2.238,0-4.117-2.004-4.637-4.697h16.083C58.183,87.3,56.304,89.304,54.066,89.304z M68.416,53.471 c-3.872,3.537-6.164,8.013-6.593,12.74h-5.816L55.974,42.91h2.298c2.925,0,5.305-2.38,5.305-5.305c0-2.925-2.38-5.305-5.305-5.305 c-2.926,0-5.306,2.38-5.306,5.307l0.003,2.303h-4.612v-2.305c0-2.925-2.38-5.305-5.305-5.305c-2.925,0-5.305,2.38-5.305,5.305 c0,2.925,2.38,5.305,5.305,5.305h2.305v23.301h-5.972c-0.636-5.005-2.864-9.465-6.393-12.66c-6.528-5.914-9.65-14.696-8.35-23.493 c1.591-10.76,10.108-19.716,20.712-21.781c7.908-1.538,15.938,0.458,22.03,5.48c6.096,5.023,9.592,12.429,9.592,20.319 C76.978,41.43,73.857,48.5,68.416,53.471z"></path></g></svg>
                <h4 ><b>Proyectos</b></h4>
                <p class="text-[#999]">Apps, negocios, ideas que no llegaron a lanzarse</p>
            </div>
            <div class="p-10 flex flex-col items-center gap-4 border-white bg-white/10 backdrop-blur-md border border-white/20 rounded-lg p-5 hover:shadow-lg hover:-translate-y-1 transition transform duration-300 m-2 ease-[cubic-bezier(0.34,1.56,0.64,1)] hover:-translate-y-4 hover:scale-105 hover:shadow-[0_25px_50px_-12px_rgba(255,59,48,0.4)] ">
                <!-- Icono Hábitos -->
                <svg fill="#ff3b30" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-122.88 -122.88 757.76 757.76" xml:space="preserve" stroke="#ff3b30"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-122.88" y="-122.88" width="757.76" height="757.76" rx="174.2848" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M280.068,0C175.516,0,90.293,84.355,88.886,188.58L40.731,327.056h48.138V430.24h93.414v81.759h219.545V338.606 c20.245-16.76,37.064-37.757,48.903-61.125c13.627-26.9,20.538-55.929,20.538-86.28C471.268,85.772,385.496,0,280.068,0z M377.402,319.17l-5.991,4.565v157.847H212.7v-81.759h-93.414V296.638H83.513l35.773-102.87v-2.569 c0-88.655,72.127-160.782,160.782-160.782c88.656,0,160.783,72.127,160.783,160.783 C440.851,241.806,417.726,288.45,377.402,319.17z"></path> </g> </g> <g> <g> <path d="M404.088,206.408v-30.417h-27.182c-2.456-15.697-8.652-30.169-17.643-42.478l19.254-19.255L357.009,92.75l-19.254,19.254 c-12.309-8.991-26.781-15.188-42.479-17.644V67.18h-30.417v27.181c-15.697,2.456-30.169,8.653-42.478,17.644l-19.254-19.254 l-21.508,21.508l19.254,19.254c-8.99,12.309-15.187,26.781-17.643,42.479h-27.182v30.417h27.182 c2.456,15.697,8.653,30.169,17.643,42.479l-19.254,19.254l21.508,21.508l19.254-19.254c12.309,8.991,26.78,15.188,42.478,17.644 v27.182h30.417v-27.182c15.698-2.456,30.17-8.653,42.479-17.644l19.254,19.254l21.508-21.508l-19.254-19.255 c8.99-12.309,15.187-26.78,17.643-42.479H404.088z M280.068,258.802c-37.276,0-67.602-30.327-67.602-67.603 s30.326-67.603,67.602-67.603c37.277,0,67.603,30.327,67.603,67.603S317.345,258.802,280.068,258.802z"></path> </g> </g> <g> <g> <path d="M280.068,143.875c-26.095,0-47.325,21.229-47.325,47.325s21.229,47.325,47.325,47.325 c26.096,0,47.325-21.229,47.325-47.325S306.163,143.875,280.068,143.875z M280.068,208.107c-9.323,0-16.908-7.585-16.908-16.908 c0-9.323,7.584-16.908,16.908-16.908c9.324,0,16.908,7.585,16.908,16.908C296.976,200.522,289.391,208.107,280.068,208.107z"></path> </g> </g> </g></svg>
                <h4 ><b>Hábitos</b></h4>
                <p class="text-[#999]">Rutinas de ejercicio, lectura, alimentación</p>
            </div>
            <div class="p-10 flex flex-col items-center gap-4 border-white bg-white/10 backdrop-blur-md border border-white/20 rounded-lg p-5 hover:shadow-lg hover:-translate-y-1 transition transform duration-300 m-2 ease-[cubic-bezier(0.34,1.56,0.64,1)] hover:-translate-y-4 hover:scale-105 hover:shadow-[0_25px_50px_-12px_rgba(255,59,48,0.4)] ">
                <!-- Icono sueños -->
                <svg class="" width="64px" height="64px" viewBox="-4.8 -4.8 33.60 33.60" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.8" y="-4.8" width="33.60" height="33.60" rx="7.728000000000001" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96173 19.3707C6.01943 16.9714 2 13.0079 2 9.26044C2 3.3495 7.50016 0.662637 12 5.49877C16.4998 0.662637 22 3.34931 22 9.2604C22 13.008 17.9806 16.9714 15.0383 19.3707C13.7063 20.4569 13.0403 21 12 21C10.9597 21 10.2937 20.4569 8.96173 19.3707ZM10.0932 10.7463C10.1827 10.6184 10.2571 10.5122 10.3233 10.4213C10.3793 10.5188 10.4418 10.6324 10.517 10.7692L12.2273 13.8787C12.3933 14.1808 12.5562 14.4771 12.7197 14.6921C12.8947 14.9221 13.2023 15.2374 13.6954 15.2466C14.1884 15.2559 14.5077 14.9524 14.6912 14.7291C14.8627 14.5204 15.0365 14.2305 15.2138 13.9349L15.2692 13.8425C15.49 13.4745 15.629 13.2444 15.752 13.0782C15.8654 12.9251 15.9309 12.8751 15.9798 12.8475C16.0286 12.8198 16.1052 12.7894 16.2948 12.7709C16.5006 12.7509 16.7694 12.7501 17.1986 12.7501H18C18.4142 12.7501 18.75 12.4143 18.75 12.0001C18.75 11.5859 18.4142 11.2501 18 11.2501L17.1662 11.2501C16.7791 11.2501 16.4367 11.2501 16.1497 11.278C15.8385 11.3082 15.5357 11.3751 15.2407 11.5422C14.9457 11.7092 14.7325 11.9344 14.5465 12.1857C14.3749 12.4174 14.1988 12.711 13.9996 13.043L13.9521 13.1222C13.8654 13.2668 13.793 13.3872 13.7284 13.4906C13.6676 13.3849 13.5999 13.2618 13.5186 13.1141L11.8092 10.006C11.6551 9.7256 11.5015 9.44626 11.3458 9.24147C11.1756 9.01775 10.8839 8.72194 10.4164 8.6967C9.94887 8.67146 9.62698 8.93414 9.43373 9.13823C9.25683 9.32506 9.0741 9.58625 8.89069 9.84841L8.58131 10.2904C8.35416 10.6149 8.21175 10.8171 8.08848 10.9629C7.975 11.0971 7.91193 11.1411 7.86538 11.1653C7.81882 11.1896 7.74663 11.216 7.57159 11.232C7.38144 11.2494 7.13413 11.2501 6.73803 11.2501H6C5.58579 11.2501 5.25 11.5859 5.25 12.0001C5.25 12.4143 5.58579 12.7501 6 12.7501L6.76812 12.7501C7.12509 12.7501 7.44153 12.7501 7.70801 12.7258C7.99707 12.6994 8.27904 12.6411 8.55809 12.4958C8.83714 12.3505 9.04661 12.153 9.234 11.9313C9.40676 11.7269 9.58821 11.4677 9.79291 11.1752L10.0932 10.7463Z" fill="#ff3b30"></path> </g></svg>
                <h4 ><b>Sueños</b></h4>
                <p class="text-[#999]">Esas metas personales que dejaste de lado</p>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-linear-to-r from-red-500 to-red-100 min-h-100  py-15 py-24">
        <div>
            <div class="max-w-xl mx-auto text-center my-8 top-0">
                <p class="pl-3 pr-3 mb-5  text-gray-900  sm:text-sm sm:p-2 lg:text-lg">Volvemos a dar vida a proyectos, hábitos, ideas, estudios y pequeños sueños que quedaron en pausa</p>
                <div class=" flex justify-center text-center items-center  gap-3 p-2">
                    <a class="block w-47 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md  hover:shadow-lg hover:-translate-y-1 transition transform duration-300 " href="../public/RequestReset.php">Solicitar RESET</a>
                    <a class="block w-47 px-4 py-2 bg-white border border-red-500 text-red-500  hover:bg-red-500 hover:text-white rounded-lg shadow-md  hover:shadow-lg hover:-translate-y-1 transition transform duration-300 " href="../public/Volunteers.php">Quiero ser voluntario</a>
                </div>
            </div>
        </div>

    </section>

    

    <?php
    require_once "../src/Footer.php";
    ?>

</body>
</html>