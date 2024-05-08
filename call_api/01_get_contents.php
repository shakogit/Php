<?php
$payload = json_encode([
    "title" => "Updated Title"
]);
$options = [
    "http" => [
        "method" => "PATCH",
        "header" => "Content-type: application/json; charset=UTF-8",
        "content" => $payload
    ]
];
$context = stream_context_create($options); //create a stream context | modyfy request
// file_get_content | gets request from API | Reads entire file in to String
$data = file_get_contents("https://jsonplaceholder.typicode.com/albums/2",false, $context);
var_dump($data);
print_r($http_response_header); // HTTP responce headers