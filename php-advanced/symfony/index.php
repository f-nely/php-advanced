<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Treinaweb\Core;

$app = new Core();
$request = Request::createFromGlobals();

$response = $app->handle($request);
$response->send();
