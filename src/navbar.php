<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>
    <link rel="stylesheet" href="../public/css/style.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coral: '#ff3b30',
                        beige: '#f5f1e6',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* Aplicamos la fuente globalmente */
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-white">

    <nav class="flex flex-wrap justify-around items-center py-3 border-b bg-gray-50 px-4">
        
        <div class="flex items-center gap-2 group cursor-pointer">
            <div class="transition-transform duration-300 group-hover:scale-110">
                <svg
                    class="rounded-full bg-beige"
                    height="45px" width="45px" viewBox="0 0 473.68 473.68" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <path style="fill:#ff3b30;" d="M0,236.844C0,106.025,106.036,0,236.836,0C367.644,0,473.68,106.025,473.68,236.844 c0,130.793-106.036,236.836-236.844,236.836C106.04,473.68,0,367.636,0,236.844z"></path>
                    <g>
                        <path style="fill:#FFFFFF;" d="M292.77,322.372c-18.04,29.52-50.062,48.192-80.282,23.264 c-18.376-15.164-28.514-38.013-33.574-61.707c12.644-0.034,25.287-0.064,37.931-0.09c2.558-0.004,4.372-1.144,5.497-2.752 c1.825-1.963,2.52-4.835,0.602-7.808c-17.374-26.97-34.756-53.94-52.134-80.906c-2.917-4.532-9.226-4.495-12.12,0.045 c-17.243,27.049-34.494,54.105-51.741,81.153c-2.853,4.476,0.905,10.531,6.021,10.52c12.543-0.03,25.078-0.06,37.62-0.09 c6.701,34.752,22.449,67.425,51.745,88.995c42.258,31.121,91.067,2.12,114.731-36.592 C326.512,320.936,302.197,306.95,292.77,322.372z"></path>
                        <path style="fill:#FFFFFF;" d="M361.141,188.106c-12.543,0.03-25.082,0.064-37.624,0.09c-6.705-34.748-22.453-67.421-51.749-88.991 c-42.261-31.117-91.063-2.117-114.723,36.596c-9.446,15.46,14.869,29.446,24.292,14.023c18.044-29.517,50.058-48.192,80.278-23.26 c18.376,15.16,28.518,38.009,33.578,61.703c-12.644,0.034-25.291,0.064-37.935,0.093c-2.55,0.007-4.364,1.141-5.486,2.741 c-1.836,1.963-2.535,4.843-0.613,7.82c17.378,26.97,34.76,53.94,52.141,80.906c2.921,4.532,9.226,4.495,12.12-0.045 c17.243-27.052,34.494-54.108,51.741-81.161C370.015,194.145,366.257,188.091,361.141,188.106z"></path>
                    </g>
                </svg>
            </div>
            <h3 class="text-xl font-bold tracking-tight">RESET</h3>
        </div>

        <div class="flex gap-6 items-center">
             <a class="text-coral font-semibold transition-colors duration-200" href="../public/Inicio.php">Inicio</a>
             <a class="text-gray-500 hover:text-coral transition-colors duration-200" href="../public/Historys.php">Historias</a>
             <a class="text-gray-500 hover:text-coral transition-colors duration-200" href="../public/Impact.php">Impacto</a>
             <a class="text-gray-500 hover:text-coral transition-colors duration-200" href="../public/Volunteers.php">Voluntarios</a>
             <a class="text-gray-500 hover:text-coral transition-colors duration-200" href="../public/Contact.php">Contacto</a>
        </div>

        <div class="hidden lg:block transition-all duration-300 hover:scale-105 active:translate-y-0.5">
            <a href="../public/RequestReset.php" 
               class="bg-coral text-white px-6 py-2 rounded-full font-medium hover:bg-red-600 transition-colors shadow-sm">
                Solicitar RESET
            </a>
        </div>

    </nav>
</body>
</html>