<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$produtos = Capsule::table('geral.prd_produtos')->get();

//var_dump($produtos);

$prod4 = Capsule::table('geral.prd_produtos')->where('prd_id', 4)->get();

//var_dump($prod4);

//$prods = Capsule::table('geral.prd_produtos')->where('prd_quantidade_estoque', '<', 200)->get();

//var_dump($prods);

/*$prods = Capsule::table('geral.prd_produtos')->orderBy('prd_quantidade_estoque', 'desc')->get();

foreach ($prods as $prod) {
    echo $prod->prd_nome . ' ' .$prod->prd_quantidade_estoque . '<br>';
}*/

/*echo Capsule::table('geral.prd_produtos')->max('prd_quantidade_estoque');

echo '<br>';

echo Capsule::table('geral.prd_produtos')->min('prd_quantidade_estoque');

echo '<br>';

echo Capsule::table('geral.prd_produtos')->count();*/

/*Capsule::table('geral.prd_produtos')->insert([
    'prd_nome' => 'Tempero',
    'prd_quantidade_estoque' => 10,
    'prd_unidade' => 'KG',
    'prd_codigo_barras' => '56875430'
]);*/

Capsule::table('geral.prd_produtos')
    ->where('prd_id', 6)
    ->update([
        'prd_id' => 5
]);