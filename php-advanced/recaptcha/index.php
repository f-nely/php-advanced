
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
<form method="POST" action="valida-form.php">
    <label for="login">Login:</label><br>
    <input type="text" name="login" id="login"><br>
    <label for="senha">Senha:</label><br>
    <input type="password" name="senha" id="senha"><br>

    <button>Logar</button>

    <div class="g-recaptcha" data-sitekey="6LecUFwaAAAAAC2AwdJE6piaQ8hWZX8m_VYtWViw"></div>

</form>

<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>

</body>
</html>
