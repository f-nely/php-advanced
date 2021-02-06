<?php

$pdo = new PDO('mysql:dbname=php_advanced', 'root', '704802');

$login = 'email@teste.com';
$senha = '3030';

$select = 'SELECT * FROM login WHERE email=?';

$stmt = $pdo->prepare($select);

$stmt->execute([$login]);

$user = $stmt->fetch(PDO::FETCH_OBJ);

if ($stmt->rowCount() && password_verify($senha, $user->senha)) {
    echo "Usuário logado com sucesso: ";
} else {
    echo "Senha ou usuário inválidos: ";
}