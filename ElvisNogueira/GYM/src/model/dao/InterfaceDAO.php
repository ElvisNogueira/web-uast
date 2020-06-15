<?php


namespace GYM\src\model\dao;


interface InterfaceDAO{
    static function create($dado);
    static function update($dado, $id);
    static function delete($id);
    static function getById($id);
    static function getAll();
}