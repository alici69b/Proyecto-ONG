<?php
$ch = curl_init('https://api.anthropic.com/v1/messages');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode([
        'model'      => 'claude-sonnet-4-20250514',
        'max_tokens' => 100,
        'messages'   => [['role' => 'user', 'content' => 'Hola']]
    ]),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json',
        'x-api-key: TU_API_KEY_AQUI',
        'anthropic-version: 2023-06-01',
    ],
]);
$respuesta = curl_exec($ch);
echo $respuesta;