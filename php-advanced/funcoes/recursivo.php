<?php

/*
 * https://pt.wikipedia.org/wiki/Recursividade_(ci%C3%AAncia_da_computa%C3%A7%C3%A3o)
 */
function subtrai(int $num)
{
    if ($num === 0) {
        return $num;
    }
    echo $num . "<br>";
    subtrai($num - 1);
}

subtrai(10);

function fatorial(int $num)
{
    /*if ($num === 0) {
        return 1;
    }
    return $num * fatorial($num - 1);*/
    return ($num) ? $num * fatorial($num - 1) : 1;
}

echo fatorial(5);