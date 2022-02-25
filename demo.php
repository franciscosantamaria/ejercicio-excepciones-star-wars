<?php
use GuzzleHttp\Client;

require 'vendor/autoload.php';

$apiUrl = "https://swapi.dev/api/";

$client = new Client();

//hacemos la petición a un endpoint invalido
$response = $client->request('GET', $apiUrl . 'peoplee/1');

echo "<h2>El nombre del personaje con ID 1 es: " . json_decode($response->getBody(), true)['name'] . "<h2>";
