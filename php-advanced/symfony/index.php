<?php

require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Treinaweb\Core;

$app = new Core();

// Rotas.
$app->route('/', function(){
    return new Response('Index');
});

$app->route('/contato', function(){
    return new Response('Página de contato.');
});

$app->route('/sobre', function(){
    return new Response('Sobre o projeto.');
});

$app->route('/teste', function (){
   return new Response('Apenas um teste. :-D');
});

// Lida com a requisição
$request = Request::createFromGlobals();
$response = $app->handle($request);
$response->send();