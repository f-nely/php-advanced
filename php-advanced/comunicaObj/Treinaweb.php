<?php


namespace Treinaweb;


class Treinaweb
{
    private array $salas;

    public function setSalas(SalaDeAula $sala): void
    {
        $this->salas[] = $sala;
    }
}