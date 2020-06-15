<?php


namespace GYM\src\model\dao;
use GYM\src\model\dao\EnderecoDAO;
use GYM\src\model\vo\AlunoVO;

require "connection.php";

class AlunoDAO implements InterfaceDAO
{

    static function create($dado)
    {
        EnderecoDAO::create($dado->getEndereco());
        $id_endereco = EnderecoDAO::getLastId();
        $link = getConnection();

        $dado->getEndereco->setId($id_endereco);

        $query = "insert into aluno (nome,cpf ,data_nasc,sexo,status,data_venc_pag ,telefone,endereco_id) values
                    ('{$dado->getNome()}', '{$dado->getCpf()}','{$dado->getData_nasc()}','{$dado->getSexo()}','{$dado->getStatus()}',
                    '{$dado->getData_venc_pag()}','{$dado->getTelefone()}','{$dado->getEndereco()->getId()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update aluno set nome = '{$dado->getNome()}',cpf = '{$dado->getCpf()}',
                data_nasc = '{$dado->getData_nasc()}',sexo = '{$dado->getSexo()}',status = '{$dado->getStatus()}',
                data_venc_pag = '{$dado->getData_venc_pag()}',telefone = '{$dado->getTelefone()}' where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from aluno where id = '{$id}'";
        $link->query($query);
        $link->close();

    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from aluno where id = '{$id}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new AlunoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],
                        $row[7],EnderecoDAO::getById($row[8]));
            }
        }
        $link->close();
        return  null;
    }

    static function getAll()
    {
        $alunos = [];
        $link = getConnection();
        $query = "select * from aluno";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $alunos []=  new AlunoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],
                    EnderecoDAO::getById($row[7]));
            }
        }
        $link->close();
        return  $alunos;
    }
}