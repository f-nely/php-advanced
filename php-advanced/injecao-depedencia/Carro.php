<?php

namespace Treinaweb;
class Carro
{
    protected $modelo;
    protected $motor;

    public function __construct($modelo, $motor)
    {
        $this->setModelo($modelo);

        $this->motor = $motor;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getEspecificacoes()
    {
        return vsprintf('Modelo: %s <br> Potência: %s', [
            $this->getModelo(),
            $this->motor->getPotencia()
        ]);
    }
}