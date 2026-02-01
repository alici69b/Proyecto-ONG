<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset-ONG</title>

    <!-- Link al css -->
    <link rel="stylesheet" href="../../public/css/style.css">

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<!--
    font-family: font-serif
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
<body class="">
  
  <div class="flex min-h-screen ">

    <!-- Parte izquierda donde sale el fondo gradiant con el logo dando vueltas -->
    <div class="hidden lg:flex lg:w-1/2 bg-linear-to-r from-[#9fffcb] to-[#00a5cf]  min-h-200   items-center justify-center text-white  ">
      <div class="max-w-md text-center">
        <div class="mb-8 flex justify-center opacity-40">
          <svg class="animate-spin [animation-duration:10s] -scale-x100 w-32 h-32 " fill="#ff3b30" height="230px" width="200px" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg"><g><path d="M44.563,250.179l237.89,41.871c0.485,0.085,0.964,0.118,1.451,0.118c4.33-0.027,7.831-3.545,7.831-7.88 c0-1.831-0.624-3.516-1.672-4.853l-39.919-61.25c24.027-10.024,64.762-23.283,112.095-23.283c24.594,0,48.118,3.69,69.918,10.972 c19.861,6.631,47.495,24.447,70.4,45.389c16.415,15.01,31.403,32.073,45.896,48.573c3.34,3.802,6.682,7.607,10.048,11.396 c1.521,1.713,3.677,2.648,5.894,2.648c0.788,0,1.581-0.116,2.357-0.361c2.961-0.928,5.101-3.508,5.468-6.588l0.116-0.991 c6.506-56.017-7.174-114.855-37.531-161.427c-32.502-49.852-84.035-85.972-145.111-101.71 c-24.353-6.275-49.973-9.456-76.149-9.456c-34.717,0-69.827,5.501-104.373,16.35c-18.876,5.971-37.136,13.429-54.376,22.198 L110.264,3.574c-1.714-2.631-4.832-3.978-7.921-3.467c-3.096,0.526-5.584,2.838-6.333,5.887L38.278,240.535 c-0.521,2.118-0.142,4.359,1.05,6.186C40.519,248.549,42.415,249.802,44.563,250.179z"></path><path d="M572.67,365.274c-1.191-1.827-3.087-3.08-5.236-3.458l-237.888-41.872c-3.094-0.54-6.212,0.8-7.942,3.419 c-1.73,2.619-1.74,6.017-0.027,8.648l40.278,61.802c-24.027,10.024-64.762,23.283-112.093,23.283 c-24.594,0-48.118-3.692-69.92-10.974c-19.864-6.632-47.498-24.449-70.4-45.389c-16.415-15.01-31.403-32.071-45.896-48.568 c-3.34-3.803-6.684-7.608-10.049-11.398c-2.065-2.323-5.301-3.219-8.265-2.282c-2.964,0.935-5.101,3.526-5.456,6.612l-0.111,0.962 c-6.508,56.021,7.172,114.855,37.532,161.42c32.5,49.855,84.034,85.977,145.109,101.712c24.358,6.275,49.982,9.456,76.16,9.456 c0.003,0,0.002,0,0.007,0c34.71,0,69.819-5.499,104.355-16.35c18.876-5.971,37.136-13.427,54.375-22.196l44.53,68.321 c1.47,2.255,3.967,3.578,6.6,3.578c0.438,0,0.88-0.036,1.321-0.109c3.096-0.526,5.583-2.838,6.335-5.887l57.734-234.541 C574.242,369.342,573.863,367.103,572.67,365.274z"></path></g></svg> </div>
          <h2 class="text-4xl font-extrabold mb-4">Aqui empieza tu segunda oportunidad</h2>
          <p class="text-lg opacity-90 leading-relaxed">No tienes que hacerlo solo/a. Únete a una comunidad que cree en las segundas oportunidades.</p>
        </div>
      </div>

    <!-- boton de volver al inicio con el logo y el nombre de la ong -->
    <div class="flex w-full flex-col justify-center px-8 md:px-16 lg:w-1/2 xl:px-24 bg-white">
      <div class="mx-auto w-full max-w-md">
        <a href="../../public/Inicio.php" class="mb-10 flex items-center text-sm text-gray-500 hover:text-gray-700"><span class="mr-2">←</span> Volver al inicio</a>
          <div class="flex items-center gap-2">
              <svg fill="#ff3b30" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 612.00 612.00" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M44.563,250.179l237.89,41.871c0.485,0.085,0.964,0.118,1.451,0.118c4.33-0.027,7.831-3.545,7.831-7.88 c0-1.831-0.624-3.516-1.672-4.853l-39.919-61.25c24.027-10.024,64.762-23.283,112.095-23.283c24.594,0,48.118,3.69,69.918,10.972 c19.861,6.631,47.495,24.447,70.4,45.389c16.415,15.01,31.403,32.073,45.896,48.573c3.34,3.802,6.682,7.607,10.048,11.396 c1.521,1.713,3.677,2.648,5.894,2.648c0.788,0,1.581-0.116,2.357-0.361c2.961-0.928,5.101-3.508,5.468-6.588l0.116-0.991 c6.506-56.017-7.174-114.855-37.531-161.427c-32.502-49.852-84.035-85.972-145.111-101.71 c-24.353-6.275-49.973-9.456-76.149-9.456c-34.717,0-69.827,5.501-104.373,16.35c-18.876,5.971-37.136,13.429-54.376,22.198 L110.264,3.574c-1.714-2.631-4.832-3.978-7.921-3.467c-3.096,0.526-5.584,2.838-6.333,5.887L38.278,240.535 c-0.521,2.118-0.142,4.359,1.05,6.186C40.519,248.549,42.415,249.802,44.563,250.179z"></path> <path d="M572.67,365.274c-1.191-1.827-3.087-3.08-5.236-3.458l-237.888-41.872c-3.094-0.54-6.212,0.8-7.942,3.419 c-1.73,2.619-1.74,6.017-0.027,8.648l40.278,61.802c-24.027,10.024-64.762,23.283-112.093,23.283 c-24.594,0-48.118-3.692-69.92-10.974c-19.864-6.632-47.498-24.449-70.4-45.389c-16.415-15.01-31.403-32.071-45.896-48.568 c-3.34-3.803-6.684-7.608-10.049-11.398c-2.065-2.323-5.301-3.219-8.265-2.282c-2.964,0.935-5.101,3.526-5.456,6.612l-0.111,0.962 c-6.508,56.021,7.172,114.855,37.532,161.42c32.5,49.855,84.034,85.977,145.109,101.712c24.358,6.275,49.982,9.456,76.16,9.456 c0.003,0,0.002,0,0.007,0c34.71,0,69.819-5.499,104.355-16.35c18.876-5.971,37.136-13.427,54.375-22.196l44.53,68.321 c1.47,2.255,3.967,3.578,6.6,3.578c0.438,0,0.88-0.036,1.321-0.109c3.096-0.526,5.583-2.838,6.335-5.887l57.734-234.541 C574.242,369.342,573.863,367.103,572.67,365.274z"></path> </g> </g> </g></svg>
              <h3 class="font-bold text-xl">RESET</h3>
          </div>

      <!-- Pequeño resumen de lo que vamos a hacer, crear la cuenta en la ong -->
      <h1 class="text-3xl font-bold text-slate-900 mb-2">Crea tu cuenta</h1>
      <p class="text-slate-500 mb-8">Únete a RESET y empieza tu camino hacia una nueva oportunidad.</p>
      
      <!-- Menu de ayuda o quiero ayudar, depede lo que escojas te mostrará algo diferente -->
      <div class="flex w-full flex-col mx-auto mb-5">
          <input type="radio" name="tipo" id="soy-usuario" class="peer/usuario hidden" checked>
          <input type="radio" name="tipo" id="soy-voluntario" class="peer/voluntario hidden">

          <div class="flex gap-2 mb-8 bg-[#004e64] p-1 rounded-xl">
              <label for="soy-usuario" class="flex-1 flex items-center justify-center gap-2 py-2.5 px-4 rounded-lg font-medium cursor-pointer transition-all
              peer-checked/usuario:bg-white peer-checked/usuario:text-blue-600 peer-checked/usuario:shadow-sm
              text-white hover:bg-[#00a5cf]">
              Necesito ayuda
              </label>

              <label for="soy-voluntario" class="flex-1 flex items-center justify-center gap-2 py-2.5 px-4 rounded-lg font-medium cursor-pointer transition-all
              peer-checked/voluntario:bg-white peer-checked/voluntario:text-indigo-600 peer-checked/voluntario:shadow-sm
              text-white  hover:bg-[#00a5cf]">
              Quiero ayudar
              </label>
          </div>

          <div class="hidden peer-checked/usuario:block animate-in fade-in duration-300">
              <label class="block text-sm font-medium text-slate-700 mb-2">¿Qué quieres <i class="text-[#00a5cf]">reiniciar</i>?</label>
              <select name="tipo_ayuda_usuario" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:outline-none focus:ring-2 focus:ring-[#00a5cf]">
                  <option value="estudios">Estudios</option>
                  <option value="proyecto">Proyecto/Emprendimiento</option>
                  <option value="personal">Personal/Bienestar</option>
                  <option value="otro">Otro</option>
              </select>
          </div>

          <div class="hidden peer-checked/voluntario:block animate-in fade-in duration-300">
              <label class="block text-sm font-medium text-slate-700 mb-2">¿Cómo puedes <i class="text-[#00a5cf]">ayudar</i>?</label>
              <select name="tipo_ayuda_voluntario" class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white focus:ring-2 focus:outline-none focus:ring-2 focus:ring-[#00a5cf] ">
              <option>Apoyo emocional</option>
              <option>Ayuda técnica</option>
              <option>Guía creativa</option>
              </select>
          </div>
      </div>


      <!-- Formulario con los campos: nombre, email, contraseña y el boton -->
      <form class="space-y-5" method="post" action="../controlador/RegisterController.php">
        <div>
          <label for="nombre"class="block text-sm font-medium text-slate-700 mb-2">Tu nombre</label>
          <input name="nombre" type="text" placeholder="¿Cómo te llamas?" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-[#00a5cf] transition-all" >
        </div>

        <ul>
          <?php if(!empty($_SESSION['erroresnombre'])): ?>
            <?php foreach($_SESSION['erroresnombre'] as $erroresnombre): ?>
              <li class="text-[#ff3b30] font-bold text-sm"><?php echo $erroresnombre; ?></li>
              <?php endforeach ?>
            <?php endif ?>
          
        </ul>

        <div>
          <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email</label>
          <input name="email" type="email" placeholder="tu@email.com" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-[#00a5cf] transition-all" >
        </div>

        <ul>
          <?php if(!empty($_SESSION['erroresemail'])): ?>
            <?php foreach($_SESSION['erroresemail'] as $erroresemail): ?>
              <li class="text-[#ff3b30] font-bold text-sm"><?php echo $erroresemail; ?></li>
              <?php endforeach ?>
            <?php endif ?>
          
        </ul>

        <div>
          <label for="contrasena" class="block text-sm font-medium text-slate-700 mb-2">Contraseña</label>
          <input name="contrasena" type="password" placeholder="Mínimo 8 caracteres" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-[#00a5cf] transition-all" >
        </div>

        <ul>
          <?php if(!empty($_SESSION['errorcontrasena'])): ?>
            <?php foreach($_SESSION['errorcontrasena'] as $errorescontrasena): ?>
              <li class="text-[#ff3b30] font-bold text-sm"><?php echo $errorescontrasena; ?></li>
              <?php endforeach ?>
            <?php endif ?>
          
        </ul>

        <button name="crear_cuenta" id="crear_cuenta" type="submit" class="w-full bg-[#00a5cf] hover:bg-black text-white font-semibold py-4 rounded-xl shadow-lg  transition-all flex items-center justify-center gap-2 ">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" y1="8" x2="19" y2="14"/><line x1="16" y1="11" x2="22" y2="11"/></svg>
          Crear mi cuenta
        </button>
      </form>

        <!-- si tienes una cuenta, inicia sesion -->
        <p class="mt-10 text-center text-sm text-gray-600">
          ¿Ya tienes cuenta? <a href="../vista/Login.php" class="font-bold text-[#00a5cf] hover:underline">Inicia Sesión</a>
        </p>
    
    </div>
  </div>



</body>
</html>