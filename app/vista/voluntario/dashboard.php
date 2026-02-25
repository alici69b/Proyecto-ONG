<?php
include_once "../../controlador/VolunteersController.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../../../public/img/Logo_RESET.svg">
    <title>Dashboard Voluntario - RESET</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Bricolage Grotesque', sans-serif; background-color: #f4f9fa; }
    </style>
</head>
<body class="bg-slate-100 text-[#004e64]">
    
    <header class="bg-white flex flex-row justify-between p-2">
        <div class="flex flex-row justify-center items-center gap-2 text-[#004e64]">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="#004e64" height="40px" width="40px" viewBox="0 0 612.00 612.00">
                <path d="M44.563,250.179l237.89,41.871c0.485,0.085,0.964,0.118,1.451,0.118c4.33-0.027,7.831-3.545,7.831-7.88 c0-1.831-0.624-3.516-1.672-4.853l-39.919-61.25c24.027-10.024,64.762-23.283,112.095-23.283c24.594,0,48.118,3.69,69.918,10.972 c19.861,6.631,47.495,24.447,70.4,45.389c16.415,15.01,31.403,32.073,45.896,48.573c3.34,3.802,6.682,7.607,10.048,11.396 c1.521,1.713,3.677,2.648,5.894,2.648c0.788,0,1.581-0.116,2.357-0.361c2.961-0.928,5.101-3.508,5.468-6.588l0.116-0.991 c6.506-56.017-7.174-114.855-37.531-161.427c-32.502-49.852-84.035-85.972-145.111-101.71 c-24.353-6.275-49.973-9.456-76.149-9.456c-34.717,0-69.827,5.501-104.373,16.35c-18.876,5.971-37.136,13.429-54.376,22.198 L110.264,3.574c-1.714-2.631-4.832-3.978-7.921-3.467c-3.096,0.526-5.584,2.838-6.333,5.887L38.278,240.535 c-0.521,2.118-0.142,4.359,1.05,6.186C40.519,248.549,42.415,249.802,44.563,250.179z"></path>
                <path d="M572.67,365.274c-1.191-1.827-3.087-3.08-5.236-3.458l-237.888-41.872c-3.094-0.54-6.212,0.8-7.942,3.419 c-1.73,2.619-1.74,6.017-0.027,8.648l40.278,61.802c-24.027,10.024-64.762,23.283-112.093,23.283 c-24.594,0-48.118-3.692-69.92-10.974c-19.864-6.632-47.498-24.449-70.4-45.389c-16.415-15.01-31.403-32.071-45.896-48.568 c-3.34-3.803-6.684-7.608-10.049-11.398c-2.065-2.323-5.301-3.219-8.265-2.282c-2.964,0.935-5.101,3.526-5.456,6.612l-0.111,0.962 c-6.508,56.021,7.172,114.855,37.532,161.42c32.5,49.855,84.034,85.977,145.109,101.712c24.358,6.275,49.982,9.456,76.16,9.456 c0.003,0,0.002,0,0.007,0c34.71,0,69.819-5.499,104.355-16.35c18.876-5.971,37.136-13.427,54.375-22.196l44.53,68.321 c1.47,2.255,3.967,3.578,6.6,3.578c0.438,0,0.88-0.036,1.321-0.109c3.096-0.526,5.583-2.838,6.335-5.887l57.734-234.541 C574.242,369.342,573.863,367.103,572.67,365.274z"></path>
            </svg>
            <h3 class="font-black text-xl text-bold tracking-tighter hidden sm:inline">RESET</h3>
        </div>
        <div class="flex flex-row justify-center items-center gap-6">
            <div class="sm:text-base text-sm">Casos</div>
            <div class="sm:text-base text-sm">Historias</div>
            <div class="flex flex-row justify-center items-center gap-2 bg-slate-100 px-4 py-2 rounded-2xl">
                <img src="../../../public/img/<?php echo $voluntario['foto_perfil']; ?>" class="w-11 h-11 aspect-square object-cover rounded-2xl shadow-medium" >
                <div class="sm:text-base text-sm"><?php echo ucfirst(htmlspecialchars($voluntario['nombre'])); ?></div>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10 space-y-10">

        <!-- Card info usuario -->
        <div class="bg-[#25ad99] rounded-2xl shadow-md p-8  flex flex-row lg:flex-row justify-between md:gap-6 gap-2">

            <div class="flex gap-5 flex-col justify-center">
                <div class="flex items-center gap-5 ">
                    <img src="../../../public/img/<?php echo $voluntario['foto_perfil'];?>" class="w-24 h-24 aspect-square object-cover rounded-full shadow-medium">
                    <div>
                        <h2 class="text-2xl font-bold text-white"><span class="hidden md:inline">Hola, </span><?php echo ucfirst(htmlspecialchars($voluntario['nombre'])); ?></h2>
                        <p class="text-emerald-300 font-sm hidden md:inline">Gracias por ofrecer segundas oportunidades</p>
                    </div>
                </div>
                <div class="flex sm:gap-3 gap-2">
                    <div class="bg-[#1fc4ab] text-white px-3 py-1 rounded-full text-xs">
                        <?php echo ucfirst(htmlspecialchars($voluntario['tipo_ayuda'])); ?>
                    </div>
                    <!-- <div class="bg-[#1fc4ab] text-white px-3 py-1 rounded-full text-xs">
                        Fines de semana
                    </div> -->
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-center items-center sm:gap-4 gap-2 sm:items-start pt-2">
                <div class="text-white bg-[#25b49f] rounded-xl md:p-2 p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg>
                </div>
                <div class="sm:border-1 sm:border-white/20 sm:h-11"></div>
                <div class="text-white flex flex-col text-center justify-center">
                    <div class="md:text-2xl text-lg md:font-semibold">3</div>
                    <div class="md:text-sm text-xs font-thin">Mis casos</div>
                </div>
                <div class="sm:border-1 sm:border-white/20 sm:h-11"></div>
                <div class="flex flex-col text-center justify-center">
                    <div class="text-emerald-300 md:font-semibold md:text-2xl text-lg">0</div>
                    <div class="md:text-sm text-xs text-white font-thin">Disponibles</div>
                </div>
            </div>
        </div>

        <!-- Mis Casos asignados -->
        <div class="p-6 space-y-6">
            <!-- Titulo -->
            <div class="flex gap-3 items-center">
                <div class="bg-[#004e64] text-white rounded-2xl w-8 h-8 items-center justify-center flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart-handshake"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /><path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25" /><path d="M12.5 15.5l2 2" /><path d="M15 13l2 2" /></svg>
                </div>
                <div class="text-2xl font-semibold text-[#004e64]">
                    Mis casos asignados
                </div>
                <div class="w-8 h-8 bg-[#004e64] text-white 
                flex items-center justify-center 
                rounded-full">
                    3
                </div>
            </div>

            <!-- Cards -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="border rounded-2xl p-5 hover:shadow-lg transition bg-slate-50 flex-1">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center">

                        </div>
                        <div>
                            <h4 class="font-semibold">Estudios universitarios</h4>
                            <p class="text-sm text-[#0095be] font-thin">Solicitado por NOMBRE</p>
                        </div>
                    </div>
                    <p class="text-sm mt-4 text-slate-600 bg-[#0095be]/10 rounded-lg p-2">
                        DESCRIPCIÓN
                    </p>
                    <div class="flex justify-between items-center mt-5 text-sm">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                            <span>Pendiente</span>
                        </div>
                        <span class="text-slate-400">12/04/2025</span>
                    </div>
                </div>

                <!-- <div class="border rounded-2xl p-5 hover:shadow-lg transition bg-slate-50 flex-1">   
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-200 rounded-xl flex items-center justify-center">
                            
                        </div>
                        <div>
                            <h4 class="font-semibold">Estudios universitarios</h4>
                            <p class="text-sm text-[#0095be] font-thin">Solicitado por NOMBRE</p>
                        </div>
                    </div>
                    <p class="text-sm mt-4 text-slate-600 bg-[#0095be]/10 rounded-lg p-2">
                        DESCRIPCIÓN
                    </p>
                    <div class="flex justify-between items-center mt-5 text-sm">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                            <span>Pendiente</span>
                        </div>
                        <span class="text-slate-400">12/04/2025</span>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Casos Disponibles -->
        <div class="p-6 space-y-6">

            <div class="flex gap-3 items-center">
                <div class="bg-[#1296bb] text-white rounded-2xl w-8 h-8 items-center justify-center flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /><path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /></svg>
                </div>
                <div class="text-2xl font-semibold text-[#004e64]">
                    Casos disponibles
                </div>
                <div class="w-8 h-8 bg-[#1296bb] text-white 
                flex items-center justify-center 
                rounded-full">
                    0
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-md flex-1 justify-center border border-dashed border-[#1296bb]/30 min-h-40 md:min-h-56 lg:min-h-64">
                <div></div>
            </div>
        </div>
    </main>

</body>
</html>