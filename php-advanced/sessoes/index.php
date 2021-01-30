<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login'] == 'root' && $_POST['senha'] == '3030') {
        session_name('Treinaweb');
        session_start();
        $_SESSION['logado'] = true;
        $_SESSION['login'] = $_POST['login'];
        header('Location: logado.php');
    }
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
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>
    <form action="index.php" method="post">
        <label for="login">Login:</label><br>
        <input type="text" name="login" id="login"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha"><br>

        <button>Logar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<!--<form>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputlogin">Login</label>
            <input type="text" class="form-control" id="inputlogin" name="login" placeholder="Login">
        </div>
    <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>-->


</body>
</html>
