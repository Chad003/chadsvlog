<?php
function HTTP_REQUEST($endpoint)
{

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    $basePath = (strpos($host, 'localhost') !== false || strpos($host, '127.0.0.1') !== false) ? '/chadsvlog' : '';

    $url = $protocol . $host . $basePath . $endpoint;

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // curl_close($ch);   

    if ($response === false || $httpCode !== 200) {
        error_log("API Connection Failed - HTTP $httpCode | $endpoint");
        return ['success' => false, 'data' => [], 'message' => "Unable to connect to server: $url"];
    }

    $json = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return ['success' => false, 'data' => [], 'message' => 'Invalid response format'];
    }


    $code = $json['code'] ?? -1;

    if ($code === 0) {
        $data = $json['data'] ?? [];
        return [
            'success' => true,
            'data' => $data,
            'message' => $json['message'] ?? 'Success'
        ];
    } else {
        return [
            'success' => false,
            'data' => [],
            'message' => $json['message'] ?? 'API Error'
        ];
    }
}