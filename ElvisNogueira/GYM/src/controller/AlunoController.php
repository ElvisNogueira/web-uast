<?php


namespace GYM\src\controller;


use GYM\src\model\dao\AlunoDAO;
use GYM\src\model\dao\EnderecoDAO;
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

        header("Location: /aluno");
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
        $telefone = $_POST['telefone'];

        $aluno_bd = AlunoDAO::getById($id_aluno);

        $aluno_bd->setNome($nome);
        $aluno_bd->setCpf($cpf);
        $aluno_bd->setDataNasc($data_nasc);
        $aluno_bd->setSexo($sexo);
        $aluno_bd->setDataVencPag($data_venc_pag);
        $aluno_bd->setTelefone($telefone);

        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $bairro = $_POST['bairro'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];

        $aluno_bd->getEndereco()->setUf($uf);
        $aluno_bd->getEndereco()->setCidade($cidade);
        $aluno_bd->getEndereco()->setCep($cep);
        $aluno_bd->getEndereco()->setBairro($bairro);
        $aluno_bd->getEndereco()->setRua($rua);
        $aluno_bd->getEndereco()->setNumero($numero);


        AlunoDAO::update($aluno_bd,$aluno_bd->getId());
        EnderecoDAO::update($aluno_bd->getEndereco(), $aluno_bd->getEndereco()->getId());

        header("Location: /aluno");

    }

    function delete()
    {
        $id_aluno = $_GET['id'];
        $aluno = AlunoDAO::getById($id_aluno);
       AlunoDAO::delete($id_aluno);
       EnderecoDAO::delete($aluno->getEndereco()->getId());
       header("Location: /aluno");
    }
}