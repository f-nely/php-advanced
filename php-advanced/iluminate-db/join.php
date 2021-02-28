<?php

require_once 'vendor/autoload.php';
require_once 'config.php';

use Illuminate\Database\Capsule\Manager as Capsule;

/*$produtos = Capsule::table('produtos')
            ->join('categorias', 'produtos.categoria_id', '=','categorias.id')
            ->get();

foreach ($produtos as $produto) {
    foreach ($produto as $value) {
        echo $value . ' ';
    }
    echo '<br>';
}*/

/*$categorias = Capsule::table('categorias')
                    ->leftJoin('produtos', 'categorias.id','=', 'produtos.categoria_id')
                    ->get();

var_dump($categorias);*/

/*$categorias = Capsule::table('categorias')
    ->leftJoin('produtos', 'categorias.id','=', 'produtos.categoria_id')
    ->whereNull('produtos.nome')
    ->get();

var_dump($categorias);*/

$categorias = Capsule::table('categorias')
    ->Join('produtos', function ($join) {
        $join->on('categorias.id', '=', 'produtos.categoria_id')
        ->where('produtos.id', '>', 3);
    })
    ->get();

var_dump($categorias);
