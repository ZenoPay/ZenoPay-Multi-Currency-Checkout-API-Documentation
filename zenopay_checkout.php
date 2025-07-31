<?php
$apiKey = 'YOUR_API_KEY';
$url = 'https://zenopay.com/api/payments/checkout/';

$data = [
    'amount' => 500,
    'currency' => 'USD',
    'redirect_url' => 'https://yourwebsite.com/thank-you',
    'buyer_email' => 'user@example.com',
    'buyer_name' => 'John Doe',
    'buyer_phone' => '0680900380'
];

$headers = [
    "Content-Type: application/json",
    "x-api-key: $apiKey"
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
