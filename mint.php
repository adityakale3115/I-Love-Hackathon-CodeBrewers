<?php
// URL of the Node.js API endpoint
$url = "http://localhost:4000/sendTransaction"; // Updated port 4000

// Data to send in the POST request
$data = [
    "recipient" => "0xbb8bea8ba9cf69a6ec1cea3daca48485cb2915b5",
    "amount" => "0.01"
];

// Set the options for the HTTP POST request
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\n", // Set header to indicate JSON content
        'method'  => 'POST', // POST method
        'content' => json_encode($data), // Send data as JSON
    ],
];

// Create the stream context
$context  = stream_context_create($options);

// Call the Node.js API
$response = file_get_contents($url, false, $context);

// Check if the response was successful
if ($response === FALSE) {
    echo "Error calling the Node.js API!";
} else {
    // Decode and display the JSON response from the Node.js API
    $responseData = json_decode($response, true);
    echo "Transaction Status: " . $responseData['status'] . "<br>";
    echo "Transaction Hash: " . $responseData['txHash'];
}
?>
