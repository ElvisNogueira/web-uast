<?php
session_start();
if(!isset($_SESSION['nome'])){
    header("Location: /login");
}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"];?>/css/style.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST'];?>/css/home.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/listStyle.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/scripts/jquery.js"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/scripts/homeScript.js"></script>
    <title>GYM | Home</title>
</head>
<body>
<header>
    <div id="logo">
        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8_Gym_50px.png" alt="Logo GYM">
        <p id="txtLogo">GYM</p>
    </div>
    <div id="headerBlank">

    </div>
    <ul>
        <li>
            <div id="usuario">
                <p>Oi, <?php echo $_SESSION['nome']?>!</p>
                <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-usuario-homem-30.png" alt="">
            </div>
        </li>
        <ul id="menuLogout">
            <a href=""><li>Ver perfil</li></a>
            <a href="/logout?action=logout"><li>Sair</li></a>
        </ul>
    </ul>
</header>
<div id="menuLateral">
    <ul>

        <a><li id="alunoMenu" class="sub-lateral">Alunos</li></a>
        <ul  class="subMenu" id="subMenuAluno">
            <a href="#1"><li>Cadastrar</li></a>
            <a href="#2"><li>Editar</li></a>
            <a href="#3"><li>Visualizar</li></a>
        </ul>

        <a><li id="contaMenu">Contas</li></a>
        <ul  class="subMenu" id="subMenuConta">
            <a href="#1"><li>Cadastrar</li></a>
            <a href="#2"><li>Editar</li></a>
            <a href="#3"><li>Visualizar</li></a>
        </ul>
        <a><li id="financaMenu">Finanças</li></a>
        <ul  class="subMenu" id="subMenuFinanca">
            <a href="#1"><li>Cadastrar</li></a>
            <a href="#2"><li>Editar</li></a>
            <a href="#3"><li>Visualizar</li></a>
        </ul>
        <a><li id="funcionarioMenu">Funcionarios</li></a>
        <ul  class="subMenu" id="subMenuFuncionarios">
            <a href="#1"><li>Cadastrar</li></a>
            <a href="#2"><li>Editar</li></a>
            <a href="#3"><li>Visualizar</li></a>
        </ul>
        <a><li>Relatório</li></a>
    </ul>
</div>
