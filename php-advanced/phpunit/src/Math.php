<?php


namespace Treinaweb;


use http\Exception\InvalidArgumentException;

class Math
{
    public function add(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }

    public function sub(int $num1, int $num2): int
    {
        return $num1 - $num2;
    }
}