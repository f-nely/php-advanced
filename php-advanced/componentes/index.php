<?php

$rota = $_SERVER['REQUEST_URI'];

switch ($rota) {
    case '/':
        printf('<b>%s</b> - Home do site', $rota);
        break;
    case '/contato':
        printf('<b>%s</b> - Página de contato', $rota);
        break;
    default:
        echo 'Ops. Página não encontrada.';
}