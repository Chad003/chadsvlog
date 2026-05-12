<?php
function HTTP_REQUEST($endpoint, $body = null, $method = 'GET')
{
    $url = "http://api.chadsvlog.site" . $endpoint;

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $headers = [
        'Content-Type: application/json'
    ];

    // Optional request body
    if ($body !== null) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($response === false || $httpCode !== 200) {
        die("API Connection Failed - HTTP $httpCode | $endpoint");

        return [
            'success' => false,
            'data' => [],
            'message' => "Unable to connect to server: $url"
        ];
    }

    $json = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return [
            'success' => false,
            'data' => [],
            'message' => 'Invalid response format'
        ];
    }

    $code = $json['code'] ?? -1;

    if ($code === 0) {
        return [
            'success' => true,
            'data' => $json['data'] ?? [],
            'message' => $json['message'] ?? 'Success'
        ];
    }

    return [
        'success' => false,
        'data' => [],
        'message' => $json['message'] ?? 'API Error'
    ];
}