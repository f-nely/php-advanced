<?php

header('Content-Type: text/css');

$cor = rand(111111, 999999);

echo <<<CSS
h1 {
    color: #$cor;
}
CSS;

/*
 * https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types
 */
