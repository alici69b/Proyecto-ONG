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
    
<?php 
require_once "../../../src/components/Header_volunteer.php";
?>

    <main class="max-w-7xl mx-auto px-6 py-10 space-y-10 mt-30">

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