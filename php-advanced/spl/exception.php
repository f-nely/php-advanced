<?php

class ArrayInteger extends ArrayIterator
{
    public function __construct()
    {
        parent::__construct([]);
    }

    public function offsetSet($key, $value)
    {
        if (!is_int($value)) {
            throw new \InvalidArgumentException('Só aceita INT na array');
        }
        parent::offsetSet($key, $value);
    }
}

$arr_int = new ArrayInteger();

try {
    $arr_int[] = 3;
    var_dump($arr_int);
} catch (InvalidArgumentException $exception) {
    echo $exception->getMessage();
}
