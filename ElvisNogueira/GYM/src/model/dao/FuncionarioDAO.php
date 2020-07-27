<?php


namespace GYM\src\model\dao;
use GYM\src\model\dao\EnderecoDAO;
use GYM\src\model\dao\UsuarioDAO;
use GYM\src\model\vo\FuncionarioVO;
use GYM\src\model\vo\UsuarioVO;
require_once "connection.php";


class FuncionarioDAO implements InterfaceDAO
{

    static function create($dado)
    {
        UsuarioDAO::create($dado);
        $id_user = UsuarioDAO::getLastId();

        EnderecoDAO::create($dado->getEndereco());
        $id_end = EnderecoDAO::getLastId();

        $dado->setId($id_user);
        $dado->getEndereco()->setId($id_end);


        $link = getConnection();
        $query = "insert into funcionario (cpf,nome,status,cargo,salario,dia_pagamento,endereco_id,usuario_id) "
            . "values ('{$dado->getCpf()}','{$dado->getNome()}','{$dado->getStatus()}','{$dado->getCargo()}',
            '{$dado->getSalario()}','{$dado->getDiaPagamento()}','{$dado->getEndereco()->getId()}',"
            ."'{$id_user}')";

        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        EnderecoDAO::update($dado->getEndereco(), $dado->getEndereco()->getId());
        UsuarioDAO::update($dado,$id);
        $link = getConnection();
        $query = "update funcionario set cpf = '{$dado->getCpf()}',nome = '{$dado->getNome()}',".
            "status = '{$dado->getStatus()}', cargo = '{$dado->getCargo()}',salario = '{$dado->getSalario()}',"
            ."dia_pagamento = '{$dado->getDiaPagamento()}' where usuario_id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $func = FuncionarioDAO::getById($id);
        $id_end = $func->getEndereco()->getId();
        $link = getConnection();
        $query = "delete from funcionario where usuario_id = '{$id}'";
        if($link->query($query)){
            EnderecoDAO::delete($id_end);
            UsuarioDAO::delete($id_end);
        }
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from funcionario where usuario_id='{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $user = UsuarioDAO::getById($row[7]);
                return new FuncionarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],
                    EnderecoDAO::getById($row[6]),$user->getLogin(),$user->getSenha(),$user->getId());
            }
        }
    }

    static function getAll()
    {
        $funcionarios = [];
        $link = getConnection();
        $query = "select * from funcionario";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $user = UsuarioDAO::getById($row[7]);
                $funcionarios[] = new FuncionarioVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],
                    EnderecoDAO::getById($row[6]),$user->getLogin(),$user->getSenha(),$user->getId());
            }
        }
        $link->close();
        return $funcionarios;
    }

}