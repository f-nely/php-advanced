<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //echo htmlentities($_POST['code']);
    //eval($_POST['code']);
    echo strip_tags($_POST['code'], '<h1><p>');
}
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
    <title>Code Injection</title>
</head>
<body>
    <form action="codeInjection.php" method="post">
        <label for="code">Codigo:</label>
        <input type="text" name="code" id="code">
        <button class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>