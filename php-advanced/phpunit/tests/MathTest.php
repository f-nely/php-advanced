<?php


use http\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Treinaweb\Math;

class MathTest extends TestCase
{
    private Math $math;

    public function setUp(): void
    {
        $this->math = new Math();
    }

    public function testeCriacaoInicialDaClasseMath()
    {
        $math = new Math();
        $this->assertInstanceOf('Treinaweb\Math', $math);
    }

    public function testeCalculoDoMetodoAdd()
    {
        $this->assertEquals(10, $this->math->add(5, 5));
    }

    public function testeRetornoTipoInteiroEmAdd()
    {
        $this->assertIsInt($this->math->add(1,2));
    }

    public function testeCalculoDoMetodoSub()
    {
        $this->assertEquals(0, $this->math->sub(5, 5));
    }
    
}

/*
 * https://phpunit.readthedocs.io/en/9.5/assertions.html#assertisint
 */