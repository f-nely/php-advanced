<?php

// Fila de First In First Out - FIFO
/*$fila = new SplQueue();

$fila->push('TreinaWeb');
$fila->push('Curso');
$fila->push('PHP');
$fila->push('Avançado');

for ($fila->rewind(); $fila->valid(); $fila->next()) {
    echo $fila->current() . '<br>';
}

echo '<br>';

// Pilha de Last In First Out - LIFO
$pilha = new SplStack();

$pilha->push('TreinaWeb');
$pilha->push('Course');
$pilha->push('Java');
$pilha->push('Java Algoritmo');

for ($pilha->rewind(); $pilha->valid(); $pilha->next()) {
    echo $pilha->current() . '<br>';
}*/

$storage = new SplObjectStorage();

$aluno1 = new stdClass();
$aluno1->nome = 'Nikita Popov';

$aluno2 = new stdClass();
$aluno2->nome = 'Elton Minetto';

$aluno3 = new stdClass();
$aluno3->nome = 'Vinicius Dias';

$storage->attach($aluno1);
$storage->attach($aluno2);
$storage->attach($aluno3);

for ($storage->rewind(); $storage->valid(); $storage->next()) {
    var_dump($storage->current());
}
