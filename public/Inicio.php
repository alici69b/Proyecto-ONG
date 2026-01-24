<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>
    
    <!-- Link al css -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

   
<!--color: coral principal #ff3b30
    color: beige #f6f6f2
    color footer gray-900 
    color fondo-ayudar-reiniciar #ffe7e5-->

</head>
<body class="font-sans">
    <!-- importamos el Header, para tenelo en esta pagina -->
    <?php
    require_once "../src/Header.php";
    ?>
    <!-- Aqui podremos encontrar 
            - Que es esta ong
            - Mensaje positivo
            - Los botones principales 
                - Reset
                -Voluntarios -->
    <main class=" bg-linear-to-r from-red-100 to-red-500 min-h-130  py-15">
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
            <div class="flex justify-center mx-auto text-center my-10 p-2">
                <h1 class="max-w-3xl text-gray-900 font-bold text-4xl sm:text-5xl sm:p-3 lg:text-6xl">
                    Nada está <i class="text-white">perdido</i> hasta que decides <i class="text-white">reiniciarlo</i>
                </h1>
            </div>
            <div class="max-w-xl mx-auto text-center my-8 top-0">
                <p class="p-0 mb-5 font-sans text-gray-900  sm:text-sm  lg:text-lg">Volvemos a dar vida a proyectos, hábitos, ideas, estudios y pequeños sueños que quedaron en pausa</p>
                <div class=" flex justify-center text-center items-center  gap-3 p-2">
                    <a class="block w-47 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md  hover:shadow-lg hover:-translate-y-1 transition transform duration-300 " href="../public/RequestReset.php">Solicitar RESET</a>
                    <a class="block w-47 px-4 py-2 bg-white border border-red-500 text-red-500  hover:bg-red-500 hover:text-white rounded-lg shadow-md  hover:shadow-lg hover:-translate-y-1 transition transform duration-300 " href="../public/Volunteers.php">Quiero ser voluntario</a>
                </div>
            </div>
        </div>      
    </main>

    <section class="bg-[#f2f2f2] min-h-130 max-w-full ">

        <div class="text-center pt-20">
            <p class="font-sans text-[#ff3b30] sm:text-sm  lg:text-lg"><b>¿Qué ayudamos a reiniciar?</b></p>
            <p class="font-sans sm:text-sm  lg:text-4xl"><b>Todos merecemos una <i class="text-[#ff3b30]">segunda oportunidad</i></b></p>
        </div>
        <div class="max-w-7xl mx-auto px-4 py-7 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center mt-15">
            <div class="flex flex-col items-center gap-4 border-white bg-white rounded-lg p-5">
                <!-- Icono Estudios -->
                <svg height="64px" width="64px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-7.68 -7.68 47.36 47.36" xml:space="preserve" fill="#ff3b30" stroke="#ff3b30"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-7.68" y="-7.68" width="47.36" height="47.36" rx="10.8928" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#FFFFFF;} </style> <g> <path d="M31,25H10.5C8,25,6,23,6,20.5S8,16,10.5,16H31c0.6,0,1,0.4,1,1s-0.4,1-1,1H10.5C9.1,18,8,19.1,8,20.5S9.1,23,10.5,23H31 c0.6,0,1,0.4,1,1S31.6,25,31,25z"></path> </g> <g> <path d="M30,25c-0.3,0-0.7-0.2-0.9-0.5c-1.4-2.5-1.4-5.5,0-8c0.3-0.5,0.9-0.6,1.4-0.4c0.5,0.3,0.6,0.9,0.4,1.4 c-1.1,1.9-1.1,4.1,0,6c0.3,0.5,0.1,1.1-0.4,1.4C30.3,25,30.2,25,30,25z"></path> </g> <g> <path d="M25,32H4.5C2,32,0,30,0,27.5S2,23,4.5,23H25c0.6,0,1,0.4,1,1s-0.4,1-1,1H4.5C3.1,25,2,26.1,2,27.5S3.1,30,4.5,30H25 c0.6,0,1,0.4,1,1S25.6,32,25,32z"></path> </g> <g> <path d="M24,32c-0.3,0-0.7-0.2-0.9-0.5c-1.4-2.5-1.4-5.5,0-8c0.3-0.5,0.9-0.6,1.4-0.4c0.5,0.3,0.6,0.9,0.4,1.4 c-1.1,1.9-1.1,4.1,0,6c0.3,0.5,0.1,1.1-0.4,1.4C24.3,32,24.2,32,24,32z"></path> </g> <g> <path d="M16.9,5c-0.6,0-1-0.4-1-1c0-0.7-0.6-1.5-1.5-2l-0.2-0.1c-0.5-0.3-0.7-0.9-0.4-1.3c0.3-0.5,0.9-0.7,1.3-0.4l0.2,0.1 c1.6,0.9,2.6,2.3,2.6,3.8C17.9,4.6,17.5,5,16.9,5z"></path> </g> <path d="M21.5,3.1L21.5,3.1c-1.2-0.2-2.4,0.1-3.4,0.7c-0.3,0.2-0.8,0.2-1.1,0c-0.3-0.2-0.7-0.4-1.1-0.5c0,0.2,0.1,0.5,0.1,0.7 c0,0.6-0.4,1-1,1s-1-0.4-1-1c0-0.3-0.1-0.6-0.3-0.9c0,0-0.1,0-0.1,0c-2.9,0.5-4.9,3.5-4.5,6.7c0.3,2.3,1.9,5.8,3.9,7.3 c0.7,0.5,1.4,0.8,2,0.8c0.1,0,0.3,0,0.4,0c0.5-0.1,0.9-0.3,1.3-0.6c0.4-0.3,1.1-0.3,1.5,0c0.4,0.3,0.9,0.5,1.3,0.6 c0.8,0.1,1.6-0.1,2.5-0.7c2-1.5,3.6-5,3.9-7.3C26.3,6.6,24.3,3.5,21.5,3.1z"></path> </g></svg>
                <h4>Estudios</h4>
                <p>Carreras, cursos, certificaciones abandonadas</p>
            </div>
            <div class="flex flex-col items-center gap-4 border-white bg-white rounded-lg p-5">
                <!-- Icono Proyectos -->
                <svg fill="#ff3b30" width="64px" height="64px" viewBox="-10.04 -10.04 120.43 120.43" id="Layer_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)"><rect x="-10.04" y="-10.04" width="120.43" height="120.43" rx="27.698900000000002" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M69.294,11.442c-6.788-5.594-15.724-7.82-24.512-6.109C32.951,7.636,23.449,17.623,21.675,29.62 c-1.447,9.79,2.031,19.567,9.304,26.155c3.277,2.968,5.254,7.243,5.568,12.039c0.006,0.087,0.023,0.171,0.042,0.254v15.039 c0,0.828,0.671,1.5,1.5,1.5h1.495c0.609,4.359,3.813,7.697,7.672,7.697h6.81c3.859,0,7.062-3.338,7.671-7.697h1.495 c0.828,0,1.5-0.672,1.5-1.5V67.828c0-0.003,0.001-0.006,0.001-0.01c0-4.462,2.026-8.771,5.706-12.133 c6.062-5.538,9.538-13.415,9.538-21.61C79.978,25.287,76.084,17.037,69.294,11.442z M45.357,39.91h-2.305 c-1.271,0-2.305-1.034-2.305-2.305s1.034-2.305,2.305-2.305s2.305,1.034,2.305,2.305V39.91z M55.966,37.605 c0-1.271,1.034-2.305,2.306-2.305c1.271,0,2.305,1.034,2.305,2.305s-1.034,2.305-2.305,2.305h-2.303L55.966,37.605z M55.063,69.211 h6.67v12.396H60.36c-0.003,0-0.006-0.001-0.01-0.001s-0.006,0.001-0.01,0.001H40.982c-0.003,0-0.006-0.001-0.01-0.001 s-0.006,0.001-0.01,0.001H39.59V69.211h14.366 M48.357,66.211V42.91h4.617l0.034,23.301H48.357z M54.066,89.304h-6.81 c-2.238,0-4.117-2.004-4.637-4.697h16.083C58.183,87.3,56.304,89.304,54.066,89.304z M68.416,53.471 c-3.872,3.537-6.164,8.013-6.593,12.74h-5.816L55.974,42.91h2.298c2.925,0,5.305-2.38,5.305-5.305c0-2.925-2.38-5.305-5.305-5.305 c-2.926,0-5.306,2.38-5.306,5.307l0.003,2.303h-4.612v-2.305c0-2.925-2.38-5.305-5.305-5.305c-2.925,0-5.305,2.38-5.305,5.305 c0,2.925,2.38,5.305,5.305,5.305h2.305v23.301h-5.972c-0.636-5.005-2.864-9.465-6.393-12.66c-6.528-5.914-9.65-14.696-8.35-23.493 c1.591-10.76,10.108-19.716,20.712-21.781c7.908-1.538,15.938,0.458,22.03,5.48c6.096,5.023,9.592,12.429,9.592,20.319 C76.978,41.43,73.857,48.5,68.416,53.471z"></path></g></svg>
                <h4>Proyectos</h4>
                <p>Apps, negocios, ideas que no llegaron a lanzarse</p>
            </div>
            <div class="flex flex-col items-center gap-4 border-white bg-white rounded-lg p-5">
                <!-- Icono Hábitos -->
                <svg fill="#ff3b30" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-122.88 -122.88 757.76 757.76" xml:space="preserve" stroke="#ff3b30"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-122.88" y="-122.88" width="757.76" height="757.76" rx="174.2848" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M280.068,0C175.516,0,90.293,84.355,88.886,188.58L40.731,327.056h48.138V430.24h93.414v81.759h219.545V338.606 c20.245-16.76,37.064-37.757,48.903-61.125c13.627-26.9,20.538-55.929,20.538-86.28C471.268,85.772,385.496,0,280.068,0z M377.402,319.17l-5.991,4.565v157.847H212.7v-81.759h-93.414V296.638H83.513l35.773-102.87v-2.569 c0-88.655,72.127-160.782,160.782-160.782c88.656,0,160.783,72.127,160.783,160.783 C440.851,241.806,417.726,288.45,377.402,319.17z"></path> </g> </g> <g> <g> <path d="M404.088,206.408v-30.417h-27.182c-2.456-15.697-8.652-30.169-17.643-42.478l19.254-19.255L357.009,92.75l-19.254,19.254 c-12.309-8.991-26.781-15.188-42.479-17.644V67.18h-30.417v27.181c-15.697,2.456-30.169,8.653-42.478,17.644l-19.254-19.254 l-21.508,21.508l19.254,19.254c-8.99,12.309-15.187,26.781-17.643,42.479h-27.182v30.417h27.182 c2.456,15.697,8.653,30.169,17.643,42.479l-19.254,19.254l21.508,21.508l19.254-19.254c12.309,8.991,26.78,15.188,42.478,17.644 v27.182h30.417v-27.182c15.698-2.456,30.17-8.653,42.479-17.644l19.254,19.254l21.508-21.508l-19.254-19.255 c8.99-12.309,15.187-26.78,17.643-42.479H404.088z M280.068,258.802c-37.276,0-67.602-30.327-67.602-67.603 s30.326-67.603,67.602-67.603c37.277,0,67.603,30.327,67.603,67.603S317.345,258.802,280.068,258.802z"></path> </g> </g> <g> <g> <path d="M280.068,143.875c-26.095,0-47.325,21.229-47.325,47.325s21.229,47.325,47.325,47.325 c26.096,0,47.325-21.229,47.325-47.325S306.163,143.875,280.068,143.875z M280.068,208.107c-9.323,0-16.908-7.585-16.908-16.908 c0-9.323,7.584-16.908,16.908-16.908c9.324,0,16.908,7.585,16.908,16.908C296.976,200.522,289.391,208.107,280.068,208.107z"></path> </g> </g> </g></svg>
                <h4>Hábitos</h4>
                <p>Rutinas de ejercicio, lectura, alimentación</p>
            </div>
            <div class="flex flex-col items-center gap-4 border-white bg-white rounded-lg p-5">
                <!-- Icono  -->
                <svg width="64px" height="64px" viewBox="-4.8 -4.8 33.60 33.60" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"><rect x="-4.8" y="-4.8" width="33.60" height="33.60" rx="7.728000000000001" fill="#ffe7e5" strokewidth="0"></rect></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96173 19.3707C6.01943 16.9714 2 13.0079 2 9.26044C2 3.3495 7.50016 0.662637 12 5.49877C16.4998 0.662637 22 3.34931 22 9.2604C22 13.008 17.9806 16.9714 15.0383 19.3707C13.7063 20.4569 13.0403 21 12 21C10.9597 21 10.2937 20.4569 8.96173 19.3707ZM10.0932 10.7463C10.1827 10.6184 10.2571 10.5122 10.3233 10.4213C10.3793 10.5188 10.4418 10.6324 10.517 10.7692L12.2273 13.8787C12.3933 14.1808 12.5562 14.4771 12.7197 14.6921C12.8947 14.9221 13.2023 15.2374 13.6954 15.2466C14.1884 15.2559 14.5077 14.9524 14.6912 14.7291C14.8627 14.5204 15.0365 14.2305 15.2138 13.9349L15.2692 13.8425C15.49 13.4745 15.629 13.2444 15.752 13.0782C15.8654 12.9251 15.9309 12.8751 15.9798 12.8475C16.0286 12.8198 16.1052 12.7894 16.2948 12.7709C16.5006 12.7509 16.7694 12.7501 17.1986 12.7501H18C18.4142 12.7501 18.75 12.4143 18.75 12.0001C18.75 11.5859 18.4142 11.2501 18 11.2501L17.1662 11.2501C16.7791 11.2501 16.4367 11.2501 16.1497 11.278C15.8385 11.3082 15.5357 11.3751 15.2407 11.5422C14.9457 11.7092 14.7325 11.9344 14.5465 12.1857C14.3749 12.4174 14.1988 12.711 13.9996 13.043L13.9521 13.1222C13.8654 13.2668 13.793 13.3872 13.7284 13.4906C13.6676 13.3849 13.5999 13.2618 13.5186 13.1141L11.8092 10.006C11.6551 9.7256 11.5015 9.44626 11.3458 9.24147C11.1756 9.01775 10.8839 8.72194 10.4164 8.6967C9.94887 8.67146 9.62698 8.93414 9.43373 9.13823C9.25683 9.32506 9.0741 9.58625 8.89069 9.84841L8.58131 10.2904C8.35416 10.6149 8.21175 10.8171 8.08848 10.9629C7.975 11.0971 7.91193 11.1411 7.86538 11.1653C7.81882 11.1896 7.74663 11.216 7.57159 11.232C7.38144 11.2494 7.13413 11.2501 6.73803 11.2501H6C5.58579 11.2501 5.25 11.5859 5.25 12.0001C5.25 12.4143 5.58579 12.7501 6 12.7501L6.76812 12.7501C7.12509 12.7501 7.44153 12.7501 7.70801 12.7258C7.99707 12.6994 8.27904 12.6411 8.55809 12.4958C8.83714 12.3505 9.04661 12.153 9.234 11.9313C9.40676 11.7269 9.58821 11.4677 9.79291 11.1752L10.0932 10.7463Z" fill="#ff3b30"></path> </g></svg>
                <h4>Sueños</h4>
                <p>Esas metas personales que dejaste de lado</p>
            </div>
        </div>

        



    </section>

    <?php
    require_once "../src/Footer.php";
    ?>

</body>
</html>