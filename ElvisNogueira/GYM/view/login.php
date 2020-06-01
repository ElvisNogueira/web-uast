<?php

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="imagens/Logo1.png" type="image/x-icon">
</head>
<body>
    <div id="corpo">
        <div id="logo" class="divLogin">
            <img src="imagens/1.png" alt="">
        </div>
        <div id="login" class="divLogin">
            <form id="camposLogin" method="post">
                <input type="text" name="nome" id="campoNome" placeholder="Login">
                <input type="password" name="senha" id="campoSenha" placeholder="Senha">
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>
