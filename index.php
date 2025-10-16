<?php
header('Content-Type: application/json');
require_once __DIR__ . '/catFactService.php';


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

// Return JSON
echo json_encode($response, JSON_PRETTY_PRINT);
