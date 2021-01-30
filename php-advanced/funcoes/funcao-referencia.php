<?php

$valor1 = 20;

function &meuValor(): int
{
    global $valor1;
    return $valor1;
}

$valor2 =& meuValor();
$valor2 = 25;

var_dump($valor1, $valor2);