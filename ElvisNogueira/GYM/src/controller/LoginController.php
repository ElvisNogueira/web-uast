<?php


namespace GYM\src\controller;

use GYM\src\model\dao\UsuarioDAO;

class LoginController implements InterfaceController
{
    function logar(){
        session_start();

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $result = UsuarioDAO::login($nome,$senha);
        echo var_dump($result);
        if (!empty($result)){
            $_SESSION['nome'] = $result->getLogin();
            header("Location: /home");
        }else{
            $_SESSION['login'] = 'error';
            header("Location: /login");
        }
    }

    function logout(){
        echo "entrou aqui";
        session_start();
        session_destroy();
        header("Location: /login");
    }

    function index()
    {
        require __DIR__."/../view/login.php";
    }


    function view()
    {
        echo "view";
        // TODO: Implement view() method.
    }

    function create()
    {
        echo "create";
        // TODO: Implement create() method.
    }

    function edit()
    {
        echo "edit";
        // TODO: Implement edit() method.
    }

    function store()
    {
        echo "store";
    }

    function update()
    {
        echo "update";
        // TODO: Implement update() method.
    }

    function delete()
    {
        echo "delete";
        // TODO: Implement delete() method.
    }
}