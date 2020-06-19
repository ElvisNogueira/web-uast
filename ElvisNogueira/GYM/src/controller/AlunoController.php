<?php


namespace GYM\src\controller;


use GYM\src\model\dao\AlunoDAO;
use GYM\src\model\vo\AlunoVO;
use GYM\src\model\vo\EnderecoVO;

class AlunoController implements InterfaceController
{

    function index()
    {
        $alunos = AlunoDAO::getAll();
        require __DIR__ ."/../view/aluno/list.php";
    }

    function view()
    {
        $aluno = AlunoDAO::getById($_GET['id']);
        require __DIR__."/../view/aluno/view.php";
    }

    function create()
    {
        require __DIR__ . "/../view/aluno/create.php";
    }

    function edit()
    {
       $aluno = AlunoDAO::getById($_GET['id']);
       require __DIR__."/../view/aluno/edit.php";
    }

    function store()
    {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['sexo'];
        $status = true;
        $data_venc_pag = $_POST['data_venc_pag'];


        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $telefone = $_POST['telefone'];

        $endereco = new EnderecoVO(null,$uf,$cidade,$cep,$bairro,$rua,$numero);
        $aluno = new AlunoVO(null,$nome,$cpf,$data_nasc,$sexo,$status,$data_venc_pag,$endereco,$telefone);

        AlunoDAO::create($aluno);
        require __DIR__."/../view/aluno/list.php" ;

    }

    function update()
    {
        $id_aluno = $_GET['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['sexo'];
        $status = true;
        $data_venc_pag = $_POST['data_venc_pag'];
        //Falta pegar o endereco e salvar a edicao


        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $telefone = $_POST['telefone'];
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }
}