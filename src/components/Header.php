<?php
// 1. Calculamos la raíz del proyecto de forma dinámica
// Esto evita problemas con los puntos ../../../
$base = "/RESET-ONG/"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>


    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head> 
<body class="font-sans flex items-center justify-center ">
    <nav class="max-w-10xl mx-auto bg-white/60  absolute left-1/2 -translate-x-1/2 rounded-full top-6  backdrop-blur-md z-50  px-10 py-4 flex  justify-between gap-10">
<!-- Logo svg para que ocupe menos y no pese tanto la pagina  -->


        <div class="flex items-center gap-2">
            <svg fill="#ff3b30" height="40px" width="40px" viewBox="0 0 612.00 612.00">
                <path d="M44.563,250.179l237.89,41.871c0.485,0.085,0.964,0.118,1.451,0.118c4.33-0.027,7.831-3.545,7.831-7.88 c0-1.831-0.624-3.516-1.672-4.853l-39.919-61.25c24.027-10.024,64.762-23.283,112.095-23.283c24.594,0,48.118,3.69,69.918,10.972 c19.861,6.631,47.495,24.447,70.4,45.389c16.415,15.01,31.403,32.073,45.896,48.573c3.34,3.802,6.682,7.607,10.048,11.396 c1.521,1.713,3.677,2.648,5.894,2.648c0.788,0,1.581-0.116,2.357-0.361c2.961-0.928,5.101-3.508,5.468-6.588l0.116-0.991 c6.506-56.017-7.174-114.855-37.531-161.427c-32.502-49.852-84.035-85.972-145.111-101.71 c-24.353-6.275-49.973-9.456-76.149-9.456c-34.717,0-69.827,5.501-104.373,16.35c-18.876,5.971-37.136,13.429-54.376,22.198 L110.264,3.574c-1.714-2.631-4.832-3.978-7.921-3.467c-3.096,0.526-5.584,2.838-6.333,5.887L38.278,240.535 c-0.521,2.118-0.142,4.359,1.05,6.186C40.519,248.549,42.415,249.802,44.563,250.179z"></path>
                <path d="M572.67,365.274c-1.191-1.827-3.087-3.08-5.236-3.458l-237.888-41.872c-3.094-0.54-6.212,0.8-7.942,3.419 c-1.73,2.619-1.74,6.017-0.027,8.648l40.278,61.802c-24.027,10.024-64.762,23.283-112.093,23.283 c-24.594,0-48.118-3.692-69.92-10.974c-19.864-6.632-47.498-24.449-70.4-45.389c-16.415-15.01-31.403-32.071-45.896-48.568 c-3.34-3.803-6.684-7.608-10.049-11.398c-2.065-2.323-5.301-3.219-8.265-2.282c-2.964,0.935-5.101,3.526-5.456,6.612l-0.111,0.962 c-6.508,56.021,7.172,114.855,37.532,161.42c32.5,49.855,84.034,85.977,145.109,101.712c24.358,6.275,49.982,9.456,76.16,9.456 c0.003,0,0.002,0,0.007,0c34.71,0,69.819-5.499,104.355-16.35c18.876-5.971,37.136-13.427,54.375-22.196l44.53,68.321 c1.47,2.255,3.967,3.578,6.6,3.578c0.438,0,0.88-0.036,1.321-0.109c3.096-0.526,5.583-2.838,6.335-5.887l57.734-234.541 C574.242,369.342,573.863,367.103,572.67,365.274z"></path>
            </svg>
            <h3 class="font-bold text-xl">RESET</h3>
        </div>
        <!-- Contenedor para checkbox y menú -->
        <div class="md:hidden relative flex justify-around">
          
        <!-- Botón hamburguesa -->
 
            <input type="checkbox" id="menu-toggle" class="peer hidden" />
            <label for="menu-toggle" class="cursor-pointer z-20 block">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0,0,256,256">
                <g fill="#004e64" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M2,5v2h20v-2zM2,11v2h20v-2zM2,17v2h20v-2z"></path></g></g>
                </svg>
             </label>

    <!-- Menú móvil -->
            <div class="absolute mt-13 w-screen left-1/2 -translate-x-1/2 bg-gray-100 shadow-md flex-col hidden peer-checked:flex z-10">
                <a class="block px-4 py-2 hover:text-[#25a18e] transition" href="<?php echo $base; ?>index.php">Inicio</a>
                <a class="block px-4 py-2 hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Historys.php">Historias</a>
                <a class="block px-4 py-2 hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Impact.php">Impacto</a>
                <a class="block px-4 py-2 hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Volunteers.php">Voluntarios</a>
                <a class="block px-4 py-2 hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Contact.php">Contacto</a>
                <a class="block px-4 py-2 text-[#ff3b30] hover:bg-[#1a7a6b] hover:text-white" href="<?php echo $base; ?>app/vista/Login.php">Iniciar Sesión</a>
                <a class="block px-4 py-2 text-[#ff3b30] hover:bg-[#1a7a6b] hover:text-white" href="<?php echo $base; ?>app/vista/Register.php">Registro</a>
            </div>
        </div>

    <!-- Menú desktop -->
        <div class="hidden md:flex gap-6 items-center">
            <a class="hover:text-[#25a18e] transition" href="<?php echo $base; ?>index.php">Inicio</a>
            <a class="hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Historys.php">Historias</a>
            <a class="hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Impact.php">Impacto</a>
            <a class="hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Volunteers.php">Voluntarios</a>
            <a class="hover:text-[#25a18e] transition" href="<?php echo $base; ?>pages/Contact.php">Contacto</a>
            <a class="block text-center w-40 px-4 py-2 bg-white border border-[#25a18e] text-[#25a18e] hover:bg-[#25a18e] hover:text-white rounded-lg shadow-md hover:shadow-lg hover:-translate-y-1 transition transform duration-300" href="<?php echo $base; ?>app/vista/Login.php">Iniciar Sesión</a>
            <a class="px-4 text-center w-40 py-2 bg-[#25a18e] text-white hover:bg-[#1a7a6b] rounded-lg shadow-md hover:shadow-lg hover:-translate-y-1 transition transform duration-300" href="<?php echo $base; ?>app/vista/Register.php">Registro</a>
        </div>
    </nav>