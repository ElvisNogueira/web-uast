<?php
    session_start();
    if(isset($_SESSION['nome'])){
        header("Location: /home");
    }
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Login</title>
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"];?>/css/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"];?>/css/login.css">
    <link rel="shortcut icon" href="//<?php echo $_SERVER["HTTP_HOST"];?>/imagens/Logo1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">

</head>
<body>
        <div class="back-opaco">
            <div id="login" class="divLogin">
                <div class="logo">
                    <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/logo-branca.png" alt="">
                    <h1>GYM</h1>
                </div>

                <form id="camposLogin" action="/login"
                      method="post">
                    <input type="hidden" name="_method" value="LOGIN">
                    <input type="text" name="nome" id="campoNome" placeholder="Login">
                    <input type="password" name="senha" id="campoSenha" placeholder="Senha">
                    <button type="submit">Entrar</button>
                </form>
            </div>
        </div>
</body>
</html>
