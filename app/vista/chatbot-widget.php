<?php
/**
 * chatbot-widget.php
 *
 * Vista del asistente virtual: boton flotante y ventana de chat.
 * 
 * Coloca este archivo en: vista/components/chatbot-widget.php
 * 
 * Incluyelo al final de tu layout principal antes del cierre </body>:
 *     <?php include 'vista/components/chatbot-widget.php'; ?>
 * 
 * Este archivo asume que Tailwind ya esta cargado en tu proyecto
 * a traves de tailwind.config.js. Si no fuera asi, descomenta
 * la linea del CDN que aparece mas abajo.
 * 
 * Dependencia externa necesaria: marked.js (convierte Markdown a HTML).
 * Se carga desde CDN automaticamente, no requiere instalacion.
 */
?>

<!-- marked.js convierte el Markdown de las respuestas del bot en HTML legible -->
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Descomenta esta linea solo si Tailwind NO esta cargado en tu proyecto -->
<!-- <script src="https://cdn.tailwindcss.com"></script> -->

<!-- Estilos adicionales para el contenido Markdown dentro de las burbujas del bot.
     Tailwind no puede aplicar estilos a HTML generado dinamicamente,
     por eso estos estilos van aqui de forma tradicional. -->
<style>
    .cb-markdown p              { margin-bottom: 0.4rem; }
    .cb-markdown p:last-child   { margin-bottom: 0; }
    .cb-markdown ul             { list-style: disc;    padding-left: 1.25rem; margin-bottom: 0.4rem; }
    .cb-markdown ol             { list-style: decimal; padding-left: 1.25rem; margin-bottom: 0.4rem; }
    .cb-markdown li             { margin-bottom: 0.2rem; }
    .cb-markdown strong         { font-weight: 600; }
    .cb-markdown em             { font-style: italic; }
    .cb-markdown code           { background: rgba(0,0,0,0.07); padding: 0.1em 0.35em; border-radius: 0.25rem; font-size: 0.8em; }
    .cb-markdown a              { color: #1d4ed8; text-decoration: underline; }

    /* Animacion de los tres puntos que indican que el bot esta escribiendo */
    @keyframes cbBounce {
        0%, 80%, 100% { transform: translateY(0);     opacity: 0.4; }
        40%            { transform: translateY(-5px);  opacity: 1;   }
    }
    .cb-dot-1 { animation: cbBounce 1.2s infinite 0.0s; }
    .cb-dot-2 { animation: cbBounce 1.2s infinite 0.2s; }
    .cb-dot-3 { animation: cbBounce 1.2s infinite 0.4s; }

    /* Animacion de apertura y cierre de la ventana del chat */
    @keyframes cbFadeUp {
        from { opacity: 0; transform: scale(0.95) translateY(10px); }
        to   { opacity: 1; transform: scale(1)    translateY(0);    }
    }
    .cb-open  { animation: cbFadeUp 0.2s ease forwards; pointer-events: auto !important; }
    .cb-close { opacity: 0 !important; transform: scale(0.95) translateY(10px) !important; pointer-events: none !important; transition: opacity 0.2s, transform 0.2s; }
</style>

<!-- Contenedor raiz del widget -->
<div id="cb-root">

    <!-- Boton flotante que abre y cierra el chat -->
    <button
        id="cb-toggle"
        aria-label="Abrir asistente virtual"
        aria-expanded="false"
        class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full
               bg-blue-700 text-white shadow-lg
               flex items-center justify-center
               hover:bg-blue-800 hover:scale-110
               focus:outline-none focus:ring-4 focus:ring-blue-300
               transition-all duration-200"
    >
        <!-- Icono visible cuando el chat esta cerrado -->
        <svg id="cb-icon-open" class="w-6 h-6 transition-all duration-200"
             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8
                   a9.77 9.77 0 01-4-.84L3 20l1.09-3.27C3.4 15.46 3 13.77 3 12
                   c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
        </svg>

        <!-- Icono visible cuando el chat esta abierto -->
        <svg id="cb-icon-close" class="w-6 h-6 absolute opacity-0 scale-75 transition-all duration-200"
             fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
        </svg>
    </button>

    <!-- Ventana principal del chat (oculta por defecto) -->
    <div
        id="cb-window"
        role="dialog"
        aria-label="Asistente virtual RESET-ONG"
        class="cb-close fixed bottom-[5.5rem] right-6 z-40
               w-[calc(100vw-3rem)] sm:w-96 h-[32rem]
               bg-white rounded-2xl border border-slate-200
               shadow-[0_20px_60px_rgba(0,0,0,0.15)]
               flex flex-col overflow-hidden"
    >
        <!-- Cabecera del chat con el nombre del asistente -->
        <div class="flex items-center gap-3 px-4 py-3 bg-blue-700 text-white flex-shrink-0">
            <div class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5
                           M9.75 3.104c-.251.023-.501.05-.75.082
                           m.75-.082a24.301 24.301 0 014.5 0
                           m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15"/>
                </svg>
            </div>
            <div class="flex-1 min-w-0">
                <p class="font-semibold text-sm leading-tight">RESET-ONG · Asistente</p>
                <p class="text-xs text-blue-100 flex items-center gap-1 mt-0.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-400 inline-block"></span>
                    En linea
                </p>
            </div>
            <!-- Boton para cerrar la ventana -->
            <button id="cb-close-btn" aria-label="Cerrar chat"
                    class="p-1 rounded-lg hover:bg-white/20 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Area donde se muestran los mensajes del usuario y del bot -->
        <div id="cb-messages"
             class="flex-1 overflow-y-auto px-4 py-3 flex flex-col gap-3
                    [&::-webkit-scrollbar]:w-1
                    [&::-webkit-scrollbar-thumb]:rounded-full
                    [&::-webkit-scrollbar-thumb]:bg-slate-200">
        </div>

        <!-- Preguntas rapidas predefinidas para que el usuario pueda hacer clic -->
        <div id="cb-quick"
             class="px-3 pb-2 pt-1 flex flex-wrap gap-1.5 flex-shrink-0 border-t border-slate-100">
        </div>

        <!-- Campo de texto y boton de envio -->
        <div class="px-3 pb-3 pt-2 flex items-center gap-2 border-t border-slate-100 flex-shrink-0 bg-white">
            <input
                id="cb-input"
                type="text"
                placeholder="Escribe tu mensaje..."
                autocomplete="off"
                class="flex-1 text-sm px-4 py-2.5 rounded-full
                       border border-slate-200 bg-slate-50 text-slate-800 placeholder-slate-400
                       focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-blue-700
                       transition-all duration-150"
            />
            <button
                id="cb-send"
                aria-label="Enviar mensaje"
                class="w-9 h-9 rounded-full bg-blue-700 text-white flex-shrink-0
                       flex items-center justify-center
                       hover:bg-blue-800 transition-colors duration-150
                       disabled:opacity-40 disabled:cursor-not-allowed"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12
                           A59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                </svg>
            </button>
        </div>

    </div>
</div>

<script>
(function () {

    // Ruta al controlador PHP que gestiona las peticiones a la API de Anthropic.
    // Ajusta esta ruta segun como tengas configurado tu router.
    const API_URL = '../controlador/ChatbotController.php';

    // Preguntas rapidas que aparecen al abrir el chat por primera vez.
    // Puedes modificarlas o añadir mas segun las dudas mas frecuentes.
    const PREGUNTAS_RAPIDAS = [
        'Que servicios ofreceis?',
        'Como puedo pedir ayuda?',
        'Donde estais ubicados?',
        'Es gratuito?',
    ];

    // Mensaje que muestra el bot al abrir el chat por primera vez.
    const MENSAJE_BIENVENIDA = 'Hola, soy el asistente virtual de **RESET-ONG**. Estoy aqui para orientarte. En que puedo ayudarte hoy?';

    // Referencias a los elementos del DOM
    const btnToggle  = document.getElementById('cb-toggle');
    const iconOpen   = document.getElementById('cb-icon-open');
    const iconClose  = document.getElementById('cb-icon-close');
    const ventana    = document.getElementById('cb-window');
    const btnCerrar  = document.getElementById('cb-close-btn');
    const contenedor = document.getElementById('cb-messages');
    const zonaRapida = document.getElementById('cb-quick');
    const campo      = document.getElementById('cb-input');
    const btnEnviar  = document.getElementById('cb-send');

    // Estado interno del widget
    let chatAbierto = false;
    let cargando    = false;

    // Abre la ventana del chat con animacion
    function abrirChat() {
        chatAbierto = true;
        ventana.classList.remove('cb-close');
        ventana.classList.add('cb-open');
        btnToggle.setAttribute('aria-expanded', 'true');
        iconOpen.classList.add('opacity-0', 'scale-75');
        iconClose.classList.remove('opacity-0', 'scale-75');
        setTimeout(() => campo.focus(), 200);
        bajarScroll();
    }

    // Cierra la ventana del chat con animacion
    function cerrarChat() {
        chatAbierto = false;
        ventana.classList.remove('cb-open');
        ventana.classList.add('cb-close');
        btnToggle.setAttribute('aria-expanded', 'false');
        iconOpen.classList.remove('opacity-0', 'scale-75');
        iconClose.classList.add('opacity-0', 'scale-75');
    }

    btnToggle.addEventListener('click', () => chatAbierto ? cerrarChat() : abrirChat());
    btnCerrar.addEventListener('click', cerrarChat);

    // Crea y muestra un mensaje en el area de mensajes.
    // El rol puede ser 'bot' o 'user'.
    function agregarMensaje(rol, texto) {
        const esBot = rol === 'bot';
        const fila  = document.createElement('div');
        fila.className = `flex gap-2 max-w-[88%] ${esBot ? 'self-start' : 'self-end flex-row-reverse'}`;

        if (esBot) {
            // El contenido del bot se procesa con marked.js para convertir Markdown a HTML
            fila.innerHTML = `
                <div class="w-7 h-7 rounded-full bg-slate-100 border border-slate-200
                            flex items-center justify-center flex-shrink-0 self-end">
                    <svg class="w-3.5 h-3.5 text-blue-700" fill="none" stroke="currentColor"
                         stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5
                               M9.75 3.104c-.251.023-.501.05-.75.082
                               m.75-.082a24.301 24.301 0 014.5 0
                               m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15"/>
                    </svg>
                </div>
                <div class="cb-markdown text-sm bg-slate-100 text-slate-800
                            px-3.5 py-2.5 rounded-2xl rounded-bl-sm leading-relaxed"></div>`;
            fila.querySelector('.cb-markdown').innerHTML = marked.parse(texto);
        } else {
            // El mensaje del usuario se muestra como texto plano (escapado por seguridad)
            fila.innerHTML = `
                <div class="text-sm bg-blue-700 text-white
                            px-3.5 py-2.5 rounded-2xl rounded-br-sm leading-relaxed">
                    ${escaparHtml(texto)}
                </div>`;
        }

        contenedor.appendChild(fila);
        bajarScroll();
    }

    // Muestra el indicador de que el bot esta escribiendo (tres puntos animados)
    function mostrarEscribiendo() {
        const el = document.createElement('div');
        el.id = 'cb-typing';
        el.className = 'flex gap-2 self-start max-w-[88%]';
        el.innerHTML = `
            <div class="w-7 h-7 rounded-full bg-slate-100 border border-slate-200
                        flex items-center justify-center flex-shrink-0 self-end">
                <svg class="w-3.5 h-3.5 text-blue-700" fill="none" stroke="currentColor"
                     stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5
                           M9.75 3.104c-.251.023-.501.05-.75.082
                           m.75-.082a24.301 24.301 0 014.5 0
                           m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15"/>
                </svg>
            </div>
            <div class="bg-slate-100 px-4 py-3 rounded-2xl rounded-bl-sm flex items-center gap-1.5">
                <span class="cb-dot-1 w-2 h-2 rounded-full bg-slate-400 inline-block"></span>
                <span class="cb-dot-2 w-2 h-2 rounded-full bg-slate-400 inline-block"></span>
                <span class="cb-dot-3 w-2 h-2 rounded-full bg-slate-400 inline-block"></span>
            </div>`;
        contenedor.appendChild(el);
        bajarScroll();
    }

    // Elimina el indicador de escritura una vez llega la respuesta
    function ocultarEscribiendo() {
        document.getElementById('cb-typing')?.remove();
    }

    // Desplaza el area de mensajes hasta el ultimo mensaje
    function bajarScroll() {
        requestAnimationFrame(() => { contenedor.scrollTop = contenedor.scrollHeight; });
    }

    // Convierte caracteres especiales en entidades HTML para evitar XSS
    function escaparHtml(str) {
        return str
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    // Crea los botones de preguntas rapidas y los añade al widget
    PREGUNTAS_RAPIDAS.forEach(pregunta => {
        const btn = document.createElement('button');
        btn.textContent = pregunta;
        btn.className = `text-xs px-3 py-1.5 rounded-full cursor-pointer
                         border border-slate-200 bg-slate-50 text-slate-600
                         hover:bg-blue-50 hover:border-blue-700 hover:text-blue-700
                         transition-all duration-150`;
        btn.addEventListener('click', () => {
            if (!cargando) {
                // Ocultamos las preguntas rapidas despues de usar una
                zonaRapida.classList.add('hidden');
                enviarMensaje(pregunta);
            }
        });
        zonaRapida.appendChild(btn);
    });

    // Envia el mensaje del usuario al controlador PHP y muestra la respuesta del bot
    async function enviarMensaje(textoDirecto) {
        const texto = textoDirecto || campo.value.trim();
        if (!texto || cargando) return;

        campo.value = '';
        activarCarga(true);
        agregarMensaje('user', texto);
        mostrarEscribiendo();

        try {
            const respuesta = await fetch(API_URL, {
                method:  'POST',
                headers: { 'Content-Type': 'application/json' },
                body:    JSON.stringify({ message: texto }),
            });

            const datos = await respuesta.json();
            ocultarEscribiendo();

            if (!respuesta.ok || datos.error) {
                agregarMensaje('bot', 'Lo siento, ha ocurrido un error. Por favor intentalo de nuevo o contacta con nosotros directamente.');
            } else {
                agregarMensaje('bot', datos.reply);
            }
        } catch (error) {
            ocultarEscribiendo();
            agregarMensaje('bot', 'No se pudo conectar con el servidor. Comprueba tu conexion e intentalo de nuevo.');
        }

        activarCarga(false);
    }

    // Activa o desactiva el estado de carga (bloquea el input mientras espera respuesta)
    function activarCarga(estado) {
        cargando          = estado;
        btnEnviar.disabled = estado;
        campo.disabled     = estado;
    }

    // Eventos del campo de texto y boton de envio
    btnEnviar.addEventListener('click', () => enviarMensaje());
    campo.addEventListener('keydown', e => {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            enviarMensaje();
        }
    });

    // Mostramos el mensaje de bienvenida al cargar el widget
    agregarMensaje('bot', MENSAJE_BIENVENIDA);

})();
</script>