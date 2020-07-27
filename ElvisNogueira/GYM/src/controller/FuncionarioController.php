<?php


namespace GYM\src\controller;


use Cassandra\Date;
use GYM\src\model\dao\FuncionarioDAO;
use GYM\src\model\dao\UsuarioDAO;
use GYM\src\model\vo\EnderecoVO;
use GYM\src\model\vo\FinancaVO;
use GYM\src\model\vo\FuncionarioVO;
use GYM\src\model\vo\MensalidadeVO;

class FuncionarioController implements InterfaceController{


    function index()
    {
        $funcionarios = FuncionarioDAO::getAll();
        require __DIR__ . "/../view/funcionario/list.php";
    }

    function view()
    {
        $id = $_GET['id'];
        $funcionario = FuncionarioDAO::getById($id);
        require __DIR__ . "/../view/funcionario/view.php";
    }

    function create()
    {
        require_once __DIR__ . "/../view/funcionario/create.php";
    }

    function edit()
    {
        $funcionario = FuncionarioDAO::getById($_GET['id']);
        require __DIR__ . "/../view/funcionario/edit.php";
    }

    function store()
    {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $diaPag = $_POST['diaPag'];
        $cargo = $_POST['cargo'];
        $status = true;

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $salario = $_POST['salario'];

        $endereco = new EnderecoVO(null,$uf,$cidade,$cep,$bairro,$rua,$numero);
        $funcionario = new FuncionarioVO($cpf,$nome,$status,$cargo,$salario,$diaPag,$endereco,$login,$senha,null);

        FuncionarioDAO::create($funcionario);



        header("location: /funcionario");

    }

    function update()
    {
        $id = $_GET['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $diaPag = $_POST['diaPag'];
        $cargo = $_POST['cargo'];
        $status = true;

        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $salario = $_POST['salario'];

        $funcionario_bd = FuncionarioDAO::getById($id);

        $endereco = new EnderecoVO($funcionario_bd->getEndereco()->getId(),$uf,$cidade,$cep,$bairro,$rua,$numero);

        $f = new FuncionarioVO($cpf,$nome,$status,$cargo,$salario,$diaPag,$endereco,$login,$senha,null);

        FuncionarioDAO::update($f,$id);
        header("location: /funcionario");
    }

    function delete()
    {
        $id = $_GET['id'];
        FuncionarioDAO::delete($id);
        header("location: /funcionario");
    }

    function perfil(){
        $login = $_GET['user'];
        $id = UsuarioDAO::getIdByLogin($login);
        $funcionario = FuncionarioDAO::getById($id);
        require __DIR__ . "/../view/perfil.php";
    }
}