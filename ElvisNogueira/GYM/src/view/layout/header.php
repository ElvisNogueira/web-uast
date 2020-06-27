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
            <div id="usuario" >
                <p>Oi, <?php echo $_SESSION['nome']?>!</p>
                <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-usuario-homem-30.png" alt="">
            </div>
            <ul id="menuLogout">
                <li><a href="">Ver perfil</a></li>
                <li><a href="/logout?action=logout">Sair</a></li>
            </ul>
        </li>

    </ul>
</header>


<div id="menuLateral">
    <ul>
        <li id="alunoMenu" class="sub-lateral" >
            <a class="menu-expandivel">Alunos</a>

            <ul  class="subMenu" id="subMenuAluno">
                <li><a href="#1">Cadastrar</a></li>
                <li><a href="#2">Editar</a></li>
                <li><a href="/aluno">Visualizar</a></li>
            </ul>
        </li>


       <li id="contaMenu" class="sub-lateral">  <a class="menu-expandivel">Contas</a>
           <ul  class="subMenu" id="subMenuConta">
               <li><a href="#1">Cadastrar</a></li>
               <li><a href="#2">Editar</a></li>
               <li><a href="#3">Visualizar</a></li>
           </ul>
       </li>

        <li id="financaMenu" class="sub-lateral">
            <a class="menu-expandivel">Finanças</a>
            <ul  class="subMenu" id="subMenuFinanca">
                <li><a href="#1">Cadastrar</a></li>
                <li><a href="#2">Editar</a></li>
                <li><a href="#3">Visualizar</a></li>
            </ul>
        </li>

        <li id="funcionarioMenu" class="sub-lateral">
            <a class="menu-expandivel">Funcionarios</a>
            <ul  class="subMenu" id="subMenuFuncionarios">
                <li><a href="#1">Cadastrar</a></li>
                <li><a href="#2">Editar</a></li>
                <li><a href="#3">Visualizar</a></li>
            </ul>
        </li>

        <li><a>Relatório</a></li>
    </ul>
</div>
