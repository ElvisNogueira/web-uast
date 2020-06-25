<?php

use GYM\src\model\dao\UsuarioDAO;

$nome = $_POST['nome'];
$senha = $_POST['senha'];

if (!empty(UsuarioDAO::login($nome,$senha))){
    header("Location: /home");
}
?>
