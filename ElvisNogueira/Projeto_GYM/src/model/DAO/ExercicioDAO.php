<?php


namespace Projeto_GYM\src\model\DAO;
use Projeto_GYM\src\model\VO\ExercicioVO;
require "connect_bd.php";


class ExercicioDAO implements InterfaceDAO
{

    static function create($dado){
        $link = getConnection();
        $query = "insert into exercicio (nome,tipo) values ('{$dado->getNome()}','{$dado->getTipo()}')";
        $link->query($query);
        $link->close();
        // TODO: Implement create() method.
    }

    static function update($dado, $id)
    {
        // TODO: Implement update() method.

    }

    static function delete($id)
    {
        // TODO: Implement delete() method.
    }

    static function findById($id)
    {
        // TODO: Implement findById() method.
    }

    static function findAll()
    {
        // TODO: Implement findAll() method.
        $exercicios = [];
        $link = getConnection();
        $query = "select * from exercicio";

        if ($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $exercicios [] = new ExercicioVO($row[0], $row[2], $row[1]);
            }
        }
        $link->close();
        return $exercicios;
    }
}