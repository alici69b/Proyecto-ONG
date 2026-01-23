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

    <!-- Link de las fuentes de la pagina cargadas en el css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<!--color: coral principal #ff3b30
    color: beige #f6f6f2
    color footer gray-900 -->

</head>
<body>
    <?php
    require_once "../src/Header.php";
    ?>

    <main class=" bg-linear-to-r from-red-100 to-red-500 min-h-130 py-15">
        <div class="px-4 py-6 sm:px-10 md:px-20 flex justify-center ">
            <div class="flex bg-[#f6f6f2] items-center justify-center rounded-full px-4 py-2 sm:px-3 sm:py-2 gap-3 border border-gray-100">
            <svg class="w-6 h-6 sm:w-8 sm:h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5766 8.70419C11.2099 7.56806 11.5266 7 12 7C12.4734 7 12.7901 7.56806 13.4234 8.70419L13.5873 8.99812C13.7672 9.32097 13.8572 9.48239 13.9975 9.5889C14.1378 9.69541 14.3126 9.73495 14.6621 9.81402L14.9802 9.88601C16.2101 10.1643 16.825 10.3034 16.9713 10.7739C17.1176 11.2443 16.6984 11.7345 15.86 12.715L15.643 12.9686C15.4048 13.2472 15.2857 13.3865 15.2321 13.5589C15.1785 13.7312 15.1965 13.9171 15.2325 14.2888L15.2653 14.6272C15.3921 15.9353 15.4554 16.5894 15.0724 16.8801C14.6894 17.1709 14.1137 16.9058 12.9622 16.3756L12.6643 16.2384C12.337 16.0878 12.1734 16.0124 12 16.0124C11.8266 16.0124 11.663 16.0878 11.3357 16.2384L11.0378 16.3756C9.88634 16.9058 9.31059 17.1709 8.92757 16.8801C8.54456 16.5894 8.60794 15.9353 8.7347 14.6272L8.76749 14.2888C8.80351 13.9171 8.82152 13.7312 8.76793 13.5589C8.71434 13.3865 8.59521 13.2472 8.35696 12.9686L8.14005 12.715C7.30162 11.7345 6.88241 11.2443 7.02871 10.7739C7.17501 10.3034 7.78993 10.1643 9.01977 9.88601L9.33794 9.81402C9.68743 9.73495 9.86217 9.69541 10.0025 9.5889C10.1428 9.48239 10.2328 9.32097 10.4127 8.99812L10.5766 8.70419Z" stroke="#ead757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /> </svg>
            <p class="text-gray-900 font-base text-sm sm:text-base md:text-lg whitespace-nowrap">
                ONG de Segundas Oportunidades
            </p>
            </div>
        </div>


        <div class="flex justify-center mx-auto text-center my-10 p-2">
            <h1 class="max-w-3xl text-gray-900 font-bold text-4xl sm:text-5xl sm:p-3 lg:text-6xl">
                Nada está <i class="text-white">perdido</i> hasta que decides <i class="text-white">reiniciarlo</i>
            </h1>
            
        </div>

        <div class="max-w-xl mx-auto text-center my-8 top-0">
            <p class="mb-8">Volvemos a dar vida a proyectos, hábitos, ideas, estudios y pequeños sueños que quedaron en pausa</p>
            <div class="flex justify-center text-center items-center  gap-3 p-2">
                <a class="block w-47 px-4 py-2 bg-red-500 text-white rounded-lg shadow-md  hover:shadow-lg hover:-translate-y-1 transition transform duration-300 " href="../public/RequestReset.php">Solicitar RESET</a>
                <a class="block w-47 px-4 py-2 bg-white border border-red-500 text-red-500  hover:bg-red-500 hover:text-white rounded-lg shadow-md  hover:shadow-lg hover:-translate-y-1 transition transform duration-300 " href="../public/Volunteers.php">Quiero ser voluntario</a>
            </div>
        </div>


            
    </main>

    <?php
    require_once "../src/Footer.php";
    ?>

</body>
</html>