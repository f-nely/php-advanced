<?php

$pdo = new PDO('pgsql:dbname=php_advanced', 'postgres','704802');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $pdo->beginTransaction();
    $pdo->exec("INSERT INTO produtos (nome, valor, qtd_estoque, categoria_id) VALUES ('Tenis', 200.00, 4, 2)");
    $pdo->exec("INSERT INTO produtos (nome, valor, qtd_estoque, categoria_id) VALUES ('Sapato', 100.00, 3, 1)");
    $pdo->exec("INSERT INTO produtos (nome, valor, qtd_estoque, categoria_id) VALUES ('Bone', 45.00, 6, 5)");
    $pdo->exec("INSERT INTO produtos (nome, valor, qtd_estoque, categoria_id) VALUES ('Camiseta', 80.00, 8, 6)");
    $pdo->exec("INSERT INTO produtos (nome, valor, qtd_estoque, categoria_id) VALUES ('Camisa', 240.00, 7, 8)");
    $pdo->exec("INSERT INTO produtos (nome, valor, qtd_estoque, categoria_id) VALUES ('Meia', 15.00, 5, 3)");
    $pdo->commit();
} catch (PDOException $PDOException) {
    $pdo->rollBack();
    echo $PDOException->getMessage();
}