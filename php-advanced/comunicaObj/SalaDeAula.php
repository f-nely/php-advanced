<?php


namespace Treinaweb;


class SalaDeAula
{
    private string $turma;
    
    private array $alunos;
    
    public function __construct(string $turma)
    {
        $this->turma = $turma;
    }

    public function addAluno(Aluno $aluno)
    {
        $this->alunos[] = $aluno;
    }
}