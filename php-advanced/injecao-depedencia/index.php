<?php

require_once 'Motor.php';
require_once 'Carro.php';

$i30 = new \Treinaweb\Carro('i30');
echo $i30->getEspecificacoes();