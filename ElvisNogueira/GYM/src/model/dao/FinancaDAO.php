<?php


namespace GYM\src\model\dao;


use GYM\src\model\dao\ContaDAO;
use GYM\src\model\vo\FinancaVO;
require_once "connection.php";

class FinancaDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into financa (data, descricao, valor, conta_id ) values ('{$dado->getData()}',
                '{$dado->getDescricao()}','{$dado->getValor()}','{$dado->getConta()->getId()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update financa set data = '{$dado->getData()}', descricao = '{$dado->getDescricao()}', 
            valor = '{$dado->getValor()}' where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from financa where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from financa where id = '{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new FinancaVO($row[0],$row[1],$row[2],$row[3],ContaDAO::getById($row[4]));
            }
        }
    }

    static function getAll()
    {
        $financas = [];
        $link = getConnection();
        $query = "select * from financa";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $financas[] = new FinancaVO($row[0],$row[1],$row[2],$row[3],ContaDAO::getById($row[4]));
            }
        }
        $link->close();
        return $financas;
    }
}