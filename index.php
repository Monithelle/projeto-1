<?php include "app\controllers\LoginController.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="/app/controllers/LoginController.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <button type="submit">Entrar</button>
            <a href="/app/views/new-register.php">Cadastrar-se</a>
        </form>
    </div>
</body>
</html>
