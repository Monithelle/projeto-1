<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? null;
    $password = $_POST['senha'] ?? null;

    $userEmail = 'user@gmail.com';
    $userPassword = '123456';

    if ($email == null || $password == null) {

        echo 'todos os campos precisam ser preenchidos';
        return;
    }

    if ($email != $userEmail || $password != $userPassword) {

        echo 'Email ou Senha incorreto';
        return;
    }

    echo 'Bem vindo!';
    return;
}
