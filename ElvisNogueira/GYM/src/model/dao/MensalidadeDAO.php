<?php


namespace GYM\src\model\dao;


use GYM\src\model\vo\MensalidadeVO;

class MensalidadeDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into mensalidade (valor,desconto,total,data_vencimento,aluno_id) ".
        "values ('{$dado->getValor()}','{$dado->getDesconto()}','{$dado->getTotal()}',".
            "'{$dado->getData_vencimento()}','{$dado->getAluno()->getId()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update mensalidade set valor = '{$dado->getValor()}',desconto = '{$dado->getDesconto()}',"
            ."total = '{$dado->getTotal()}',data_vencimento = '{$dado->getData_vencimento()}',aluno_id = '{$dado->get}' "
            ."where id = '{$id}'";
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

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from mensalidade where id = '{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new MensalidadeVO($row[0],$row[1],$row[2],$row[3],$row[4],AlunoDAO::getById($row[5]));
            }
        }
        $link->close();
    }

    static function getAll()
    {
        $mensalidades = [];
        $link = getConnection();
        $query = "select * from mensalidade where id = '{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $mensalidades[] = new MensalidadeVO($row[0],$row[1],$row[2],$row[3],$row[4],
                    AlunoDAO::getById($row[5]));
            }
        }
        $link->close();
        return $mensalidades;
    }
}