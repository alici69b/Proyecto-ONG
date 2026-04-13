<?php
// Asegúrate de que la ruta al controlador sea correcta según tu estructura
include_once "../../controlador/AdminControllers/UserController.php";

// Valores por defecto para evitar errores si las variables no vienen del controlador
$buscar = $buscar ?? '';
$usuarios = $usuarios ?? [];
$total_paginas = $total_paginas ?? 1;
$pagina_actual = $pagina_actual ?? 1;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../../../public/img/Logo_RESET.svg">
    <title>Usuarios - RESET</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Bricolage Grotesque', sans-serif;
            background-color: #f4f9fa;
        }
        /* Scroll suave y ocultar barra si es necesario */
        .no-scrollbar::-webkit-scrollbar { display: none; }
    </style>
</head>

<body class="text-[#004e64] min-h-screen">

    <aside id="sidebar" class="fixed left-0 top-0 z-50 h-screen w-64 bg-[#004e64] text-blue-100 p-6 flex flex-col gap-8 transition-transform duration-300 transform -translate-x-full md:translate-x-0">
        
        <button onclick="toggleSidebar()" class="md:hidden absolute top-5 right-5 text-white/50 hover:text-white">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="flex items-center gap-3 mt-10 px-2">
            <div>
                <p class="font-bold text-white text-sm">Panel Admin</p>
                <p class="text-[10px] text-[#9fffcb] uppercase tracking-widest font-bold">RESET ONG</p>
            </div>
        </div>

        <nav class="flex flex-col gap-2">
            <a href="dashboard.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">Vista general</a>
            <a href="gestionarreset.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">Gestionar Resets</a>
            <a href="gestionusuarios.php" class="bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] text-[#004e64] flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg text-sm font-extrabold">Usuarios</a>
            <a href="gestionarhistorias.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">Historias</a>
        </nav>

        <div class="mt-auto pt-6 border-t border-white/10">
            <a href="../auth/Login.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/20 text-red-300 transition-all text-sm font-bold">Salir</a>
        </div>
    </aside>

    <button onclick="toggleSidebar()" class="md:hidden fixed top-4 left-4 z-[60] bg-[#004e64] text-white p-2 rounded-lg shadow-lg">
        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>
    </button>

    <main class="md:ml-64 p-6 md:p-10 w-full min-h-screen">
        
        <header class="flex flex-col xl:flex-row justify-between items-start xl:items-center mb-10 gap-6 w-full">
            <div class="w-full">
                <h1 class="text-4xl font-black text-[#005f73] tracking-tight">Gestión de Usuarios</h1>
                <p class="text-slate-500 font-medium">Control total de cuentas y permisos del sistema</p>
            </div>

            <form method="GET" class="relative w-full xl:w-1/3">
                <input type="text" name="search" value="<?php echo htmlspecialchars($buscar); ?>"
                    placeholder="Buscar por nombre o email..."
                    class="w-full pl-12 pr-4 py-3.5 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-[#25a18e] focus:border-transparent outline-none transition-all shadow-sm text-slate-700">
                <span class="absolute left-4 top-4 opacity-40">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8" /><path d="m21 21-4.3-4.3" /></svg>
                </span>
            </form>
        </header>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-blue-900/5 border border-slate-100 overflow-hidden w-full">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-slate-50/80 text-slate-400 text-[11px] font-bold uppercase tracking-[0.2em]">
                        <tr>
                            <th class="px-10 py-6">Usuario</th>
                            <th class="px-10 py-6">Email</th>
                            <th class="px-10 py-6 text-center">Fecha Registro</th>
                            <th class="px-10 py-6 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <?php if (empty($usuarios)): ?>
                            <tr>
                                <td colspan="4" class="px-10 py-20 text-center text-slate-400 font-medium italic">No se encontraron resultados en la base de datos.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($usuarios as $u): ?>
                                <tr class="hover:bg-slate-50/50 transition-all group">
                                    <td class="px-10 py-5">
                                        <div class="flex items-center gap-5">
                                            <div class="flex-shrink-0 w-12 h-12 rounded-2xl bg-gradient-to-br from-red-400 to-red-600 text-white flex items-center justify-center font-bold text-sm shadow-lg shadow-red-100">
                                                <?php echo $u['iniciales']; ?>
                                            </div>
                                            <div>
                                                <p class="font-extrabold text-slate-700 text-base leading-tight">
                                                    <?php echo htmlspecialchars($u['nombre'] . " " . ($u['apellidos'] ?? '')); ?>
                                                </p>
                                                <p class="text-[11px] text-slate-400 font-bold uppercase tracking-tighter mt-1">ID: #<?php echo $u['id_usuario']; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-10 py-5 text-slate-600 font-medium italic opacity-90"><?php echo htmlspecialchars($u['email']); ?></td>
                                    <td class="px-10 py-5 text-center">
                                        <span class="bg-slate-100 text-slate-500 px-4 py-1.5 rounded-xl text-xs font-bold">
                                            <?php echo date('d M, Y', strtotime($u['fecha_registro'])); ?>
                                        </span>
                                    </td>
                                    <td class="px-10 py-5 text-center">
                                        <div class="flex justify-center gap-3">
                                            <button onclick="abrirModalEditar(<?php echo $u['id_usuario']; ?>, '<?php echo addslashes($u['nombre']); ?>', '<?php echo addslashes($u['apellidos'] ?? ''); ?>', '<?php echo addslashes($u['email']); ?>', <?php echo (int)($u['id_rol'] ?? 1); ?>)"
                                                class="p-3 bg-blue-50 text-blue-500 hover:bg-blue-600 hover:text-white rounded-2xl transition-all shadow-sm">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" /><path d="M18.5 2.5a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4 9.5-9.5z" /></svg>
                                            </button>
                                            <button onclick="abrirModal(<?php echo $u['id_usuario']; ?>)"
                                                class="p-3 bg-red-50 text-red-400 hover:bg-red-500 hover:text-white rounded-2xl transition-all shadow-sm">
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6" /><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" /></svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="p-8 bg-slate-50/30 flex flex-col md:flex-row justify-between items-center border-t border-slate-100 gap-4">
                <p class="text-xs text-slate-400 font-extrabold uppercase tracking-widest">Mostrando página <?php echo $pagina_actual; ?> de <?php echo $total_paginas; ?></p>
                <div class="flex gap-2">
                    <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                        <a href="?p=<?php echo $i; ?>&search=<?php echo urlencode($buscar); ?>"
                            class="w-11 h-11 flex items-center justify-center rounded-2xl font-black text-sm transition-all <?php echo ($i == $pagina_actual) ? 'bg-[#004e64] text-white shadow-xl shadow-blue-900/20' : 'bg-white border border-slate-200 text-slate-400 hover:border-[#00a5cf] hover:text-[#004e64]'; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </main>

    <div id="modal-editar" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4">
        <div class="bg-white p-8 md:p-10 rounded-[3rem] shadow-2xl max-w-xl w-full border border-slate-100">
            <h3 class="text-3xl font-black text-slate-800 mb-8">Editar Perfil</h3>
            <form method="POST" class="flex flex-col gap-5">
                <input type="hidden" name="id_usuario" id="edit-id">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Nombre</label>
                        <input type="text" name="nombre" id="edit-nombre" required class="px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none font-bold text-slate-700">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Apellidos</label>
                        <input type="text" name="apellidos" id="edit-apellidos" class="px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none font-bold text-slate-700">
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Correo Electrónico</label>
                    <input type="email" name="email" id="edit-email" required class="px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none font-bold text-slate-700">
                </div>
                <div class="flex flex-col gap-2">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Rol del Usuario</label>
                    <select name="id_rol" id="edit-rol" class="px-5 py-4 rounded-2xl border border-slate-200 bg-slate-50 outline-none font-bold text-slate-700">
                        <option value="1">Usuario Estándar</option>
                        <option value="3">Administrador</option>
                    </select>
                </div>
                <div class="flex gap-4 mt-6">
                    <button type="button" onclick="cerrarModalEditar()" class="flex-1 py-4 bg-slate-100 text-slate-500 font-black rounded-2xl hover:bg-slate-200 transition-all">Cancelar</button>
                    <button type="submit" class="flex-1 py-4 bg-[#004e64] text-white font-black rounded-2xl shadow-lg hover:bg-black transition-all">Guardar Cambios</button>
                </div>
            </form>
        </div>
    </div>

    <div id="modal-confirmar" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4">
        <div class="bg-white p-10 rounded-[3rem] shadow-2xl max-w-sm w-full text-center border border-slate-100">
            <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
            </div>
            <h3 class="text-2xl font-black text-slate-800 mb-2">¿Confirmar borrado?</h3>
            <p class="text-slate-500 text-sm mb-8 leading-relaxed">Esta acción eliminará la cuenta permanentemente. No se puede deshacer.</p>
            <div class="flex gap-3">
                <button onclick="cerrarModal()" class="flex-1 py-4 bg-slate-100 text-slate-500 font-black rounded-2xl hover:bg-slate-200">No, cancelar</button>
                <a id="btn-confirmar-eliminar" href="#" class="flex-1 py-4 bg-red-500 text-white font-black rounded-2xl shadow-xl hover:bg-red-700 transition-all">Sí, borrar</a>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }

        function abrirModalEditar(id, nombre, apellidos, email, rol) {
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-nombre').value = nombre;
            document.getElementById('edit-apellidos').value = apellidos;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-rol').value = rol;
            document.getElementById('modal-editar').classList.remove('hidden');
        }

        function cerrarModalEditar() {
            document.getElementById('modal-editar').classList.add('hidden');
        }

        function abrirModal(idUsuario) {
            document.getElementById('btn-confirmar-eliminar').href = 'gestionusuarios.php?action=delete&id=' + idUsuario;
            document.getElementById('modal-confirmar').classList.remove('hidden');
        }

        function cerrarModal() {
            document.getElementById('modal-confirmar').classList.add('hidden');
        }

        // Clic fuera del modal para cerrar
        window.onclick = function(event) {
            if (event.target == document.getElementById('modal-editar')) cerrarModalEditar();
            if (event.target == document.getElementById('modal-confirmar')) cerrarModal();
        }
    </script>
</body>
</html>