<?php

echo "Operador Bitwise AND" . PHP_EOL;
// 11 = 00001011
//  5 = 00000101
// -------------
// Resultado da comparação: 00000001

var_dump(11 & 5); // Resultado binário: 00000001 = Decimal 1 (Int)


// 12 = 00001100
//  9 = 00001001
// -------------
// Resultado da comparação: 00001000

var_dump(12 & 9); // Resultado binário: 00001000 = Decimal 8

/*
 * Explicando
 *
    0 & 0 = False = 0
    1 & 0 = False = 0
    0 & 1 = False = 0
    1 & 1 = True = 1
 */

// v = Decimal ASCII 118 = Binário: 1110110
// k = Decimal ASCII 107 = Binário: 1101011
// Resultado binário da comparação: 1100010 = Que é equivalente ao decimal 98

var_dump("v" & "k"); // Resultado 'b'

echo "Operador Bitwise OR" . PHP_EOL;

// 11 = 00001011
//  5 = 00000101
// -------------
// Resultado da comparação: 00001111

var_dump(11 | 5); // Resultado binário: 00001111 = Decimal 15

/*
 * Explicando
 *
    0 | 0 = False = 0
    1 | 1 = True = 1
    1 | 0 = True = 1
    0 | 1 = True = 1
 */

echo "Operador Bitwise XOR" . PHP_EOL;
// 11 = 00001011
//  5 = 00000101
// -------------
// Resultado da comparação: 00001110

var_dump(11 ^ 5); // Resultado binário: 00001110 = Decimal 14

/*
 * Explicando
 *
 *
    0 ^ 0 = False = 0
    1 ^ 1 = False = 0
    1 ^ 0 = True = 1
    0 ^ 1 = True = 1
 */

echo "Operadore Bitwise NOT" . PHP_EOL;

var_dump(~11); // Int -12

var_dump(~-11); // Int 10

/*
 * Se o valor é positivo, ele incrementa (++) e inverte o sinal para negativo.
 * Se o valor é negativo, ele decrementa (--) e inverte o sinal para positivo.
 * +10 = 00000000 00000000 00000000 00001010
 * -11 = 11111111 11111111 11111111 11110101
 */

echo "Operadores Bitwise de deslocamento binário" . PHP_EOL;


$valor = 75; // Equivalente binário: 01001011

var_dump($valor >> 0); // 75 = 01001011

var_dump($valor >> 1); // 37 = 00100101

var_dump($valor >> 2); // 18 = 00010010

var_dump($valor >> 3); // 9  = 00001001

var_dump($valor >> 4); // 4  = 00000100

var_dump($valor >> 5); // 2  = 00000010

/*
 *  75 >> 0 = 01001011          = 75
    75 >> 1 = 00100101|1        = 37
    75 >> 2 = 00010010|11       = 18
    75 >> 3 = 00001001|011      = 9
    75 >> 4 = 00000100|1011     = 4
    75 >> 5 = 00000010|01011    = 2
 */

$a = 75;
$b = 4;

var_dump($a >> $b); // Operação binária
var_dump(floor($a / pow(2, $b))); // "Equivalente"


$a = 850;
$b = 5;

var_dump($a << $b); // Operação binária

var_dump($a * pow(2, $b)); // Cálculo equivalente


// Representação da cor em Hexadecimal: #1E4262
// Representação da cor em Decimal: 1983074 = var_dump(0x1E4262)
// Representação da cor em Binário: 000111100100001001100010

// Valor decimal da cor.
// Mas também pode ser usado o valor hexadecimal dela com a notação do PHP para isso: 0x1E4262
$cor = 1983074;

// red
$r = ($cor >> 16) & 0xFF;

//                   $r = 0000000000011110 = 30
//                 0xFF = 0000000011111111 = 255
// Resultado Comparação = 0000000000011110 = 30

// green
$g = ($cor >> 8) & 0xFF;

//                   $g = 0000000001000010 = 66
//                 0xFF = 0000000011111111 = 255
// Resultado Comparação = 0000000001000010 = 66

// blue
$b = $cor & 0xFF;

//                   $b = 0000000001100010 = 98
//                 0xFF = 0000000011111111 = 255
// Resultado Comparação = 0000000001100010 = 98

// Imprime o equivalente RGB da cor
echo "<div style='color:#fff;background-color: rgb(" . $r . ", " . $g . ", " . $b . ");'>TreinaWeb - RGB</div><br>";

// Imprime a cor pelo seu valor hexadecimal
echo "<div style='color:#fff;background-color: #1E4262;'>TreinaWeb - Hexadecimal</div>";