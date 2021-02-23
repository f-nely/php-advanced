<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$rota = $request->getPathInfo();

switch($rota) {
    case '/':
        printf('<b>%s</b> - Home do site', $rota);
        break;
    case '/contato':
        printf('<b>%s</b> - Página de contato', $rota);
        break;
    default:
        echo 'Ops. Página não encontrada.';
}

// a URI que está sendo requisitada (e.g. /about) menos parâmetros de consulta
$request->getPathInfo();

// recupera varáveis GET e POST respectivamente
$request->query->get('oingo');

$request->request->get('boingo', 'valor padrão se boingo não existir');

// recupera variáveis SERVER
$request->server->get('HTTP_HOST');

// recupera uma instância de UploadedFile identificado por oingo
$request->files->get('oingo');

// recupera um valor COOKIE
$request->cookies->get('PHPSESSID');

// recupera um cabeçalho de requisição HTTP, com chaves minúsculas normalizadas
$request->headers->get('host');

$request->headers->get('content_type');

$request->getMethod();
// GET, POST, PUT, DELETE, HEAD

$request->getLanguages();
// um array de idiomas que o cliente aceita