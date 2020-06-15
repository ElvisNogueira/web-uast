<?php


namespace Projeto_GYM\src\model\DAO;


interface InterfaceDAO{
    static function create($dado);
    static function update($dado, $id);
    static function delete($id);
    static function findById($id);
    static function findAll();

}