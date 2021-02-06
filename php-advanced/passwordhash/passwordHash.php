<?php

//echo md5('root');

$pdo = new PDO('mysql:dbname=php_advanced', 'root', '704802');

$login = 'email@teste.com';
$senha = '3030';
$option = [
  'cost' => 11
];

$senhaHash = password_hash($senha, PASSWORD_BCRYPT, $option);

$insert = 'INSERT INTO login VALUES (NULL, ?, ?)';

$stmt = $pdo->prepare($insert);

$stmt->execute([$login, $senhaHash]);