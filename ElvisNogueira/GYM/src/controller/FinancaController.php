<?php


namespace GYM\src\controller;


use GYM\src\model\dao\ContaDAO;
use GYM\src\model\dao\FinancaDAO;
use GYM\src\model\vo\FinancaVO;

class FinancaController implements InterfaceController
{

    function index()
    {
        $financas = FinancaDAO::getAll();
        require __DIR__ . "/../view/financa/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
    }

    function create()
    {
        $contas = ContaDAO::getAll();
        require __DIR__ . "/../view/financa/create.php";
    }

    function edit()
    {
        $contas = ContaDAO::getAll();
        $financa = FinancaDAO::getById($_GET['id']);
        $conta = $financa->getConta();
        require __DIR__."/../view/financa/edit.php";
    }

    function store()
    {
        $data = $_POST['data'];
        $descricao = $_POST['descricao'];
        $conta = ContaDAO::getByNome($_POST['conta']);
        $valor = $_POST['valor'];

        $financa = new FinancaVO(null,$data,$descricao,$valor,$conta);

        FinancaDAO::create($financa);

        header("Location: /financa");
    }

    function update()
    {
        $id = $_GET['id'];
        $data = $_POST['data'];
        $descricao = $_POST['descricao'];
        $conta = ContaDAO::getByNome($_POST['conta']);
        $valor = $_POST['valor'];

        $financa = new FinancaVO(null,$data,$descricao,$valor,$conta);

        FinancaDAO::update($financa,$id);
        header("Location: /financa");
    }

    function delete()
    {
        FinancaDAO::delete($_GET['id']);
        header("location: /financa");
    }
}