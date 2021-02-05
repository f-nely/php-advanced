<?php
$token = sha1(uniqid(rand(), true));
session_start();
$_SESSION['token'] = $token;
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>CSRF</title>
</head>
<body>
    <form action="/login.php" method="post">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login"><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha"><br>
        <button>Logar</button>
        <input type="hidden"  name="token" value="<?=$token?>">
    </form>
</body>
</html>
