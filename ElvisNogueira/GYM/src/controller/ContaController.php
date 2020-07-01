<?php


namespace GYM\src\controller;


use GYM\src\model\dao\ContaDAO;
use GYM\src\model\vo\ContaVO;

class ContaController implements InterfaceController
{

    function index()
    {
        $contas = ContaDAO::getAll();
        require __DIR__ . "/../view/conta/list.php";
    }

    function view()
    {
        $conta = ContaDAO::getById($_GET['id']);
        require  __DIR__ . "/../view/conta/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/conta/create.php";
    }

    function edit()
    {
        $conta = ContaDAO::getById($_GET["id"]);
        require __DIR__ . "/../view/conta/edit.php";
    }

    function store()
    {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $descricao = $_POST['descricao'];

        ContaDAO::create(new ContaVO(null, $nome, $tipo, $descricao));
        header("Location: /conta");
    }

    function update()
    {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $descricao = $_POST['descricao'];

        ContaDAO::update(new ContaVO($id,$nome,$tipo,$descricao),$id);

        header("Location: /conta");
    }

    function delete()
    {
        $id = $_GET['id'];
        ContaDAO::delete($id);
        header("Location: /conta");
    }
}