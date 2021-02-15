<?php

$arr_json = [
  "nome" => "Leonardo",
  "endereco" => "Rua da Alfandega" ,
  "telefone" => "(83) 36866-4020"
];

$json = json_encode($arr_json);

echo $json;