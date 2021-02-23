<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;

$response = new Response();

$response->setContent('<h1>Mas todos repetem esse tal de Alô Mundo!</h1>');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

$response->send();