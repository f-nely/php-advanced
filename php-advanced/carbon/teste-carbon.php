<?php

require_once 'vendor/autoload.php';

use Carbon\Carbon;

echo Carbon::now('America/Los_Angeles')->format('d/m/Y H:i:s') . '<br>';

$data = Carbon::now();
echo $data->addMinutes(30)->format('d/m/Y H:i:s') . '<br>';
echo $data->subMonth(2)->format('d/m/Y H:i:s') . '<br>';

$form = '20/02/2014 12:00'; // Date ISO: 2014-02-20

$data_form = Carbon::createFromFormat('d/m/Y H:i', $form);

echo $data_form;
echo "<br>";

$tomorrow = Carbon::tomorrow('Europe/London');
echo $tomorrow;
echo "<br>";
$yesterday = Carbon::yesterday();
echo $yesterday;

//printf("Now: %s", Carbon::now());




/*
 * https://carbon.nesbot.com/docs/
 */