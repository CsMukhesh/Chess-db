<?php

// Load the JSON request data
$requestData = file_get_contents('request.json');

// Define your API key
$apiKey = 'AIzaSyBXtY9du5oAw1Q0SmiRKeWOjtRy909AZJM'; // Replace with your actual API key
$url = 'https://recaptchaenterprise.googleapis.com/v1/projects/chessdb-1730532651059/assessments?key=' . $apiKey;

// Initialize cURL
$ch = curl_init($url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestData);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($requestData)
]);

// Execute the POST request
$response = curl_exec($ch);

// Check for errors
if ($response === false) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Print the response
    echo 'Response from reCAPTCHA Enterprise: ' . $response;
}

// Close cURL session
curl_close($ch);
?>
