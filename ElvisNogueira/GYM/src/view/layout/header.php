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
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/modal.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/tooltip.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"];?>/css/formStyle.css">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"];?>/css/viewStyle.css">

    <link rel="shortcut icon" href="//<?php echo $_SERVER["HTTP_HOST"];?>/imagens/Logo1.png" type="image/x-icon">

    <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/scripts/jquery.js"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/scripts/homeScript.js"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/scripts/jquery.mask.js"></script>
    <script src="//<?php echo $_SERVER['HTTP_HOST'];?>/scripts/formularios.js"></script>
    <title>GYM | Home</title>
</head>
<body>

<header>
    <div id="logo">
        <a href="/home">
            <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8_Gym_50px.png" alt="Logo GYM">
            <p id="txtLogo">GYM</p>
        </a>
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
                <li><a href="#" id="sairButton">Sair</a></li>
            </ul>
        </li>

    </ul>
</header>

<div id="menuLateral">
    <ul>
        <li id="alunoMenu" class="sub-lateral" >
            <a class="menu-expandivel">Alunos</a>

            <ul  class="subMenu" id="subMenuAluno">
                <li><a href="/aluno?action=create">Cadastrar</a></li>
                <li><a href="/aluno">Visualizar</a></li>
            </ul>
        </li>


       <li id="contaMenu" class="sub-lateral">  <a class="menu-expandivel">Contas</a>
           <ul  class="subMenu" id="subMenuConta">
               <li><a href="/conta?action=create">Cadastrar</a></li>
               <li><a href="/conta">Visualizar</a></li>
           </ul>
       </li>

        <li id="financaMenu" class="sub-lateral">
            <a class="menu-expandivel">Finanças</a>
            <ul  class="subMenu" id="subMenuFinanca">
                <li><a href="/financa?action=create">Cadastrar</a></li>
                <li><a href="/financa">Visualizar</a></li>
            </ul>
        </li>

        <li id="funcionarioMenu" class="sub-lateral">
            <a class="menu-expandivel">Funcionarios</a>
            <ul  class="subMenu" id="subMenuFuncionarios">
                <li><a href="/funcionario?action=create">Cadastrar</a></li>
                <li><a href="/funcionario">Visualizar</a></li>
            </ul>
        </li>

        <li><a>Relatório</a></li>
    </ul>
</div>
<div class="modal">
    <div class="modal-content">
        <div class="modal-cabecalho"><h1>GYM</h1></div>
        <p class="modal-texto">Deseja realmente sair?</p>
        <div class="modalButton" id="confirmaButton"><a href="/logout?action=logout"><p>Sim</p><a></div>
        <div class="modalButton" id="cancelarButton"><p>Não</p></div>
    </div>
</div>