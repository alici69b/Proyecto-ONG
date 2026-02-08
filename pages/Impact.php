<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historias</title>

     
    <!-- Link al css -->
    <link rel="stylesheet" href="../public/css/style.css">

    <!-- Link del Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!--font-family: font-serif
    color: coral principal #ff3b30
    color regundario #ffe7e5
    color: beige #f6f6f2
    color footer gray-900
    color numeros conectados con la base de datos #1441a5
    -->

</head>
<body class="font-sans bg-[#fAfAfA]">
    <!-- Importamos el Menú de navegación -->
    <?php
    require_once "../src/components/Header.php";
    ?>
    <!-- Contenido Principal Impacto -->
    <main>
        <div>
            <!-- Título -->
            <div>
                <p>
                    Nuestro impacto
                </p>
                <h1>
                    Cada número es una historia real
                </h1>
                <p>
                    Detrás de cada estadística hay una persona que decidió no rendirse
                </p>
            </div>
            <!-- Estadisticas -->
            <div>
                <!-- Resets Iniciados -->
                <div>
                    <div></div>
                    <!-- Cantidad -->
                    <div>127</div>
                    <h2>Resets Iniciados</h2>
                    <p>Proyectos y sueños retomados</p>
                </div>
                <!-- Resets Completados -->
                <div>
                    <div></div>
                    <!-- Cantidad -->
                    <div>89</div>
                    <h2>Resets Completados</h2>
                    <p>Historias de éxito</p>
                </div>
                <!-- Voluntarios Activos -->
                <div>
                    <div></div>
                    <!-- Cantidad -->
                    <div>34</div>
                    <h2>Voluntarios Activos</h2>
                    <p>Personas que ayudan</p>
                </div>
                <!-- Tasa de Satisfacción -->
                <div>
                    <div></div>
                    <!-- Porcentaje -->
                    <div>95%</div>
                    <h2>Tasa de Satisfacción</h2>
                    <p>De nuestros usuarios</p>
                </div>
            </div>
            <!-- Card Categorías y Evolución mensual -->
            <div>
                <!-- Categorías -->
                <div>
                    <h2>Por categoría</h2>
                    <div>
                        <!-- Categoría 1 -->
                        <div>
                            <!-- Nombre Categoría -->
                            <div>
                                <div>Estudios</div>
                                <!-- Número de casos -->
                                <span></span>
                            </div>
                            <!-- Medidor Categoría -->
                            <div>
                                
                            </div>
                        </div>
                        <!-- Categoría 2 -->
                        <div>
                            <!-- Nombre Categoría -->
                            <div>
                                <div>Proyectos</div>
                                <!-- Número de casos -->
                                <span></span>
                            </div>
                            <!-- Medidor Categoría -->
                            <div>
                                
                            </div>
                        </div>
                        <!-- Categoría 3 -->
                        <div>
                            <!-- Nombre Categoría -->
                            <div>
                                <div>Hábitos</div>
                                <!-- Número de casos -->
                                <span></span>
                            </div>
                            <!-- Medidor Categoría -->
                            <div>
                                
                            </div>
                        </div>
                        <!-- Categoría 4 -->
                        <div>
                            <!-- Nombre Categoría -->
                            <div>
                                <div>Otros sueños</div>
                                <!-- Número de casos -->
                                <span></span>
                            </div>
                            <!-- Medidor Categoría -->
                            <div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Evolución mensual -->
                <div>
                    <!-- Titulo -->
                    <h2>Evolución mensual</h2>
                    <div>
                        <div>
                            <span>8</span>
                            <div></div>
                            <span>Ago</span>
                        </div>
                        <div>
                            <span>12</span>
                            <div></div>
                            <span>Sep</span>
                        </div>
                        <div>
                            <span>15</span>
                            <div></div>
                            <span>Oct</span>
                        </div>
                        <div>
                            <span>22</span>
                            <div></div>
                            <span>Nov</span>
                        </div>
                        <div>
                            <span>27</span>
                            <div></div>
                            <span>Dic</span>
                        </div>
                        <div>
                            <span>34</span>
                            <div></div>
                            <span>Ene</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card Footer Porcentaje -->
            <div>
                <div>
                    <div>
                        <h2></h2>
                        <p></p>
                    </div>
                    <div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <!-- Importamos el footer -->
    <footer>
    <?php
    require_once "../src/components/Footer.php";
    ?>    
    </footer>
</body>