<?php

/*function somar($num1, $num2): int
{
    return $num1 + $num2;
}

echo call_user_func('somar', 13, 10);

$closure = function ($num1, $num2) {
  return $num1 * $num2;
};

echo call_user_func($closure, 5, 6);*/

class Robot
{
    public static function talk(string $name)
    {
        echo "Robô falando: Olá {$name}";
    }
}

//call_user_func(['Robot', 'talk'], 'Leonardo');
Robot::talk('Leonardo');
