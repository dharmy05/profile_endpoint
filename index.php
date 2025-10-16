<?php
// header('Content-Type: application/json');
require_once __DIR__ . '/catFactService.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($requestUri === '/me') {
    header('Content-Type: application/json');

$fact = getCatFact();

$response = [
    "status" => "success",
    "user" => [
        "email" => "dharmy.dev05@gmail.com",
        "name"  => "Olaleye Oluwadamilola",
        "stack" => "php"
    ],
    "timestamp" => gmdate('c'), // ISO 8601 UTC time
    "fact" => $fact
];

echo json_encode($response, JSON_PRETTY_PRINT);
} else {
    http_response_code(404);
    header('Content-Type: application/json');
    echo json_encode(["status" => "error", "message" => "Not found"]);
}