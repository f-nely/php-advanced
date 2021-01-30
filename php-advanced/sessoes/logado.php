<?php

session_name('Treinaweb');
session_start();

if (!isset($_SESSION['sessIdTime'])) {
    $_SESSION['sessIdTime'] = time();
} elseif (time() - $_SESSION['sessIdTime'] > 10) {
    $_SESSION = [];
    session_destroy();
} else {
    $_SESSION['sessIdTime'] = time();
}

if (!isset($_SESSION)) {
    header('Location: index.php');
    exit();
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Logado</title>
</head>
<body>
    <h1>Seja Bem vindo</h1>
    <p>Login: <?=$_SESSION['login']?></p>
    <p>Session_id: <?= session_id()?></p>
    <p>Session_name: <?= session_name()?></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
