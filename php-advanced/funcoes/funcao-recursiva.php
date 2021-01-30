<?php

/*
 * Função recursiva
 * Enquanto $num for menor que 5, a função, repetidamente,
 * chamará ela mesma incrementando em 1 o valor dessa variável
 */

function funcaoRecursiva(int $num): void
{
    if ($num < 5) {
        printf("%d\n", $num);
        funcaoRecursiva($num + 1);
    }
}

funcaoRecursiva(1);

/*
 * O laço é executado 5 vezes e o valor de $resultado é incrementado
 * a cada iteração com o seu valor atual + o valor de $i.
 */
function sum(int $value): int
{
    $sum = 0;
    for ($i = 1; $i <= $value; $i++) {
        $sum += $i;
    }
    return $sum;
}

echo sum(5) . PHP_EOL;


function sumRecursive(int $value): int
{
    return ($value) ? ($value + sumRecursive($value - 1)) : 0;
}

echo sumRecursive(5);