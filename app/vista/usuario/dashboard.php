<?php
include_once "../../controlador/UserController.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../../../public/img/Logo_RESET.svg">
    <title>Dashboard - RESET</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,300;12..96,500;12..96,700;12..96,800&display=swap" rel="stylesheet">
    <style>
        
        body { font-family: 'Bricolage Grotesque', sans-serif; }

        /* Animaciones custom — no tienen equivalente en Tailwind */
        .progress-bar {
            background: linear-gradient(90deg, #25a18e 0%, #00a5cf 50%, #ff3b30 100%);
            background-size: 200% 100%;
            animation: shimmer 3s ease infinite;
        }
        @keyframes shimmer {
            0%, 100% { background-position: 0% 50%; }
            50%       { background-position: 100% 50%; }
        }

        .fade-in { animation: fadeIn 0.5s ease both; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-in-1 { animation-delay: 0.05s; }
        .fade-in-2 { animation-delay: 0.15s; }
        .fade-in-3 { animation-delay: 0.25s; }
        .fade-in-4 { animation-delay: 0.35s; }
        .fade-in-5 { animation-delay: 0.45s; }

    </style>
</head>

<body class="text-[#004e64] min-h-screen">

    

    <!-- MAIN -->
    <main class="max-w-6xl mx-auto px-6 py-10">

        <!-- Saludo -->
        <div class="mb-8 fade-in fade-in-1">
            <h1 class="text-3xl font-bold text-[#004e64] mb-1">
                ¡Hola, <?php echo isset($usuario['nombre']) ? htmlspecialchars($usuario['nombre']) : 'María'; ?>! 👋
            </h1>
            <p class="text-slate-500 text-sm">Este es tu espacio personal. Aquí puedes ver el progreso de tu RESET.</p>
        </div>

        <!-- Tarjeta proceso principal -->
        <div class="bg-white rounded-2xl border border-slate-100 p-7 mb-6 fade-in fade-in-2 card-hover">
            <div class="flex items-start justify-between mb-1">
                <span class="text-xs font-medium text-slate-400 uppercase tracking-widest">Tu proceso RESET</span>
                <span class="badge-proceso text-xs font-semibold px-3 py-1 rounded-full">En proceso</span>
            </div>

            <h2 class="text-2xl font-bold text-[#004e64] mt-2 mb-3">
                <?php echo isset($reset['titulo']) ? htmlspecialchars($reset['titulo']) : 'Terminar carrera de Diseño Gráfico'; ?>
            </h2>

            <div class="flex items-center gap-5 text-sm text-slate-500 mb-5">
                <span class="flex items-center gap-1.5">
                    <span>📚</span>
                    <span><?php echo isset($reset['categoria']) ? htmlspecialchars($reset['categoria']) : 'Estudios'; ?></span>
                </span>
                <span class="flex items-center gap-1.5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    Iniciado: <?php echo isset($reset['fecha']) ? htmlspecialchars($reset['fecha']) : '20 Enero 2024'; ?>
                </span>
            </div>

            <!-- Barra de progreso -->
            <div class="mb-1 flex items-center justify-between">
                <span class="text-sm font-medium text-[#004e64]">Progreso</span>
                <span class="text-sm font-bold text-[#25a18e]">45%</span>
            </div>
            <div class="w-full bg-slate-100 rounded-full h-3 mb-6 overflow-hidden">
                <div class="progress-bar h-3 rounded-full" style="width: 45%"></div>
            </div>

            <!-- Botones -->
            <div class="flex items-center gap-3 flex-wrap">
                <button class="btn-primary flex items-center gap-2 text-white text-sm font-semibold px-5 py-2.5 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Actualizar mi historia
                </button>
                <button class="flex items-center gap-2 text-sm font-medium text-[#004e64] border border-slate-200 bg-white px-5 py-2.5 rounded-xl hover:bg-slate-50 transition-colors relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Mensajes
                    <span class="w-5 h-5 bg-[#ff3b30] text-white text-xs font-bold rounded-full flex items-center justify-center">3</span>
                </button>
            </div>
        </div>

        <!-- Tarjetas inferiores -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-6">

            <!-- Tu voluntario -->
            <div class="bg-white rounded-2xl border border-slate-100 p-6 card-hover fade-in fade-in-3">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-red-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#ff3b30]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-[#004e64]">Tu voluntario</span>
                </div>
                <p class="font-bold text-lg text-[#004e64] mb-0.5">
                    <?php echo isset($voluntario['nombre']) ? htmlspecialchars($voluntario['nombre']) : 'Carlos Mentor'; ?>
                </p>
                <p class="text-sm text-slate-400 mb-4">Mentor asignado</p>
                <a href="#" class="text-sm font-semibold text-[#25a18e] hover:underline flex items-center gap-1">
                    Ver perfil
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Próxima cita -->
            <div class="bg-white rounded-2xl border border-slate-100 p-6 card-hover fade-in fade-in-4">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-teal-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#25a18e]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                        </svg>
                    </div>
                    <span class="font-semibold text-[#004e64]">Próxima cita</span>
                </div>
                <p class="font-bold text-lg text-[#004e64] mb-0.5">5 Feb 2024, 18:00</p>
                <p class="text-sm text-slate-400 mb-4">Sesión de seguimiento</p>
                <a href="#" class="text-sm font-semibold text-[#25a18e] hover:underline flex items-center gap-1">
                    Ver calendario
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>

            <!-- Estado actual -->
            <div class="bg-white rounded-2xl border border-slate-100 p-6 card-hover fade-in fade-in-5">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-[#7ae582]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <span class="font-semibold text-[#004e64]">Estado actual</span>
                </div>
                <div class="flex items-center gap-2 mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#25a18e]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-bold text-lg text-[#004e64]">Todo en orden</span>
                </div>
                <p class="text-sm text-slate-400">Tu proceso avanza correctamente</p>
            </div>
        </div>

        <!-- Frase inspiracional -->
        <div class="quote-card rounded-2xl px-8 py-6 fade-in fade-in-5">
            <p class="text-center text-[#004e64] italic text-base font-medium">
                "Cada día es una nueva oportunidad para seguir avanzando."
            </p>
            <p class="text-center text-sm text-[#25a18e] font-semibold mt-2">— Equipo RESET </p>
        </div>

    </main>

</body>
</html>