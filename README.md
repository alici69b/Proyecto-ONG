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

/reset-ong
│
├── public/
│   ├── index.php           
│   ├── resets.php            
│   ├── solicitar_reset.php   
│   ├── voluntarios.php       
│   ├── historias.php        
│   ├── impacto.php            
│   │
│   ├── css/
│   │   └── style.css         
│   │
│   └── img/
│       
│       
│
├── app/
│   ├── Config/
│   │   └── database.php      
│   │
│   ├── Models/
│   │   ├── Reset.php         
│   │   ├── Voluntario.php    
│   │   └── Historia.php       
│   │
│   └── Controllers/
│       ├── ResetController.php
│       ├── VoluntarioController.php
│       └── HistoriaController.php
│
├── src/
│   ├── header.php
│   ├── footer.php
│   └── navbar.php
│
└── README.md


## - Instalación
1. Clonar el repositorio:
git clone https://github.com/usuario/reset.gitmarkdown
2. Configurar base de datos MySQL.
3. Ajustar `config.php` con tus credenciales.
4. Abrir en servidor local (XAMPP, MAMP, LAMP…).
