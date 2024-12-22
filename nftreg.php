<?php

// API URL
$apiUrl = 'http://localhost:3000/deploy'; // Change to your server URL if needed

// Example data to send in the request
$data = [
    'walletAddress' => '0xbb8bea8ba9cf69a6ec1cea3daca48485cb2915b5',
    'privateKey' => '-----BEGIN PRIVATE KEY-----MIGEAgEAMBAGByqGSM49AgEGBSuBBAAKBG0wawIBAQQgyFa59BGC2uMgFgcf+T6RuRr+tbZNlrK20ZtbljWy/zOhRANCAASfi8gvADAoSYlTbUrdTDmQEg9a+k4UIqUj3reA4UC/rPIZcNddRLvoIzQ5KcWUIOnyIzh7qG8r1yaOqcFGN62c-----END PRIVATE KEY-----'
];

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // Send data as JSON
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json', // Set content type to JSON
]);

// Execute cURL request and get response
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Print the response from the API
    echo "Response from API: " . $response;
}

// Close cURL session
curl_close($ch);

?>