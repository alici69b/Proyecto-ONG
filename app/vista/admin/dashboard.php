<?php
include_once "../../controlador/AdminController.php";

// Evitamos errores si las variables no vienen del controlador
$total_usuarios = $total_usuarios ?? 0;
$total_usuarios_pendientes_resets = $total_usuarios_pendientes_resets ?? 0;
$total_usuarios_Completado_resets = $total_usuarios_Completado_resets ?? 0;
$total_usuarios_voluntarios = $total_usuarios_voluntarios ?? 0;
$total_usuarios_Nuevo_resets = $total_usuarios_Nuevo_resets ?? 0;
?>
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
            <div class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center border border-white/10">
                <span class="text-xl">🛡️</span>
            </div>
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
                <a href="configuracion.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                <span class="opacity-70 group-hover:opacity-100"><svg viewBox="0 0 32 32" enable-background="new 0 0 32 32" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Home"></g> <g id="Print"></g> <g id="Mail"></g> <g id="Camera"></g> <g id="Video"></g> <g id="Film"></g> <g id="Message"></g> <g id="Telephone"></g> <g id="User"></g> <g id="File"></g> <g id="Folder"></g> <g id="Map"></g> <g id="Download"></g> <g id="Upload"></g> <g id="Video_Recorder"></g> <g id="Schedule"></g> <g id="Cart"></g> <g id="Setting"> <path d="M29,12l-1.7,0c-0.1-0.4-0.3-0.8-0.5-1.1L28,9.6c0.4-0.4,0.6-0.9,0.6-1.4c0-0.5-0.2-1-0.6-1.4L25.2,4 c-0.8-0.8-2.1-0.8-2.8,0l-1.2,1.2C20.8,5,20.4,4.8,20,4.7V3c0-1.1-0.9-2-2-2h-2h-2c-1.1,0-2,0.9-2,2l0,1.7 c-0.4,0.1-0.8,0.3-1.1,0.5L9.6,4C8.9,3.2,7.6,3.2,6.8,4L4,6.8C3.6,7.2,3.4,7.7,3.4,8.2c0,0.5,0.2,1,0.6,1.4l1.2,1.2 C5,11.2,4.8,11.6,4.7,12H3c-1.1,0-2,0.9-2,2v4c0,1.1,0.9,2,2,2l1.7,0c0.1,0.4,0.3,0.8,0.5,1.1L4,22.4c-0.8,0.8-0.8,2,0,2.8L6.8,28 c0.8,0.8,2.1,0.8,2.8,0l1.2-1.2c0.4,0.2,0.7,0.3,1.1,0.5V29c0,1.1,0.9,2,2,2h2h2c1.1,0,2-0.9,2-2l0-1.7c0.4-0.1,0.8-0.3,1.1-0.5 l1.2,1.2c0.8,0.8,2.1,0.8,2.8,0l2.8-2.8c0.8-0.8,0.8-2,0-2.8l-1.2-1.2c0.2-0.4,0.3-0.7,0.5-1.1H29c1.1,0,2-0.9,2-2v-4 C31,12.9,30.1,12,29,12z M16,22c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6S19.3,22,16,22z" fill="#ffffff"></path> </g> <g id="Search"></g> <g id="Pencils"></g> <g id="Group"></g> <g id="Record"></g> <g id="Headphone"></g> <g id="Music_Player"></g> <g id="Sound_On"></g> <g id="Sound_Off"></g> <g id="Lock"></g> <g id="Lock_open"></g> <g id="Love"></g> <g id="Favorite"></g> <g id="Film_1_"></g> <g id="Music"></g> <g id="Puzzle"></g> <g id="Turn_Off"></g> <g id="Book"></g> <g id="Save"></g> <g id="Reload"></g> <g id="Trash"></g> <g id="Tag"></g> <g id="Link"></g> <g id="Like"></g> <g id="Bad"></g> <g id="Gallery"></g> <g id="Add"></g> <g id="Close"></g> <g id="Forward"></g> <g id="Back"></g> <g id="Buy"></g> <g id="Mac"></g> <g id="Laptop"></g> </g></svg></span> 
                Configuracion
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
            <div class=" mx-auto my-10">
                
                <div class="flex flex-col md:flex-row justify-between items-center md:items-end gap-6 mb-12">
                    <div>
                        <h2 class="text-4xl font-extrabold tracking-tight mb-2">Vista General</h2>
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#7ae582] animate-pulse"></span>
                            <p class="text-gray-400 text-sm italic">Sincronizado: <?php echo date('H:i'); ?>hs</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button onclick="location.reload()" class="px-6 py-3 bg-white border border-gray-200 rounded-2xl text-sm font-bold hover:shadow-md transition-all active:scale-95">Actualizar</button>
                        <button class="px-6 py-3 bg-[#25a18e] text-white rounded-2xl text-sm font-bold shadow-lg shadow-[#25a18e]/30 hover:bg-[#1e8575] transition-all active:scale-95">+ Nueva Historia</button>
                    </div>
                </div>

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

                <div class="bg-white rounded-[3rem] shadow-xl shadow-blue-900/5 border border-slate-100 p-10">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                        <div>
                            <div class="flex items-center gap-2 mb-8">
                                <div class="w-8 h-8 bg-teal-50 rounded-lg flex items-center justify-center">
                                    <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                </div>
                                <span class="text-slate-700 font-extrabold">Rendimiento RESETs</span>
                            </div>

                            <div class="relative h-64 mb-8">
                                <canvas id="miGrafico"></canvas>
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                <div class="bg-blue-50/50 rounded-2xl p-4 text-center border border-blue-100/50">
                                    <div class="text-blue-600 font-black text-xl"><?php echo $total_usuarios_Nuevo_resets ?></div>
                                    <div class="text-slate-400 text-[10px] font-bold uppercase">Nuevos</div>
                                </div>
                                <div class="bg-green-50/50 rounded-2xl p-4 text-center border border-green-100/50">
                                    <div class="text-green-600 font-black text-xl"><?php echo $total_usuarios_pendientes_resets ?></div>
                                    <div class="text-slate-400 text-[10px] font-bold uppercase">Proceso</div>
                                </div>
                                <div class="bg-teal-50/50 rounded-2xl p-4 text-center border border-teal-100/50">
                                    <div class="text-teal-600 font-black text-xl"><?php echo $total_usuarios_Completado_resets ?></div>
                                    <div class="text-slate-400 text-[10px] font-bold uppercase">Éxito</div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:border-l border-slate-100 lg:pl-16 flex flex-col justify-center">
                            <h2 class="text-slate-700 font-extrabold mb-8 flex items-center gap-2">
                                <span class="w-2 h-2 bg-indigo-500 rounded-full"></span> Actividad Reciente
                            </h2>
                            
                    </div>
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