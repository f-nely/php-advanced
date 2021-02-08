<?php

$status = 503;

if ($status == 503) {
    http_response_code(503);
    exit('Página em manutenção');
}

if ($status == 404) {
    http_response_code(404);
    exit('Página não encontrada');
}

/*
 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
 */