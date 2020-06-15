<?php


namespace GYM\src\model\dao;
use GYM\src\model\dao\EnderecoDAO;
use GYM\src\model\dao\UsuarioDAO;
use GYM\src\model\vo\FuncionarioVO;
use GYM\src\model\vo\UsuarioVO;


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
            '{$dado->getSalario()}','{$dado->getPagamento()}','{$dado->getEndereco()->getId()}',"
            ."'{$dado->getId()()}')";

        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        EnderecoDAO::delete($dado->getId());
        UsuarioDAO::delete($id);
        $link = getConnection();
        $query = "update funcionario set cpf = '{$dado->getCpf()}',nome = '{$dado->getNome()}',".
            "status = '{$dado->getStatus()}', cargo = '{$dado->getCargo()}',salario = '{$dado->getSalario()}',"
            ."dia_pagamento = '{$dado->getPagamento()}' where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from funcionario where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select from funcionario where id='{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $user = UsuarioDAO::getById($row[7]);
                return new FuncionarioVO($row[0],$row[1],$row[4],$row[2],$row[3],$user->getLogin(),
                        $user->getSenha(),$row[5],EnderecoDAO::getById($row[6]));
            }
        }
    }

    static function getAll()
    {
        $funcionarios = [];
        $link = getConnection();
        $query = "select from funcionario";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $user = UsuarioDAO::getById($row[7]);
                $funcionarios[] = new FuncionarioVO($row[0],$row[1],$row[4],$row[2],$row[3],$user->getLogin(),
                    $user->getSenha(),$row[5],EnderecoDAO::getById($row[6]));
            }
        }
        $link->close();
        return $funcionarios;
    }
}