<?php

/**
 * ChatbotController.php
 * 
 * Recibe el mensaje del usuario desde el widget,
 * lo envía a la API de Anthropic y devuelve la respuesta en JSON.
 * 
 * Coloca este archivo en: app/controlador/ChatbotController.php
 */

class ChatbotController
{
    // Clave de la API de Anthropic.
    // Lo ideal es leerla desde el archivo .env en lugar de escribirla aquí.
    private string $apiKey;

    // Instrucciones que definen el comportamiento del asistente.
    // Modifica este texto para adaptarlo a tu organización.
    private string $systemPrompt = "Eres el asistente virtual de RESET-ONG, una organización sin ánimo de lucro dedicada
a la reinserción social de personas en situación de vulnerabilidad.

Responde siempre en español, con un tono cercano, empático y profesional.
Sé conciso (máximo 3-4 párrafos) y usa Markdown para estructurar cuando sea útil.

Información que puedes compartir:
- Servicios: orientación laboral, apoyo psicológico, formación y acompañamiento social.
- Contacto: info@reset-ong.org | Tel: +34 900 000 000
- Ubicación: Sevilla, España (atención presencial y online).
- Todos los servicios son completamente gratuitos para los beneficiarios.

Si no conoces la respuesta a algo, indícalo con honestidad y sugiere contactar
directamente con el equipo de RESET-ONG.";

    public function __construct()
    {
        // Lee la API key desde la variable de entorno definida en el archivo .env
        $this->apiKey = getenv('ANTHROPIC_API_KEY') ?: 'TU_API_KEY_AQUI';
    }

    /**
     * Punto de entrada principal del controlador.
     * Detecta si la petición es POST y la procesa,
     * o devuelve un error si se accede de otra forma.
     */
    public function index(): void
    {
        // Solo aceptamos peticiones POST desde el widget
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->responderError('Método no permitido', 405);
            return;
        }

        $this->manejarMensaje();
    }

    /**
     * Lee el mensaje enviado por el usuario,
     * llama a la API de Anthropic y devuelve la respuesta.
     */
    private function manejarMensaje(): void
    {
        // Leemos el cuerpo de la petición (viene en formato JSON desde el widget)
        $body = json_decode(file_get_contents('php://input'), true);

        // Comprobamos que el mensaje no esté vacío
        if (empty($body['message'])) {
            $this->responderError('El campo message es obligatorio', 400);
            return;
        }

        $mensaje = trim($body['message']);

        // Enviamos el mensaje a Anthropic y obtenemos la respuesta
        $respuesta = $this->llamarAnthropic($mensaje);

        if ($respuesta === null) {
            $this->responderError('No se pudo obtener respuesta de la API', 502);
            return;
        }

        // Devolvemos la respuesta al widget en formato JSON
        $this->responderJson(['reply' => $respuesta]);
    }

    /**
     * Hace la petición HTTP a la API de Anthropic usando cURL.
     * Devuelve el texto de la respuesta o null si hay un error.
     */
    private function llamarAnthropic(string $mensaje): ?string
    {
        // Construimos el cuerpo de la petición según el formato que espera Anthropic
        $payload = json_encode([
            'model'      => 'claude-sonnet-4-20250514',
            'max_tokens' => 1024,
            'system'     => $this->systemPrompt,
            'messages'   => [
                ['role' => 'user', 'content' => $mensaje]
            ],
        ]);

        // Configuramos la petición con cURL
        $ch = curl_init('https://api.anthropic.com/v1/messages');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $payload,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                'x-api-key: ' . $this->apiKey,
                'anthropic-version: 2023-06-01',
            ],
        ]);

        $respuesta   = curl_exec($ch);
        $codigoHttp  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $errorCurl   = curl_error($ch);
        curl_close($ch);

        // Si cURL no pudo conectar, registramos el error y devolvemos null
        if ($errorCurl) {
            error_log('ChatbotController - Error cURL: ' . $errorCurl);
            return null;
        }

        // Decodificamos la respuesta de Anthropic
        $datos = json_decode($respuesta, true);

        // Comprobamos que la respuesta sea válida y contenga texto
        if ($codigoHttp !== 200 || empty($datos['content'][0]['text'])) {
            error_log('ChatbotController - Error API: ' . ($datos['error']['message'] ?? $respuesta));
            return null;
        }

        return $datos['content'][0]['text'];
    }

    /**
     * Envía una respuesta JSON con el codigo HTTP indicado.
     */
    private function responderJson(array $datos, int $codigo = 200): void
    {
        http_response_code($codigo);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($datos);
    }

    /**
     * Envía una respuesta de error en formato JSON.
     */
    private function responderError(string $mensaje, int $codigo = 400): void
    {
        $this->responderJson(['error' => $mensaje], $codigo);
    }
}

// Instanciamos el controlador y ejecutamos la lógica
$chatbot = new ChatbotController();
$chatbot->index();

?>