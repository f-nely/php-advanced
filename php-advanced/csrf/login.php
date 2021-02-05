<?php

session_start();

if (!isset($_SESSION['token'], $_POST['token'])) {
    exit('Sem permissão de acesso');
}

if ($_POST['token'] !== $_SESSION['token']) {
    exit('Algum erro ocorreu');
}

echo "Processa o login";