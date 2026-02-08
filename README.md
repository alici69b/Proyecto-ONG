# ONG RESET
**Reiniciando vidas, ideas y proyectos**

## - Descripción
RESET es una ONG digital que da **segundas oportunidades** a proyectos, estudios, hábitos, ideas o pequeños sueños que las personas han abandonado. 
No se centra solo en ayudar a personas, sino en **reactivar lo que quedó incompleto** mediante apoyo emocional y técnico.

## - Tecnologías utilizadas
- HTML5, CSS3, Bootstrap (diseño responsive y moderno)
- PHP (lógica del servidor)
- MySQL (base de datos)

##  Funcionalidades
1. **Solicitar un RESET**  
   Formulario donde los usuarios explican qué abandonaron, por qué y qué necesitan.
2. **Casos en proceso/Historias de extito**  
   Listado dinámico con tarjetas que muestran el estado, categoría y fecha de cada RESET.
3. **Voluntarios RESET**  
   Formulario para que los voluntarios ofrezcan ayuda.
4. **Impacto**  
   Contadores dinámicos de RESET iniciados, completados y voluntarios activos.


## - Base de datos
Tablas principales:
Aun no definidas

## - Estructura de carpetas (ejemplo)
```text
RESET-ONG/
├── app/                      # Lógica principal de la aplicación
│   ├── config/               # Configuración global
│   │   └── db.php            # Conexión a la base de datos
│   ├── controlador/          # El "cerebro": procesa datos y decide qué mostrar
│   │   ├── ContactController.php
│   │   ├── LoginController.php
│   │   ├── RegisterController.php
│   │   ├── resetcontrolador.php
│   │   └── voluntariocontrolador.php
│   ├── modelo/               # El "almacén": consultas directas a la base de datos
│   │   ├── RegisterModel.php
│   │   ├── reset.php
│   │   └── voluntario.php
│   └── vista/                # Páginas que requieren lógica (Formularios)
│       ├── Login.php
│       └── Register.php
├── pages/                    # Páginas estáticas o de información general
│       ├── Contact.php
│       ├── Historys.php
│       ├── Impact.php
│       ├── resets.php
│       └── Volunteers.php
├── public/                   # Archivos accesibles directamente por el navegador
│   └── assets/
│       └── img/              # Fotos de perfil y recursos visuales
│           ├── CarlosRuiz.jpg
│           ├── LauraMartinez.jpg
│           └── ...
├── src/                      # Recursos compartidos del código
│   └── components/           # Partes de la web que se repiten
│       ├── footer.php
│       └── Header.php        # El archivo que acabamos de editar
├── .htaccess                 # Configuración del servidor (rutas amigables)
├── 404.php                   # Página de error personalizada
└── index.php                 # Puerta de entrada principal al proyecto
```

## - Clonar Repositorio



Te vas a la carpeta htdocs y abres una terminal 

pones este comando en la terminal git clone https://github.com/alici69b/Proyecto-ONG.git

