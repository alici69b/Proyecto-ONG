<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESET-ong</title>

    <!-- Link al css -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Link de las fuentes de la pagina cargadas en el css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-100 font-poppins m-auto">

    <footer class="bg-gray-900 text-white py-12 mt-12 ">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-around md:justify-around-12 gap-8">
                
                <!-- Logo y descripción -->
                <div class="md:col-span-4">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="text-red-500 text-2xl">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>
                        <span class="font-bold text-xl">RESET</span>
                    </div>
                    <p class="text-gray-400">
                        Damos segundas oportunidades a proyectos, estudios, hábitos e ideas que fueron abandonados. 
                        Porque nunca es tarde para empezar de nuevo.
                    </p>
                </div>

                <!-- Enlaces rápidos -->
                <div class="md:col-span-2">
                    <h6 class="uppercase mb-3 font-semibold">Navegación</h6>
                    <ul class="space-y-2">
                        <li><a href="../public/Inicio.php" class="text-gray-400 hover:text-[#ff3b30] transition">Inicio</a></li>
                        <li><a href="../public/RequestReset.php" class="text-gray-400 hover:text-[#ff3b30] transition">Solicitar RESET</a></li>
                        <li><a href="../public/Historys.php" class="text-gray-400 hover:text-[#ff3b30] transition">Historias</a></li>
                        <li><a href="../public/Inicio.phpVolunteers.php" class="text-gray-400 hover:text-[#ff3b30] transition">Voluntarios</a></li>
                    </ul>
                </div>

                <!-- Contacto -->
                <div class="md:col-span-4">
                    <h6 class="uppercase mb-3 font-semibold">Contacto</h6>
                    <ul class="text-gray-400 space-y-2">
                        <li class="flex items-center gap-2">
                            <i class="bi bi-envelope"></i> aliciaalonso_antoniojesuscarrasco@resetong.org
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="bi bi-telephone"></i> +34 625 51 59 33
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="bi bi-geo-alt"></i> Lepe, España
                        </li>
                    </ul>
    
                </div>

            </div>

            <hr class="my-6 border-gray-700">

            <div class="flex flex-col md:flex-row justify-between text-gray-400 text-sm">
                <p class="text-center md:text-left mb-2 md:mb-0">
                    ©RESET ONG. Mini-proyecto 1º DAW.
                </p>
                <div class="flex gap-4">
                <p class=" text-center md:text-right">
                    Politica y privacidad 
                </p>
                <p class="text-center md:text-right"> 
                    Aviso legal
                </p>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>