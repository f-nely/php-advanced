<?php

$json = <<<JSON
{
    "nome": "Leonardo",
    "endereco": "Rua da Alfandega",
    "telefone": "(83) 36866-4020"
}
JSON;

$obj_json = json_decode($json);
$arr_json = json_decode($json, true);

var_dump($obj_json, $arr_json);