<?php

use Treinaweb\SlackNotification;
use Treinaweb\UserCommand;

require_once 'NotificationInterface.php';
require_once 'SlackNotification.php';
require_once 'HipChatNotification.php';
require_once 'UserCommand.php';

/*$notification = new SlackNotification();

$command = new UserCommand($notification);
$command->handle();*/

$notification = new \Treinaweb\HipChatNotification();

$command = new UserCommand($notification);
$command->handle();

