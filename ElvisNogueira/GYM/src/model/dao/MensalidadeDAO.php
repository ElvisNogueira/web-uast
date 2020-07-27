<?php


namespace GYM\src\model\dao;


use GYM\src\model\vo\MensalidadeVO;
require_once "connection.php";

class MensalidadeDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        echo $dado->getAluno()->getId()."<br>";
        $query = "insert into mensalidade (valor,desconto,total,data_vencimento,status, aluno_id) ".
        "values ('{$dado->getValor()}','{$dado->getDesconto()}','{$dado->getTotal()}',".
            "'{$dado->getDataVencimento()}', 'À pagar','{$dado->getAluno()->getId()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update mensalidade set valor = '{$dado->getValor()}',desconto = '{$dado->getDesconto()}',"
            ."total = '{$dado->getTotal()}',data_vencimento = '{$dado->getDataVencimento()}',aluno_id = 
            '{$dado->getAluno()->getId()}', status = '{$dado->getStatus()}' "
            ."where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function pagar($id){
        //$status = "Pago";
        $link = getConnection();
        $query = "update mensalidade set status = 'Pago' where id = ".$id;
        $link->query($query);
        $link->close();

    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from mensalidade where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function deleteByIdAluno($id)
    {
        $link = getConnection();
        $query = "delete from mensalidade where aluno_id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from mensalidade where id = '{$id}'";
        if($result = $link->query($query)){

            while ($row = $result->fetch_row()){
                $link->close();
                echo "epa";
                return new MensalidadeVO($row[0],$row[1],$row[2],$row[3],AlunoDAO::getById($row[6]),
                    $row[4],$row[5]);
            }
        }
        $link->close();
    }

    static function getAll()
    {
        $mensalidades = [];
        $link = getConnection();
        $query = "select * from mensalidade";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $mensalidades[] = new MensalidadeVO($row[0],$row[1],$row[2],$row[3],AlunoDAO::getById($row[6]),
                    $row[4],$row[5]);
            }
        }
        $link->close();
        return $mensalidades;
    }

    static function getByIdAluno($id)
    {
        $mensalidades = [];
        $link = getConnection();
        $query = "select * from mensalidade where aluno_id = '{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $mensalidades[] = new MensalidadeVO($row[0],$row[1],$row[2],$row[3],AlunoDAO::getById($row[6]),
                    $row[4],$row[5]);
            }
        }
        $link->close();
        return $mensalidades;
    }
}