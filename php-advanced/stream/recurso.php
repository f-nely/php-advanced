<?php

if ($_POST) {
    echo 'Olá ' . $_POST['nome'] . '! seja bem vindo ao <strong>' . $_POST['empresa']
    . '</strong>';
}