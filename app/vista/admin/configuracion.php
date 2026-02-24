<?php

include_once "../../controlador/AdminController.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../../../public/img/Logo_RESET.svg">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Bricolage Grotesque', sans-serif; 
            background-color: #f4f9fa;

        }
    </style>
</head>
<body class="text-[#004e64] min-h-full flex flex-col">

<!-- Menú de la izquierda, que va cambiando con forme vamos cambiando de pagina -->
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
                <a href="dashboard.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
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
                <a href="configuracion.php" class="bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] text-[#004e64] flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg text-sm font-extrabold">
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

        <div class="md:ml-64 p-8  md:p-12 md:max-w-6xl lg:max-w-full w-full">
    
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">Configuración del Sistema</h1>
        <p class="text-slate-500">Actualiza la información de tu cuenta y preferencias de seguridad.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 ">

    
        
        <div class="lg:col-span-2 space-y-8">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                <div class="flex items-center gap-4 mb-8 border-b border-slate-100 pb-4">
                    <div class="p-3 bg-blue-50 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-slate-800">Información Personal</h2>
                </div>

                <form action="actualizar_perfil.php" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="md:col-span-2 flex items-center gap-6 p-4 bg-slate-50 rounded-xl">
                        <div class="h-24 w-24 rounded-full bg-slate-200 flex-shrink-0 border-4 border-white shadow-sm overflow-hidden">
                            <img id="avatar-preview" src="https://ui-avatars.com/api/?name=Admin" class="h-full w-full object-cover">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-2">Foto de perfil</label>
                            <input type="file" name="nueva_foto" class="text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 cursor-pointer">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Nombre de Usuario</label>
                        <input type="text" value="admin" class="w-full px-4 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none bg-slate-50">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Correo Electrónico</label>
                        <input type="email" value="admin@gmail.com" class="w-full px-4 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none bg-slate-50">
                    </div>

                    <div class="md:col-span-2 mt-4 pt-6 border-t border-slate-100">
                        <h3 class="text-lg font-semibold text-slate-800 mb-4 ">Cambiar Contraseña</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="password" name="nueva_password" placeholder="Nueva contraseña" class="px-4 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none">
                            <input type="password" placeholder="Confirmar contraseña" class="px-4 py-2 rounded-lg border border-slate-300 focus:ring-2 focus:ring-blue-500 outline-none">
                        </div>
                        <p class="mt-2 text-xs text-slate-400 italic">Si no deseas cambiarla, deja estos campos vacíos.</p>
                    </div>

                    <div class="md:col-span-2 flex justify-end pt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-8 rounded-lg shadow-md transition-all active:scale-95">
                            Guardar todos los cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>

        
        </div>
        <div class="space-y-6 w-120 grid grid-cols-1 lg:grid-cols-2">
            <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl p-6 text-white shadow-lg">
                <h3 class="font-bold text-lg mb-2">Estado de la cuenta</h3>
                <div class="flex items-center gap-2 mb-4">
                    <span class="h-3 w-3 bg-green-400 rounded-full animate-pulse"></span>
                    <span class="text-sm">Administrador Activo</span>
                </div>
                <p class="text-blue-100 text-sm">Registrado el: 24-02-2026</p>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
                <h3 class="font-bold text-slate-800 mb-4">Consejo de seguridad</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Asegúrate de que tu contraseña tenga al menos 12 caracteres, incluyendo números y símbolos especiales para mayor seguridad.
                </p>
            </div>
    </div>
</div>
</body>
</html>