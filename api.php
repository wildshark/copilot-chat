<?php
// Make sure to replace 'YOUR_API_KEY' with your actual OpenAI API key.
$apiKey = 'YOUR_API_KEY';

function callOpenAPI($input) {
    global $apiKey;
    $url = 'https://api.openai.com/v1/engines/davinci-codex/completions';
    
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    );

    $data = array(
        'prompt' => $input,
        'max_tokens' => 150
    );

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($curl);
    curl_close($curl);

    return $response;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userInput = $_POST['user_input'];

    // Ensure the input is not empty before making the API call
    if (!empty($userInput)) {
        $response = callOpenAPI($userInput);
        echo json_encode(array('message' => $response));
    }
}
