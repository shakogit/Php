<?php

$ch = curl_init();
$payload = json_encode([
    "title" => "Updated Title SHAKO!"
]);
$headers = [
    "Content-type: application/json; charset=UTF-8",
    "Accept-language: en"
];
// set URL and other appropriate options
/*curl_setopt($ch, CURLOPT_URL, "http://jsonplaceholder.typicode.com/albums/1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);*/

curl_setopt_array($ch, [
    CURLOPT_URL => "http://jsonplaceholder.typicode.com/albums/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "PATCH",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADER => true
]);

// grab URL and pass it to the browser
$data = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
var_dump($status_code);
var_dump($data);