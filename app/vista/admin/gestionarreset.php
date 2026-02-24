<?php

include_once "../../controlador/AdminController.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <aside class="w-64 min-h-screen bg-[#004e64] text-blue-100 flex flex-col p-6 gap-8 fixed left-0 top-0">
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
                <span class="opacity-70 group-hover:opacity-100"><svg fill="#ffffff" width="20" height="20" viewBox="0 0 36 36"><path d="M32 5H4c-1.1 0-2 .9-2 2v22c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zM4 29V7h28v22H4z"/><path d="M15.6 15.2l-6 8.7-4-3.5 1-1.2 2.7 2.4 6.3-9.2 6.7 10 6.8-8.9 1.3 1-8.1 10.7z"/></svg></span> 
                Vista general
            </a>
            <a href="gestionarreset.php" class="bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] text-[#004e64] flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg text-sm font-extrabold">
                <span class="opacity-70 group-hover:opacity-100"><svg fill="#ffffff" width="20" height="20" viewBox="0 0 1920 1920"><path d="M276.9 440.6v565.7c0 422.4 374.2 625.5 674.7 788.7l8 4.3 8.1-4.3c300.5-163.2 674.7-366.3 674.7-788.7V440.6l-682.8-321.7-682.8 321.7z"/></svg></span> 
                Gestionar Resets
            </a>
            <a href="gestionusuarios.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                <span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></span> 
                Usuarios
            </a>
            <a href="gestionarhistorias.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                <span class="opacity-70 group-hover:opacity-100"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></span> 
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
</body>
</html>