<?php


namespace Treinaweb;


class Aluno
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}