<?php
// Asegúrate de que el controlador tenga la función obtenerIniciales() definida ARRIBA del todo
include_once "../../controlador/AdminControllers/UserController.php";

// Definimos valores por defecto para evitar Warnings si el controlador falla o la búsqueda está vacía
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
    <title>Impactos - RESET</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@300;500;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Bricolage Grotesque', sans-serif;
            background-color: #f4f9fa;
        }
    </style>
</head>

<body class="text-[#004e64] min-h-screen flex flex-col">

    <div class="flex flex-1">
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
                <a href="dashboard.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70"><svg fill="currentColor" width="20" height="20" viewBox="0 0 36 36">
                            <path d="M32 5H4c-1.1 0-2 .9-2 2v22c0 1.1.9 2 2 2h28c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zM4 29V7h28v22H4z" />
                            <path d="M15.6 15.2l-6 8.7-4-3.5 1-1.2 2.7 2.4 6.3-9.2 6.7 10 6.8-8.9 1.3 1-8.1 10.7z" />
                        </svg></span>
                    Vista general
                </a>
                <a href="gestionarreset.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70 text-white"><svg fill="currentColor" width="20" height="20" viewBox="0 0 1920 1920">
                            <path d="M276.9 440.6v565.7c0 422.4 374.2 625.5 674.7 788.7l8 4.3 8.1-4.3c300.5-163.2 674.7-366.3 674.7-788.7V440.6l-682.8-321.7-682.8 321.7z" />
                        </svg></span>
                    Gestionar Resets
                </a>
                <a href="gestionusuarios.php" class="bg-gradient-to-r from-[#00a5cf] to-[#9fffcb] text-[#004e64] flex items-center gap-3 px-4 py-3 rounded-xl shadow-lg text-sm font-extrabold">
                    <span><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                        </svg></span>
                    Usuarios
                </a>
                <a href="gestionarhistorias.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition-all text-sm group">
                    <span class="opacity-70"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg></span>
                    Historias
                </a>

            </nav>

            <div class="mt-auto pt-6 border-t border-white/10">
                <a href="../auth/Login.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-red-500/20 text-red-300 transition-all text-sm font-bold">
                    <svg fill="currentColor" width="20" height="20" viewBox="0 0 24 24">
                        <path d="M16 17v-4H9v-2h7V7l5 5-5 5M14 2a2 2 0 012 2v2h-2V4H5v16h9v-2h2v2a2 2 0 01-2 2H5a2 2 0 01-2-2V4a2 2 0 012-2h9z" />
                    </svg>
                    Salir
                </a>
            </div>
        </aside>

        <main class="flex-1 md:ml-64   p-8  md:p-12  md:max-w-6xl lg:max-w-full w-full">
            <header class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-3xl font-black text-[#005f73]">Gestion de Usuarios</h1>
                    <p class="text-slate-500">Supervisión de todos los usuarios</p>
                </div>

                <form method="GET" class="relative w-full md:w-96">
                    <input type="text" name="search" value="<?php echo htmlspecialchars($buscar); ?>"
                        placeholder="Buscar por nombre o email..."
                        class="w-full pl-10 pr-4 py-2.5 rounded-2xl border border-gray-200 bg-white focus:ring-2 focus:ring-[#25a18e] focus:border-transparent outline-none transition-all shadow-sm">
                    <span class="absolute left-3 top-3 opacity-40">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                    </span>
                </form>
            </header>

            <div class="bg-white rounded-[2rem] shadow-xl shadow-blue-900/5 border border-slate-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[600px]">
                        <thead class="bg-slate-50/50 text-slate-400 text-[11px] font-bold uppercase tracking-[0.15em]">
                            <tr>
                                <th class="px-8 py-5">Usuario</th>
                                <th class="px-8 py-5">Email</th>
                                <th class="px-8 py-5 text-center">Registro</th>
                                <th class="px-8 py-5 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <div class="divide-y divide-slate-50 text-sm">
                            <?php if (empty($usuarios)): ?>
                                <tr>
                                    <td colspan="4" class="px-8 py-10 text-center text-slate-400">No se encontraron usuarios.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($usuarios as $u): ?>
                                    <tr class="hover:bg-slate-50/80 transition-all group">
                                        <td class="px-8 py-4 flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-red-300 to-red-700 text-white flex items-center justify-center font-bold text-xs shadow-md shadow-indigo-200">
                                                <?php echo $u['iniciales']; ?>
                                            </div>
                                            <div>
                                                <p class="font-bold text-slate-700 leading-tight"><?php echo htmlspecialchars($u['nombre'] . " " . $u['apellidos']); ?></p>
                                                <p class="text-[10px] text-slate-400 font-medium">ID: #<?php echo $u['id_usuario']; ?></p>
                                            </div>
                                        </td>
                                        <td class="px-8 py-4 text-slate-600 font-medium italic opacity-80"><?php echo htmlspecialchars($u['email']); ?></td>
                                        <td class="px-8 py-4 text-center text-slate-500 font-medium">
                                            <span class="bg-slate-100 px-3 py-1 rounded-lg text-[12px]">
                                                <?php echo date('d M, Y', strtotime($u['fecha_registro'])); ?>
                                            </span>
                                        </td>
                                        <td class="px-8 py-4">
                                            <div class="flex justify-center gap-2">

                                                <button onclick="abrirModalEditar(
                                                            <?php echo $u['id_usuario']; ?>,
                                                            '<?php echo htmlspecialchars($u['nombre'],    ENT_QUOTES); ?>',
                                                            '<?php echo htmlspecialchars($u['apellidos'] ?? '', ENT_QUOTES); ?>',
                                                            '<?php echo htmlspecialchars($u['email'],     ENT_QUOTES); ?>',
                                                            <?php echo (int)($u['id_rol'] ?? 1); ?>
                                                        )"
                                                    title="Editar usuario"
                                                    class="p-2 hover:bg-blue-50 text-blue-500 rounded-xl transition-all active:scale-90">
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                        <path d="M18.5 2.5a2.121 2.121 0 1 1 3 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                    </svg>
                                                </button>


                                                    <button
                                                        onclick="abrirModal(<?php echo $u['id_usuario']; ?>)"
                                                        title="Eliminar usuario"
                                                        class="p-2 hover:bg-red-50 text-red-400 hover:text-red-600 rounded-xl transition-all active:scale-90">
                                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                            <polyline points="3 6 5 6 21 6" />
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                        </svg>
                                                    </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
</body>
</table>
</div>

<div class="p-6 bg-slate-50/50 flex justify-between items-center border-t border-slate-100">
    <p class="text-xs text-slate-400 font-bold ml-2">Página <?php echo $pagina_actual; ?> de <?php echo $total_paginas; ?></p>
    <div class="flex gap-1.5">
        <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
            <a href="?p=<?php echo $i; ?>&search=<?php echo urlencode($buscar); ?>"
                class="w-9 h-9 flex items-center justify-center rounded-xl font-bold text-[13px] transition-all <?php echo ($i == $pagina_actual) ? 'bg-[#004e64] text-white shadow-lg shadow-blue-900/20' : 'bg-white  hover:bg-white hover:text-[#004e64] border border-slate-200'; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>
    </div>
</div>
</div>
</div>

</main>

<!-- Modal para editar los usuarios sin necesidad de crear nuevos -->
<div
    id="modal-editar"
    class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm">
    <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl max-w-lg w-full mx-4 border border-slate-100">

        <h3 class="text-2xl font-black text-slate-800 mb-6">Editar usuario</h3>

        <!-- Enviamos por post los datos y el controlador detecta el POST y hace el UPDATE.-->
        <form method="POST" class="flex flex-col gap-4">

            <!-- id del usuaio que esta hidden -->
            <input type="hidden" name="id_usuario" id="edit-id">

            <!-- Nombre y apellidos en la misma fila -->
            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-widest">Nombre</label>
                    <input type="text" name="nombre" id="edit-nombre" required
                        class="px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none text-slate-700 font-medium">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-xs font-bold text-slate-500 uppercase tracking-widest">Apellidos</label>
                    <input type="text" name="apellidos" id="edit-apellidos"
                        class="px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none text-slate-700 font-medium">
                </div>
            </div>

            <!-- Email -->
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-slate-500 uppercase tracking-widest">Email</label>
                <input type="email" name="email" id="edit-email" required
                    class="px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none text-slate-700 font-medium">
            </div>

            <!-- Rol -->
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-slate-500 uppercase tracking-widest">Rol</label>
                <select name="id_rol" id="edit-rol"
                    class="px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none text-slate-700 font-medium">
                    <option value="1">Usuario</option>
                    <option value="3">Administrador</option>
                </select>
            </div>

            <!-- Nueva contraseña (opcional) -->
            <div class="flex flex-col gap-1.5">
                <label class="text-xs font-bold text-slate-500 uppercase tracking-widest">
                    Nueva contraseña
                    <span class="normal-case font-normal text-slate-400 ml-1">(dejar vacío para no cambiarla)</span>
                </label>
                <input type="password" name="password_nuevo" placeholder="••••••••"
                    class="px-4 py-3 rounded-2xl border border-slate-200 bg-slate-50 focus:ring-2 focus:ring-[#25a18e] outline-none text-slate-700 font-medium">
            </div>

            <!-- Botones -->
            <div class="flex gap-3 pt-2">
                <button type="button" onclick="cerrarModalEditar()"
                    class="flex-1 py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-2xl transition-all">
                    Cancelar
                </button>
                <button type="submit"
                    class="flex-1 py-3 px-4  bg-red-500 hover:bg-red-600 text-white font-bold rounded-2xl shadow-lg shadow-blue-900/20 transition-all">
                    Guardar cambios
                </button>
            </div>

        </form>
    </div>
</div>
</div>


<!-- modal para confirmar el borrado de los usuarios y se vea mucho mejpr qe con el confirm de js -->
<div
    id="modal-confirmar"
    class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-black/50 backdrop-blur-sm">
    <div class="bg-white p-8 rounded-[2.5rem] shadow-2xl max-w-sm w-full mx-4 text-center border border-slate-100">

        <!-- Icono de advertencia -->
        <div class="w-20 h-20 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg width="64px" height="64px" viewBox="-5.76 -5.76 35.52 35.52" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="">
                <g id="SVGRepo_bgCarrier" stroke-width="0">
                    <rect x="-5.76" y="-5.76" width="35.52" height="35.52" rx="17.76" fill="#ffe0e0" strokewidth="0"></rect>
                </g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.048"></g>
                <g id="SVGRepo_iconCarrier">
                    <circle cx="12" cy="17" r="1" fill="#ff0000"></circle>
                    <path d="M12 10L12 14" stroke="#ff0000" stroke-width="1.968" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M3.44722 18.1056L10.2111 4.57771C10.9482 3.10361 13.0518 3.10362 13.7889 4.57771L20.5528 18.1056C21.2177 19.4354 20.2507 21 18.7639 21H5.23607C3.7493 21 2.78231 19.4354 3.44722 18.1056Z" stroke="#ff0000" stroke-width="1.968" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </div>

        <h3 class="text-2xl font-black text-slate-800 mb-2">¿Estás seguro?</h3>
        <p class="text-slate-500 mb-8">
            Esta acción eliminará al usuario permanentemente y no se puede deshacer.
        </p>

        <div class="flex gap-3">
            <!-- cierra el modal sin hacer nada -->
            <button
                onclick="cerrarModal()"
                class="flex-1 py-3 px-4 bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold rounded-2xl transition-all">
                Cancelar
            </button>

            <!-- Al hacer clic navega a ?action=delete&id el controlador borra el usuario.-->
            <a
                id="btn-confirmar-eliminar"
                href="#"
                class="flex-1 py-3 px-4 bg-red-500 hover:bg-red-600 text-white font-bold rounded-2xl shadow-lg shadow-red-200 transition-all">
                Eliminar
            </a>
        </div>
    </div>
</div>

<!-- Script para la modal de eliminar el usuario -->
<script>
    //modal para EDITAR 
    function abrirModalEditar(id, nombre, apellidos, email, rol) {
        // Metemos los datos del usuario en cada campo del formulario
        document.getElementById('edit-id').value = id;
        document.getElementById('edit-nombre').value = nombre;
        document.getElementById('edit-apellidos').value = apellidos;
        document.getElementById('edit-email').value = email;
        document.getElementById('edit-rol').value = rol;

        // Mostramos el modal
        document.getElementById('modal-editar').classList.remove('hidden');
    }

    function cerrarModalEditar() {
        document.getElementById('modal-editar').classList.add('hidden');
    }

    // Clic en el fondo oscuro → cierra modal editar
    document.getElementById('modal-editar').addEventListener('click', function(e) {
        if (e.target === this) cerrarModalEditar();
    });

    // modal  para ELIMINAR
    //    - Recibe el ID del usuario del botón pulsado.
    //    - Pone ese ID en el href del botón "Confirmar".
    //    - Muestra el modal quitando la clase CSS "hidden".
    function abrirModal(idUsuario) {
        // Rellenamos el enlace de confirmación con el ID del usuario a borrar
        document.getElementById('btn-confirmar-eliminar').href =
            'gestionusuarios.php?action=delete&id=' + idUsuario;

        // Mostramos el modal eliminando la clase "hidden"
        document.getElementById('modal-confirmar').classList.remove('hidden');
    }
    // Vuelve a añadir "hidden" al modal para ocultarlo.
    function cerrarModal() {
        // Ocultamos el modal añadiendo de nuevo la clase "hidden"
        document.getElementById('modal-confirmar').classList.add('hidden');
    }

    // Cierra el modal al hacer clic en el fondo oscuro (fuera del recuadro blanco)
    document.getElementById('modal-confirmar').addEventListener('click', function(e) {
        if (e.target === this) cerrarModal();
    });
    //cierra la modal si toca fuera del recuadro 
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
    }
</script>
</body>

</html>