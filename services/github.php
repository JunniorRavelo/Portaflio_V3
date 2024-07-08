<?php

#Debe crear el token de acceso en su cuenta de GitHub, de los repositoros publicos con acceso de lectura
#Yo adjuntare mi token de acceso, pero no es recomendable hacerlo, ya que es un token de acceso.

// Token de acceso personal de GitHub
$token = '';


// Ruta relativa al archivo de certificados de CA descargado
$cacert_path = __DIR__ . '/certificate/cacert.pem'; // Usa una ruta relativa basada en el directorio actual del script

// URL de la API de GitHub para obtener los repositorios públicos donde eres el autor
$url = 'https://api.github.com/user/repos?affiliation=owner';

// Inicializar cURL
$ch = curl_init();

// Configurar opciones de cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP'); // GitHub requiere un User-Agent
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: token ' . $token,
    'Accept: application/vnd.github.v3+json',
]);
curl_setopt($ch, CURLOPT_CAINFO, $cacert_path); // Especificar la ruta al archivo de certificados de CA

// Ejecutar solicitud cURL y obtener la respuesta
$response = curl_exec($ch);

// Verificar si hubo un error en la solicitud cURL
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
    curl_close($ch);
    exit;
}

// Verificar el código de respuesta HTTP
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($http_code !== 200) {
    echo 'Error: HTTP ' . $http_code . ' - ' . $response;
    curl_close($ch);
    exit;
}

// Cerrar cURL
curl_close($ch);

// Decodificar la respuesta JSON
$repos = json_decode($response, true);

// Verificar si la decodificación JSON fue exitosa
if (json_last_error() !== JSON_ERROR_NONE) {
    echo 'Error en la decodificación JSON: ' . json_last_error_msg();
    exit;
}

// Verificar si la respuesta es un array
if (!is_array($repos)) {
    echo 'Error: La respuesta no es un array. Respuesta original: ' . $response;
    exit;
}

?>