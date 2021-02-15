<?php

use Treinaweb\Aluno;
use Treinaweb\SalaDeAula;
use Treinaweb\Treinaweb;

require_once 'Treinaweb.php';
require_once 'SalaDeAula.php';
require_once 'Aluno.php';

$empresa = new Treinaweb();

$sala = new SalaDeAula('A 30/011/2015');
$sala->addAluno(new Aluno('Vinicius Dias'));
$sala->addAluno(new Aluno('Diana Arnos'));
$sala->addAluno(new Aluno('Nikita Popov'));
$sala->addAluno(new Aluno('Elton Minetto'));

$empresa->setSalas($sala);

echo "<pre>";
print_r($empresa);
echo "</pre>";