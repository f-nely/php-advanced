<?php

require 'Session.php';

$session = new Session('TREINAWEB');

/*if ($session->valid() === false) {
    exit('Session expirada!');
}*/

echo time() . '<br>';

var_dump($session->get('expire'));
echo $session->get('expire') . '<br>';
echo $session->get('nome') . '<br>';
echo $session->get('email');
