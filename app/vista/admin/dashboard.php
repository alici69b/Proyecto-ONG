<?php
include_once "../../controlador/AdminController.php";

// Evitamos errores si las variables no vienen del controlador
$total_usuarios = $total_usuarios ?? 0;
$total_usuarios_pendientes_resets = $total_usuarios_pendientes_resets ?? 0;
$total_usuarios_Completado_resets = $total_usuarios_Completado_resets ?? 0;
$total_usuarios_voluntarios = $total_usuarios_voluntarios ?? 0;
$total_usuarios_Nuevo_resets = $total_usuarios_Nuevo_resets ?? 0;
?>

<!--
    colores
        -azul oscuro: #004e64
        -azul: #00a5cf
        - verdeagua  #9fffcb
        -verde : #25a18e
        -verde vivo: #7ae582
        -coral: #ff3b30
        -poner letras con el degradado del inicio: bg-linear-to-r from-[#00a5cf] to-[#9fffcb] bg-clip-text text-transparent 
        -color del  bg-[#f4f9fa]

    -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../../../public/img/Logo_RESET.svg">
    <title>Dashboard Admin - RESET</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Bricolage Grotesque', sans-serif; background-color: #f4f9fa; }
    </style>
</head>

<body class="text-[#004e64] min-h-screen">
    <div class="flex">
        <!-- boton hamburguesa para que desaparezca en movil -->
        <button onclick="toggleSidebar()" class="md:hidden fixed top-4 left-4 z-[60] bg-[#004e64] text-white p-2 rounded-lg shadow-lg">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <aside id="sidebar" class="fixed left-0 top-0 z-50 h-screen w-64 bg-[#004e64] text-blue-100 p-6 flex flex-col gap-8 transition-transform duration-300 transform -translate-x-full md:translate-x-0">
            
            <button onclick="toggleSidebar()" class="md:hidden absolute top-5 right-5 text-white/50 hover:text-white">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="flex items-center gap-3 mt-10 px-2">
            <div>
                <p class="font-bold text-white text-sm">Panel Admin</p>
                <p class="text-[10px] text-[#9fffcb] uppercase tracking-widest font-bold">RESET ONG</p>
            </div>
            </div>
            
            <nav class="flex flex-col gap-2">
                <a href="dashboard.php" class="bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] text-[#004e64] flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg text-sm font-extrabold">
                    <span class="opacity-70"><svg fill="currentColor" width="20" height="20" viewBox="0 0 36 36"><path d="M32 5H4c-1.1 0-2 .9-2 2v22c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zM4 29V7h28v22H4z"/><path d="M15.6 15.2l-6 8.7-4-3.5 1-1.2 2.7 2.4 6.3-9.2 6.7 10 6.8-8.9 1.3 1-8.1 10.7z"/></svg></span> 
                    Vista general
                </a>
                <a href="gestionarreset.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70 text-white"><svg fill="currentColor" width="20" height="20" viewBox="0 0 1920 1920"><path d="M276.9 440.6v565.7c0 422.4 374.2 625.5 674.7 788.7l8 4.3 8.1-4.3c300.5-163.2 674.7-366.3 674.7-788.7V440.6l-682.8-321.7-682.8 321.7z"/></svg></span> 
                    Gestionar Resets
                </a>
                <a href="gestionusuarios.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></span> 
                    Usuarios
                </a>
                <a href="gestionarhistorias.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span> 
                    Historias
                </a>
                
            </nav>

            <div class="mt-auto pt-6 border-t border-white/10">
                <a href="../auth/Login.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/20 text-red-300 transition-all text-sm font-bold">
                    <svg fill="currentColor" width="20" height="20" viewBox="0 0 24 24"><path d="M16 17v-4H9v-2h7V7l5 5-5 5M14 2a2 2 0 012 2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2h9z"/></svg>
                    Salir
                </a>
            </div>
        </aside>

        <div id="sidebarOverlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden"></div>

        <main class="flex-1 md:ml-64   p-8  md:p-12  md:max-w-6xl lg:max-w-full w-full">
            <header class="flex justify-between items-center mb-10">
                
                
                    <div>
                        <h2 class="text-4xl font-extrabold tracking-tight mb-2">Vista General</h2>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#7ae582] animate-pulse"></span>
                            <p class="text-gray-400 text-sm italic">Sincronizado: <?php echo date('H:i'); ?>hs</p>
                        </div>
                    </div>
                    <div class="flex gap-3 ">
                        <button onclick="location.reload()" class="px-6 py-3 bg-white border border-gray-200 rounded-2xl text-sm font-bold hover:shadow-md transition-all active:scale-95">Actualizar</button>
                        <button class="px-6 py-3 bg-[#25a18e] text-white rounded-2xl text-sm font-bold shadow-lg shadow-[#25a18e]/30 hover:bg-[#1e8575] transition-all active:scale-95">+ Nueva Historia</button>
                    </div>
                
            </header>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-8 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-[2.5rem] -mr-8 -mt-8 bg-purple-50 group-hover:bg-purple-100 transition-colors"></div>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-2">Usuarios</p>
                        <div class="text-5xl font-extrabold text-slate-800"><?php echo $total_usuarios ?></div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-8 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-[2.5rem] -mr-8 -mt-8 bg-yellow-50 group-hover:bg-yellow-100 transition-colors"></div>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-2">Pendientes</p>
                        <div class="text-5xl font-extrabold text-slate-800"><?php echo $total_usuarios_pendientes_resets ?></div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-8 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-[2.5rem] -mr-8 -mt-8 bg-green-50 group-hover:bg-green-100 transition-colors"></div>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-2">Completados</p>
                        <div class="text-5xl font-extrabold text-slate-800"><?php echo $total_usuarios_Completado_resets ?></div>
                    </div>

                    <div class="bg-white rounded-[2.5rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-8 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-24 h-24 rounded-bl-[2.5rem] -mr-8 -mt-8 bg-blue-50 group-hover:bg-blue-100 transition-colors"></div>
                        <p class="text-sm font-bold text-slate-400 uppercase tracking-wider mb-2">Voluntarios</p>
                        <div class="text-5xl font-extrabold text-slate-800"><?php echo $total_usuarios_voluntarios ?></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    
                        <div class=" bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-10">
                            <div>
                            <div class="flex items-center gap-2 mb-8">
                                <div class="w-8 h-8 bg-teal-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <span class="text-slate-700 font-extrabold">Rendimiento RESETs</span>
                            </div>
                            <!-- si no existen datos mostrará que no hya datos que los añada a la base de datos -->
                            <?php if(empty($total_usuarios_Nuevo_resets) && empty($total_usuarios_Pendientes_resets) && empty($total_usuarios_Completado_resets)): ?>
                                <div class="flex flex-col items-center justify-center h-64  rounded-[2rem] bg-slate-50/100   p-8 text-center">
                                    <div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center mb-4">
                                        <svg class="w-10 h-10 text-slate-700" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42ZM24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="currentColor"></path>
                                            <path d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z" fill="currentColor"></path>
                                            <path d="M33 20C33 21.1046 32.1046 22 31 22C29.8954 22 29 21.1046 29 20C29 18.8954 29.8954 18 31 18C32.1046 18 33 18.8954 33 20Z" fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5673 33.8235C18.5673 33.8235 21 31 24 31C27 31 29.4327 33.8235 29.4327 33.8235" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-slate-700 font-bold max-w-[200px] mx-auto leading-tight">No hay datos guardados, añade resets para ver tu grafica</h3>
                                </div>
                            <?php else: ?>
                                <div class="relative h-64 mb-8">
                                    <canvas id="miGrafico"></canvas>
                                </div>

                                <div class="grid grid-cols-3 gap-4">
                                    <div class="bg-blue-50/50 rounded-2xl p-4 text-center border border-blue-100/50">
                                        <div class="text-blue-600 font-black text-xl"><?php echo $total_usuarios_Nuevo_resets ?></div>
                                        <div class="text-slate-400 text-[10px] font-bold uppercase tracking-wider">Nuevos</div>
                                    </div>
                                    <div class="bg-green-50/50 rounded-2xl p-4 text-center border border-green-100/50">
                                        <div class="text-green-600 font-black text-xl"><?php echo $total_usuarios_pendientes_resets ?></div>
                                        <div class="text-slate-400 text-[10px] font-bold uppercase tracking-wider">Proceso</div>
                                    </div>
                                    <div class="bg-teal-50/50 rounded-2xl p-4 text-center border border-teal-100/50">
                                        <div class="text-teal-600 font-black text-xl"><?php echo $total_usuarios_Completado_resets ?></div>
                                        <div class="text-slate-400 text-[10px] font-bold uppercase tracking-wider">Éxito</div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2  bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-10">
                            <h2 class="text-slate-700 font-extrabold mb-8 flex items-center gap-2">
                                <span class="w-2 h-2 bg-indigo-500 rounded-full animate-pulse"></span> Actividad Reciente
                            </h2>
                            <div class="space-y-4">
                                </div>
                        </div>
                    
                </div>

                <div class="bg-white rounded-[2.5rem] p-8 shadow-xl shadow-blue-900/5 border border-slate-100 w-full mt-6">
                    <div class="flex justify-between items-center mb-8">
                        <h3 class="font-black text-slate-800 tracking-tight text-lg">Actividad</h3>
                        <span class="flex items-center gap-1.5 bg-emerald-50 text-emerald-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border border-emerald-100">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-ping"></span>
                            En vivo
                        </span>
                    </div>

                    <div class="flex flex-wrap justify-start items-center gap-8">
                        <?php foreach ($lista_usuarios as $user): ?>
                            <div class="flex items-center gap-4 group transition-all duration-300 hover:translate-x-1">
                                <div class="relative">
                                    <div class="absolute -inset-1 bg-gradient-to-tr from-slate-100 to-slate-50 rounded-[1.2rem] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <img src="../../public/img/<?= $user['foto_perfil'] ?>" class="relative w-12 h-12 rounded-[1.1rem] object-cover shadow-sm border border-white">
                                    <span class="absolute -bottom-1 -right-1 w-4 h-4 border-2 border-white rounded-full 
                                        <?= $user['estado'] === 'online' ? 'bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.5)]' : 'bg-slate-300' ?>">
                                    </span>
                                </div>
                                
                                <div>
                                    <p class="text-sm font-bold text-slate-700 leading-none group-hover:text-indigo-600 transition-colors"><?= htmlspecialchars($user['nombre']) ?></p>
                                    <p class="text-[10px] text-slate-400 font-bold mt-1.5 uppercase tracking-widest flex items-center gap-1">
                                        <?= $user['estado'] === 'online' ? 'Activo ahora' : 'Desconectado' ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
        </main>
    </div>

    

    <script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        
        // Toggle para mover el sidebar
        sidebar.classList.toggle('-translate-x-full');
        
        // Toggle para el fondo oscuro
        overlay.classList.toggle('hidden');
}

        const centroTexto = {
            id: 'centroTexto',
            afterDraw(chart) {
                const { ctx, chartArea: { width, height, top } } = chart;
                ctx.save();
                const dataArray = chart.data.datasets[0].data;
                const total = dataArray.reduce((a, b) => a + b, 0);
                const listos = dataArray[2]; 
                const porcentaje = total > 0 ? Math.round((listos / total) * 100) + '%' : '0%';

                ctx.font = 'bold 36px Bricolage Grotesque';
                ctx.fillStyle = '#004e64';
                ctx.textAlign = 'center';
                ctx.textBaseline = 'middle';
                ctx.fillText(porcentaje, width / 2, (height / 2) + top - 5);

                ctx.font = 'bold 12px Bricolage Grotesque';
                ctx.fillStyle = '#94a3b8';
                ctx.fillText('COMPLETADOS', width / 2, (height / 2) + top + 25);
                ctx.restore();
            }
        };

        const ctx = document.getElementById('miGrafico').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Nuevos', 'En proceso', 'Listos'],
                datasets: [{
                    data: [
                        <?php echo $total_usuarios_Nuevo_resets ?>, 
                        <?php echo $total_usuarios_pendientes_resets ?>, 
                        <?php echo $total_usuarios_Completado_resets ?>
                    ],
                    backgroundColor: ['#60a5fa', '#4ade80', '#2dd4bf'],
                    hoverOffset: 15,
                    borderWidth: 0,
                    borderRadius: 20
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '85%',
                plugins: { legend: { display: false } }
            },
            plugins: [centroTexto]
        });
    </script>
</body>
</html>