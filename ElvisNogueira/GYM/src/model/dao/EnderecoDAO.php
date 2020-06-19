<?php


namespace GYM\src\model\dao;
use GYM\src\model\vo\EnderecoVO;
require_once "connection.php";

class EnderecoDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into endereco (uf, cidade, cep, bairro, rua, numero) values ('{$dado->getUf()}','{$dado->getCidade()}',
                        '{$dado->getCep()}','{$dado->getBairro()}','{$dado->getRua()}','{$dado->getNumero()}')";
        if($result = $link->query($query)){
            $link->close();
            return self::getLastId();
        }
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update endereco set uf='{$dado->getUf()}', cidade='{$dado->getCidade()}', cep='{$dado->getCep()}', bairro='{$dado->getBairro()}', 
                rua='{$dado->getRua()}', numero='{$dado->getNumero()}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from endereco where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from endereco where id = '{$id}'";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new EnderecoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5], $row[6]);
            }
        }
        $link->close();
        return  null;
    }

    static function getLastId(){
        $link = getConnection();
        $query = "SELECT MAX(id) FROM `endereco`";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return $row[0];
            }

        }

    }

    static function getAll()
    {
        $enderecos = [];
        $link = getConnection();
        $query = "select * from endereco";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $enderecos [] = new EnderecoVO($row[0],$row[1],$row[2],$row[3],$row[4],$row[5], $row[6]);
            }
        }
        $link->close();
        return  null;
    }
}