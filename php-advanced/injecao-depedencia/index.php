<?php

use Treinaweb\Carro;
use Treinaweb\Notification;
use Treinaweb\UserCommand;

require_once 'Motor.php';
require_once 'Carro.php';
require_once 'UserCommand.php';
require_once 'Notification.php';

/*$i30 = new Carro('i30', '2.0 16v 145 cv gasolina');
echo $i30->getEspecificacoes();*/

$notification = new Notification();

$command = new UserCommand($notification);
$command->handle();