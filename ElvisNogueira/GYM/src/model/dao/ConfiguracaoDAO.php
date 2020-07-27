<?php


namespace GYM\src\model\dao;


use GYM\src\model\vo\ConfiguracaoVO;
require_once "connection.php";

class ConfiguracaoDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into configuracao (horarioAbertura,taxaJurosAtrasoMensalidade,valorMensalidade)"
                    ." values ('{$dado->getHorarioAbertura()}','{$dado->getTaxaJurosAtrasoMensalidade()}',".
                    "'{$dado->getValorMensalidade()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update configuracao set horarioAbertura = '{$dado->getHorarioAbertura()}',".
            "taxaJurosAtrasoMensalidade = '{$dado->getTaxaJurosAtrasoMensalidade()}',valorMensalidade = ".
            "'{$dado->getValorMensalidade()}' where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from configuracao where id='{$id}'";
        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new ConfiguracaoVO($row[0], $row[1],$row[2], $row[3]);
            }
        }
        $link->close();
        return null;
    }

    static function getAll()
    {
        // TODO: Implement getAll() method.
    }
}