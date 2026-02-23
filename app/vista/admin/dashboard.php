<?php

include_once "../../controlador/AdminController.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - RESET</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Bricolage Grotesque', sans-serif; 
            background-color: #f4f9fa;

        }
    </style>
</head>

<body class="text-[#004e64] min-h-screen flex flex-col">
<!-- Panel Admin --> 
    <div class="flex flex-1 ">

<!-- Menú de la izquierda, que va cambiando con forme vamos cambiando de pagina -->
        <aside class="w-64 h-screen bg-[#004e64] text-blue-100 flex flex-col p-6 gap-8 ">

            <div class="flex items-center gap-3 mt-20 px-2">

            <!-- nombre de usuario -->
                <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center border border-white/10">
                    <span class="text-xl">🛡️</span>
                </div>
                <div>
                    <p class="font-bold text-white text-sm">Panel Admin</p>
                    <p class="text-[10px] text-[#9fffcb] uppercase tracking-widest font-bold">RESET ONG</p>
                </div>
            </div>
            <nav class="flex flex-col gap-2">
                <a href="dashboard.php" class="bg-linear-to-r from-[#00a5cf] to-[#9fffcb] text-[#004e64] flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg shadow-black/20 text-sm font-extrabold">
                    <span class="opacity-70 group-hover:opacity-100"><svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 36.00 36.00" version="1.1" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>analytics-line</title> <path class="clr-i-outline clr-i-outline-path-1" d="M 32 5 L 4 5 C 2.895 5 2 5.895 2 7 L 2 29 C 2 30.105 2.895 31 4 31 L 32 31 C 33.105 31 34 30.105 34 29 L 34 7 C 34 5.895 33.105 5 32 5 Z M 4 29 L 4 7 L 32 7 L 32 29 Z"></path><polygon points="15.62 15.222 9.602 23.968 5.55 20.384 6.61 19.186 9.308 21.572 15.634 12.38 22.384 22.395 29.138 13.47 30.414 14.436 22.308 25.145" class="clr-i-outline clr-i-outline-path-2"></polygon> <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect> </g></svg></span> Vista general
                </a>
                <a href="gestionarreset.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70 group-hover:opacity-100"><svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M276.941 440.584v565.722c0 422.4 374.174 625.468 674.71 788.668l8.02 4.292 8.131-4.292c300.537-163.2 674.71-366.268 674.71-788.668V440.584l-682.84-321.657L276.94 440.584Zm682.73 1479.529c-9.262 0-18.523-2.372-26.993-6.89l-34.9-18.974C588.095 1726.08 164 1495.906 164 1006.306V404.78c0-21.91 12.65-41.788 32.414-51.162L935.727 5.42c15.134-7.228 32.866-7.228 48 0l739.313 348.2c19.765 9.374 32.414 29.252 32.414 51.162v601.525c0 489.6-424.207 719.774-733.779 887.943l-34.899 18.975c-8.47 4.517-17.731 6.889-27.105 6.889Zm467.158-547.652h-313.412l-91.595-91.482v-83.803H905.041v-116.78h-83.69l-58.503-58.504c-1.92.113-3.84.113-5.76.113-176.075 0-319.285-143.21-319.285-319.285 0-176.075 143.21-319.398 319.285-319.398 176.075 0 319.285 143.323 319.285 319.398 0 1.92 0 3.84-.113 5.647l350.57 350.682v313.412Zm-266.654-112.941h153.713v-153.713L958.462 750.155l3.953-37.27c1.017-123.897-91.595-216.621-205.327-216.621S550.744 588.988 550.744 702.72c0 113.845 92.612 206.344 206.344 206.344l47.21-5.309 63.811 63.7h149.873v116.78h116.781v149.986l25.412 25.299Zm-313.4-553.57c0 46.758-37.949 84.706-84.706 84.706-46.758 0-84.706-37.948-84.706-84.706s37.948-84.706 84.706-84.706c46.757 0 84.706 37.948 84.706 84.706" fill-rule="evenodd"></path> </g></svg></span> Gestionar Resets
                </a>
                <a href="gestionusuarios.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70 group-hover:opacity-100"><svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 13H16C17.7107 13 19.1506 14.2804 19.3505 15.9795L20 21.5M8 13C6.28928 13 4.84936 14.2804 4.64948 15.9795L4 21.5M8 13V18C8 19.8856 8 20.8284 8.58579 21.4142C9.17157 22 10.1144 22 12 22C13.8856 22 14.8284 22 15.4142 21.4142C16 20.8284 16 19.8856 16 18V17" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <circle cx="12" cy="6" r="4" stroke="#ffffff" stroke-width="1.5"></circle> </g></svg></span> Usuarios
                </a>
                <a href="gestionarhistorias.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span><svg width="30px" height="30px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>history_fill</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="System" transform="translate(-624.000000, -48.000000)" fill-rule="nonzero"> <g id="history_fill" transform="translate(624.000000, 48.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M2.90678,6.75004 C5.80627,1.72797 12.228,0.00728261 17.25,2.90678 C21.0199,5.08329 22.9267,9.24252 22.4214,13.3013 C22.3657,13.7492 22.2806,14.196 22.1654,14.639 C21.8468519,15.8635037 20.3543449,16.2084656 19.5070928,15.3851938 L19.4123,15.285 L17.1609,12.6977 C16.1582824,11.5455147 17.185199,9.8077093 18.6387302,10.0697929 L18.772,10.0992 L19.2895,10.2343 C18.8228,8.30914 17.599,6.57234 15.75,5.50485 C12.1629,3.43379 7.57592,4.66285 5.50485,8.25004 C3.43379,11.8372 4.66285,16.4242 8.25004,18.4952 C11.2343,20.2182 14.9141,19.6578 17.2583,17.3512 C17.8488,16.7701 18.7986,16.7778 19.3796,17.3683 C19.9606,17.9588 19.953,18.9085 19.3625,19.4895 C16.0818,22.7177 10.9324,23.508 6.75004,21.0933 C1.72797,18.1938 0.00728226,11.7721 2.90678,6.75004 Z M12,5.49992 C12.7796706,5.49992 13.4204457,6.09481439 13.4931332,6.8554611 L13.5,6.99992 L13.5,11.3786 L15.5606,13.4393 C16.1464,14.0251 16.1464,14.9748 15.5606,15.5606 C15.0114125,16.1097875 14.142391,16.1441117 13.5532243,15.6635727 L13.4393,15.5606 L10.9393,13.0606 C10.6931625,12.8144625 10.5414266,12.4915328 10.5073385,12.1481514 L10.5,11.9999 L10.5,6.99992 C10.5,6.1715 11.1715,5.49992 12,5.49992 Z" id="形状" fill="#ffffff"> </path> </g> </g> </g> </g></svg></span> Historias
                </a>
                <a href="configuracion.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70 group-hover:opacity-100"><svg width="30px" height="30px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Home"></g> <g id="Print"></g> <g id="Mail"></g> <g id="Camera"></g> <g id="Video"></g> <g id="Film"></g> <g id="Message"></g> <g id="Telephone"></g> <g id="User"></g> <g id="File"></g> <g id="Folder"></g> <g id="Map"></g> <g id="Download"></g> <g id="Upload"></g> <g id="Video_Recorder"></g> <g id="Schedule"></g> <g id="Cart"></g> <g id="Setting"> <path d="M29,12l-1.7,0c-0.1-0.4-0.3-0.8-0.5-1.1L28,9.6c0.4-0.4,0.6-0.9,0.6-1.4c0-0.5-0.2-1-0.6-1.4L25.2,4 c-0.8-0.8-2.1-0.8-2.8,0l-1.2,1.2C20.8,5,20.4,4.8,20,4.7V3c0-1.1-0.9-2-2-2h-2h-2c-1.1,0-2,0.9-2,2l0,1.7 c-0.4,0.1-0.8,0.3-1.1,0.5L9.6,4C8.9,3.2,7.6,3.2,6.8,4L4,6.8C3.6,7.2,3.4,7.7,3.4,8.2c0,0.5,0.2,1,0.6,1.4l1.2,1.2 C5,11.2,4.8,11.6,4.7,12H3c-1.1,0-2,0.9-2,2v4c0,1.1,0.9,2,2,2l1.7,0c0.1,0.4,0.3,0.8,0.5,1.1L4,22.4c-0.8,0.8-0.8,2,0,2.8L6.8,28 c0.8,0.8,2.1,0.8,2.8,0l1.2-1.2c0.4,0.2,0.7,0.3,1.1,0.5V29c0,1.1,0.9,2,2,2h2h2c1.1,0,2-0.9,2-2l0-1.7c0.4-0.1,0.8-0.3,1.1-0.5 l1.2,1.2c0.8,0.8,2.1,0.8,2.8,0l2.8-2.8c0.8-0.8,0.8-2,0-2.8l-1.2-1.2c0.2-0.4,0.3-0.7,0.5-1.1H29c1.1,0,2-0.9,2-2v-4 C31,12.9,30.1,12,29,12z M16,22c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6S19.3,22,16,22z" fill="#ffffff"></path> </g> <g id="Search"></g> <g id="Pencils"></g> <g id="Group"></g> <g id="Record"></g> <g id="Headphone"></g> <g id="Music_Player"></g> <g id="Sound_On"></g> <g id="Sound_Off"></g> <g id="Lock"></g> <g id="Lock_open"></g> <g id="Love"></g> <g id="Favorite"></g> <g id="Film_1_"></g> <g id="Music"></g> <g id="Puzzle"></g> <g id="Turn_Off"></g> <g id="Book"></g> <g id="Save"></g> <g id="Reload"></g> <g id="Trash"></g> <g id="Tag"></g> <g id="Link"></g> <g id="Like"></g> <g id="Bad"></g> <g id="Gallery"></g> <g id="Add"></g> <g id="Close"></g> <g id="Forward"></g> <g id="Back"></g> <g id="Buy"></g> <g id="Mac"></g> <g id="Laptop"></g> </g></svg></span> Configuración
                </a>
            </nav>
            <div class="mt-auto pt-6 border-t border-white/10">
                <a href="../auth/Login.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/20 text-red-300 transition-all text-sm font-bold">
                    <span><svg fill="#ffffff" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z"></path></g></svg></span> Salir
                </a>
            </div>
        </aside>

<!-- PAgina principal, donde se encuentra todo el contenido -->
        <main class="flex-1 p-8 md:p-12 overflow-y-auto">
            <div class="max-w-6xl mx-auto">
                <!-- Titulo de la pagina de administracion -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6 mb-12">
                    <div>
                        <h2 class="text-4xl font-extrabold tracking-tight mb-2">Vista General</h2>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#7ae582] animate-pulse"></span>
                            <p class="text-gray-400 text-sm italic">Bienvenido, Admin RESET</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="px-6 py-3 bg-white border border-gray-200 rounded-2xl text-sm font-bold hover:shadow-md active:scale-95 transition-all">
                            Actualizar
                        </button>
                        <button class="px-6 py-3 bg-[#25a18e] text-white rounded-2xl text-sm font-bold shadow-lg shadow-[#25a18e]/30 hover:bg-[#1e8575] active:scale-95 transition-all">
                            + Nueva Historia
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 pt-16 p-4">
                    <!-- total usuarios -->
                    <div class="bg-white rounded-4xl shadow-xl shadow-slate-200/60 border border-slate-100 p-8 md:p-10 w-full relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24  rounded-bl-[2.5rem] -mr-10 -mt-10 z-10 bg-purple-100" ></div>
                        <div class="font-semibold text-4xl md:text-5xl mt-5"><?php echo $total_usuarios ?></div>
                        <h2 class="font-semibold text-lg mt-5">Total de Usuarios</h2>
                    </div>

                <!-- resets pendientes -->
                    <div class="bg-white rounded-4xl shadow-xl shadow-slate-200/60 border border-slate-100 p-8 md:p-10 w-full relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24  rounded-bl-[2.5rem] -mr-10 -mt-10 z-0 bg-yellow-100" ></div>
                        <div class="font-semibold text-4xl md:text-5xl mt-5"><?php echo $total_usuarios_pendientes_resets ?></div>
                        <h2 class="font-semibold text-lg mt-5">RESETs pendientes</h2>

                    </div>

                <!-- reests completados -->
                    <div class="bg-white rounded-4xl shadow-xl shadow-slate-200/60 border border-slate-100 p-8 md:p-10 w-full relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24  rounded-bl-[2.5rem] -mr-10 -mt-10 z-0 bg-green-100" ></div>
                        <div class="font-semibold text-4xl md:text-5xl mt-5"><?php echo $total_usuarios_Completado_resets ?></div>
                        <h2 class="font-semibold text-lg mt-5">RESETs completados</h2>
                    </div>

                    <!-- Voluntarios -->
                    <div class="bg-white rounded-4xl shadow-xl shadow-slate-200/60 border border-slate-100 p-8 md:p-10 w-full relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24  rounded-bl-[2.5rem] -mr-10 -mt-10 z-0 bg-blue-100" ></div>
                        <div class="font-semibold text-4xl md:text-5xl mt-5"><?php echo $total_usuarios_voluntarios ?></div>
                        <h2 class="font-semibold text-lg mt-5">Voluntarios</h2>
                    </div>
                </div >

                
            
                <div class="max-w-6xl mx-auto rounded-3xl bg-white shadow-xl shadow-slate-200/60 border border-slate-100 p-8 md:p-10 w-full relative overflow-hidden pt-16 gap-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    
                    <div class="">

                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <span class="text-gray-800 font-semibold text-sm">Tasa de éxito</span>
                        </div>

                        <div class="relative h-48  mb-6">
                            <canvas id="miGrafico"></canvas>
                        </div>

                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-blue-50 rounded-2xl p-3 text-center">
                                <div class="text-blue-600 font-bold text-lg"><?php echo $total_usuarios_Nuevo_resets ?></div>
                                <div class="text-gray-500 text-xs">Nuevos</div>
                            </div>
                            <div class="bg-green-50 rounded-2xl p-3 text-center">
                                <div class="text-green-600 font-bold text-lg"><?php echo $total_usuarios_pendientes_resets ?></div>
                                <div class="text-gray-500 text-xs">En proceso</div>
                            </div>
                            <div class="bg-teal-50 rounded-2xl p-3 text-center">
                                <div class="text-teal-600 font-bold text-lg"><?php echo $total_usuarios_Completado_resets ?></div>
                                <div class="text-gray-500 text-xs">Listos</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="md:border-l md:pl-10 border-slate-100 h-full">
                            <h2 class="text-gray-800 font-semibold text-sm mb-4">Actividad Reciente</h2>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
                
            </div>
            </div>
    
            
        </main>

        
<script>
    // 1. Plugin para el texto central (se mantiene igual, pero dinámico)
    const centroTexto = {
      id: 'centroTexto',
      afterDraw(chart) {
        const { ctx, chartArea: { width, height } } = chart;
        ctx.save();
        
        // Calculamos el porcentaje total de "Listos" para mostrar en el centro
        // chart.data.datasets[0].data[2] es el valor de "Listos"
        const dataArray = chart.data.datasets[0].data;
        const total = dataArray.reduce((a, b) => a + b, 0);
        const listos = dataArray[2]; // El tercer valor es "Listos"

        // 2. Validación: Si el total es 0, el porcentaje es "0%" para evitar el NaN
        const porcentaje = total > 0 ? Math.round((listos / total) * 100) + '%' : '0%';

        ctx.font = 'bold 30px sans-serif';
        ctx.fillStyle = '#1a3331';
        ctx.textAlign = 'center';
        ctx.textBaseline = 'middle';
        ctx.fillText(porcentaje, width / 2, height / 2 - 5);

        ctx.font = '14px sans-serif';
        ctx.fillStyle = '#666';
        ctx.fillText('completados', width / 2, height / 2 + 20);
        
        ctx.restore();
      }
    };

    // 2. Configuración de los Datos
    const data = {
        // Estas etiquetas ayudan a herramientas de lectura de pantalla
        labels: ['Nuevos', 'En proceso', 'Listos'], 
        datasets: [{
            // AQUÍ AGREGAMOS LOS 3 VALORES
            // Usamos 1 para "Nuevos", y las variables PHP para los otros dos
            data: [
                <?php echo $total_usuarios_Nuevo_resets ?>, 
                <?php echo $total_usuarios_pendientes_resets ?>, 
                <?php echo $total_usuarios_Completado_resets ?>
            ],
            // COLORES: Azul (Nuevos), Verde (Proceso), Teal (Listos)
            backgroundColor: ['#3b82f6', '#22c55e', '#28948c'],
            borderWidth: 0,
            borderRadius: 10, // Suaviza las uniones de los segmentos
            cutout: '80%',    // Hace el "agujero" central más grande
        }]
    };

    // 3. Configuración del Gráfico
    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }, // Ocultamos la leyenda automática
                tooltip: { enabled: true }  // Activamos el tooltip para ver info al pasar el mouse
            },
            rotation: -90, // Empezamos el dibujo desde arriba
            circumference: 360, 
        },
        plugins: [centroTexto] 
    };

    // 4. Renderizado
    const ctx = document.getElementById('miGrafico').getContext('2d');
    new Chart(ctx, config);
</script>
</body>
</html>