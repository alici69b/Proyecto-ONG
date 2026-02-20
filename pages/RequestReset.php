<!DOCTYPE html>
<html lang="es">
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

    -->

</head>
<body class="font-serif bg-[#f5f7fc]" id="inicio">
    
    <!-- Importamos el Menú de navegación -->
    <?php
    require_once "../src/components/Header.php";
    ?>

    <!-- BOTON DE IR A INICIO -->
    <div  class="scroll-smooth ">

        <a href="#inicio" class="fixed bottom-10 right-20 z-50 p-3 rounded-full bg-[#8CBEB2] text-white hover:bg-[#F2EBBF] transition shadow-lg flex items-center justify-center" aria-label="Volver al inicio">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg></a>

    </div>
   
    <!-- Contenido Principal Impacto -->
    <main>
        <div>
            <div>
                Tu segunda oportunidad
            </div>
            <div>
                Solicitar mi RESET
            </div>
            <div>
                Cuéntanos tu historia. Sin juicios, solo comprensión y ganas de ayudarte.
            </div>
        </div>
        <form>
            <div>
                <div>
                    <div>
                        <label for="name">Tu nombre</label>
                        <input type="text" name="name" placeholder="¿Cómo te llamas?">
                    </div>
                    <div>
                        <label for="email">Tu email</label>
                        <input type="email" name="email" placeholder="Para contactarte">
                    </div>
                </div>
                <div>
                    <label for="categoria">¿Qué quieres reiniciar?</label>
                    <select name="categoria">
                        <option value="estudio">Estudios</option>
                        <option value="salud">Salud</option>
                        <option value="creatividad">Creatividad</option>
                        <option value="proyecto">Proyecto</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
                <div>
                    <label for="descripcion-problema">¿Qué abandonaste?</label>
                    <input type="text" name="descripcion-problema" placeholder="Cuéntanos qué proyecto, sueño o hábito dejaste atrás...">
                </div>
                <div>
                    <label for="causa-abandono">¿Por qué lo dejaste?</label>
                    <input type="text" name="causa-abandono" placeholder="No hay respuestas incorrectas.A veces la vida simplemente pasa..."
                </div>
                <div>
                    <label for="necesidades-reset">¿Qué necesitas para volver a empezar?</label>
                    <input type="text" name="necesidades-reset" placeholder="Apoyo emocional, ayuda técnica, alguien que te acompañe...">
                </div>
            </div>
            <div>
                <input type="submit" value="Enviar mi solicitud">
                <div>Te responderemos en menos de 48 horas. Prometido</div>
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
