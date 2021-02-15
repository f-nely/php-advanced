<?php

namespace Treinaweb;

require_once 'Authentication.php';
require_once 'User.php';
require_once 'AppAuth.php';


$user = new User();
$user->setId(12);
$user->setAuth(new AppAuth());

$user->login();

$user->validUser();