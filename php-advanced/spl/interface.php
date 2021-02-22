<?php

class SalaDeAula implements Countable
{
    public $alunos = ['Pedro', 'Carlos', 'José', 'Ana', 'Carla'];

    public function count()
    {
        return count($this->alunos);
    }
}

$sala = new SalaDeAula();

echo count($sala);

