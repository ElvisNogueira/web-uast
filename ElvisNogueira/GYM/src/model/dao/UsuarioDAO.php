<?php


namespace GYM\src\model\dao;
use GYM\src\model\vo\UsuarioVO;
require_once "connection.php";

class UsuarioDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into usuario (login,senha) values ('{$dado->getLogin()}','{$dado->getSenha()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update usuario set login = '{$dado->getLogin()}',senha = '{$dado->getSenha()}' where id='{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from usuario where id='{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from usuario where id='{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new UsuarioVO($row[1], $row[2],$row[0]);
            }
        }
        $link->close();
    }

    static function getAll()
    {
        $usuarios = [];
        $link = getConnection();
        $query = "select * from usuario";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $usuarios[] = new UsuarioVO($row[1], $row[2],$row[0]);
            }
        }
        $link->close();
    }

    static function getLastId(){
        $link = getConnection();
        $query = "select MAX(id) from usuario";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return $row[0];
            }
        }
        $link->close();

        return null;
    }

    static function login($login, $senha){
        $link = getConnection();
        $query = "select * from usuario where login='{$login}' and senha='{$senha}'";
        echo " query: ".$query."   ";
        if($result = $link->query($query)){
            echo " Achou ";
            while ($row = $result->fetch_row()){
                $link->close();
                return new UsuarioVO($row[1], $row[2],$row[0]);
            }
        }
        $link->close();
        return null;
    }
}