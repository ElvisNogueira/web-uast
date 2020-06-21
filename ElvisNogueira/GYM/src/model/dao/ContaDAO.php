<?php


namespace GYM\src\model\dao;


use GYM\src\model\vo\ContaVO;
require_once "connection.php";

class ContaDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into conta (nome,tipo,descricao) values ('{$dado->getNome()}','{$dado->getTipo()}',
               '{$dado->getDescricao()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update conta set nome = '{$dado->getNome()}', tipo = '{$dado->getTipo()}',
               descricao = '{$dado->getDescricao()}' where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from conta where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from conta where id = '{$id}'";
        if($return = $link->query($query)){
            while ($row = $return->fetch_row()){
                $link->close();
                return new ContaVO($row[0], $row[1], $row[2], $row[3]);
            }
        }
        $link->close();
        return null;
    }

    static function getByNome($nome)
    {
        $link = getConnection();
        $query = "select * from conta where nome = '{$nome}'";
        if($return = $link->query($query)){
            while ($row = $return->fetch_row()){
                $link->close();
                return new ContaVO($row[0], $row[1], $row[2], $row[3]);
            }
        }
        $link->close();
        return null;
    }

    static function getAll()
    {
        $contas = [];
        $link = getConnection();
        $query = "select * from conta";
        if($return = $link->query($query)){
            while ($row = $return->fetch_row()){
                $contas [] = new ContaVO($row[0], $row[1], $row[2], $row[3]);
            }
        }
        $link->close();
        return $contas;
    }
}