<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar RESET</title>
    <!-- Link css -->
    <link rel="stylesheet" href="../public/styles.css">

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  
      <!-- Fuentes de google fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Domine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bricolage Grotesque">


    <style>
      body {
        font-family: 'Bricolage Grotesque';
        }
        html {
            scroll-behavior: smooth; 
        }
    </style>

   <!--font-family: font-serif
    colores
        -azul oscuro: #004e64
        -azul: #00a5cf
        - verdeagua  #9fffcb
        -verde : #25a18e
        -verde vivo: #7ae582
        -coral: #ff3b30
        -poner letras con el degradado del inicio: bg-linear-to-r from-[#00a5cf] to-[#9fffcb] bg-clip-text text-transparent 
        -color del  bg-[#f4f9fa]
        -color verde medio traslucido bg-[#2BB39A]

    -->

</head>
<body class="bg-[#f4f9fa]" id="inicio">
    
    <!-- Importamos el Menú de navegación -->
    <?php
    require_once "../src/components/Header.php";
    ?>

    <!-- BOTON DE IR A INICIO -->
    <div  class="scroll-smooth ">
        <a href="#inicio" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#25a18e] text-white hover:bg-[#1a7a6b] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>
    </div>
   
    <!-- Formulario -->
    <main class="pt-40">
        <div class="flex flex-col align-middle text-center items-center justify-center space-y-4">
            <div class="flex flex-row space-x-1 bg-teal-600/10 rounded-full text-teal-600 w-64 mx-auto p-1 justify-center text-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-sparkles"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2m0 -12a2 2 0 0 1 2 2a2 2 0 0 1 2 -2a2 2 0 0 1 -2 -2a2 2 0 0 1 -2 2m-7 12a6 6 0 0 1 6 -6a6 6 0 0 1 -6 -6a6 6 0 0 1 -6 6a6 6 0 0 1 6 6" /></svg>
                <div class="">
                    Tu segunda oportunidad
                </div>
            </div>
            <div class="font-['Domine'] font-semibold md:text-5xl text-4xl">
                Solicitar mi RESET
            </div>
            <div class="text-xl text-gray-500/70">
                Cuéntanos tu historia. Sin juicios, solo comprensión y ganas de ayudarte.
            </div>
        </div>
        <form action="../app/controlador/resetcontrolador.php" method="POST" class="mt-10">
            <div class="bg-white rounded-xl shadow-lg text-start justify-center flex flex-col w-200 mx-auto pb-8 px-10 pt-8 gap-7">
                <div class="flex flex-row gap-4 w-full">
                    <div class="flex flex-col flex-1 space-y-2">
                        <label for="name">Tu nombre</label>
                        <input type="text" name="name" placeholder="¿Cómo te llamas?" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">

                    </div>
                    <div class="flex flex-col flex-1 space-y-2">
                        <label for="email">Tu email</label>
                        <input type="email" name="email" placeholder="Para contactarte" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <label for="categoria" class="">¿Qué quieres reiniciar?</label>
                    <select name="categoria" class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                        <option>Selecciona una categoría</option>
                        <option value="estudio">Estudios</option>
                        <option value="salud">Salud</option>
                        <option value="creatividad">Creatividad</option>
                        <option value="proyecto">Proyecto</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <label for="descripcion-problema">¿Qué abandonaste?</label>
                    <input type="text" name="descripcion-problema" placeholder="Cuéntanos qué proyecto, sueño o hábito dejaste atrás..." class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full h-22 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <label for="causa-abandono">¿Por qué lo dejaste?</label>
                    <input type="text" name="causa-abandono" placeholder="No hay respuestas incorrectas.A veces la vida simplemente pasa..." class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <label for="necesidades-reset">¿Qué necesitas para volver a empezar?</label>
                    <input type="text" name="necesidades-reset" placeholder="Apoyo emocional, ayuda técnica, alguien que te acompañe..." class="bg-[#f4f9fa] border border-[#e1e6e7] p-2 rounded-lg pl-3 w-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#25a18e] focus-visible:ring-offset-2 transiti duration-300 ease-in-out focus:border-[#25a18e]">
                </div>
            </div>
            <div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-telegram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" /></svg> 
                    <input type="submit" value="Enviar mi solicitud">
                </div>
                <div>
                    <div>Te responderemos en menos de 48 horas. Prometido</div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" /></svg>
                </div>
            </div>
        </form>
    </main>
    
    <!-- Importamos el footer -->
    <footer>
    <?php
    require_once "../src/components/Footer.php";
    ?>    
    </footer>
</body>
