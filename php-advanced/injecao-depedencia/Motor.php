<?php

namespace Treinaweb;
class Motor
{
    protected $potencia;

    public function __construct($potencia)
    {
        $this->setPotencia($potencia);
    }

    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
    }

    public function getPotencia()
    {
        return $this->potencia;
    }
}