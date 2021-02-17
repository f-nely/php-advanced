<?php

use Respect\Validation\Validator;

require_once 'vendor/autoload.php';

$valida = Validator::cpf();

$val_num = Validator::number()->positive();

var_dump($valida->validate('578.311.480-43'));

var_dump($val_num->validate(-2));