<?php
// CatFactService.php

function getCatFact() {
    $url = "https://catfact.ninja/fact";

    // Set a timeout to avoid hanging requests
    $options = [
        "http" => [
            "timeout" => 5
        ]
    ];

    $context = stream_context_create($options);
    $response = @file_get_contents($url, false, $context);

    if ($response === false) {
        return "Could not fetch a cat fact right now.";
    }

    $data = json_decode($response, true);
    return $data['fact'] ?? "No fact available.";
}
