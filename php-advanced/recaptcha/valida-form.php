<?php

define('SECRET', '6LecUFwaAAAAAD9OwvrpwBEgpfU3aL8_VGjiOiDH');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['g-recaptcha-response'])) {
        header('Location: index.php');
    }
    require_once 'vendor/autoload.php';
    // Validações

    $recaptcha = new \ReCaptcha\ReCaptcha(SECRET);

    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);

    if ($resp->isSuccess()) {
        echo "Formulário vindo de um humano: ";
        exit();
    } else {
        exit('Não concluiu o recaptcha');
    }
}

header('Location: index.php');

//var_dump($_POST);