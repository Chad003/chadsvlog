<?php
header("Content-Type: application/json");

// Get current script path and requested URI
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])); // e.g. /chadsvlog/api
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);        // e.g. /chadsvlog/api/adhd-testsss

// Remove everything up to and including /api/
$endpoint = preg_replace('#^' . preg_quote($scriptDir, '#') . '/?#', '', $requestUri);

// Clean up
$endpoint = trim($endpoint, '/');

// If no endpoint, return root message
if ($endpoint === '') {
    echo json_encode([
        "message" => "API root reached. Specify an endpoint."
    ]);
    exit;
}

// Build path to endpoint file
$apiFile = __DIR__ . '/' . $endpoint . '.php';

// Load if exists
if (file_exists($apiFile)) {
    require_once $apiFile;
    exit;
}

// Otherwise, 404
http_response_code(404);
echo json_encode([
    "error" => "Endpoint '{$endpoint}' not found.",
    "debug" => [
        "request_uri" => $requestUri,
        "script_dir" => $scriptDir,
        "resolved_endpoint" => $endpoint,
    ]
]);
exit;
