<?php


namespace GYM\src\model\dao;


use GYM\src\model\vo\PagamentoVO;

class PAgamentoDAO implements InterfaceDAO
{

    static function create($dado)
    {
        $link = getConnection();
        $query = "insert into pagamaento (valor,descricao,data,funcionario_id) values ('{$dado->getValor()}',"
            ."'{$dado->getDescricao()}',{$dado->getData()}',{$dado->getFuncionario()->getId()}')";
        $link->query($query);
        $link->close();
    }

    static function update($dado, $id)
    {
        $link = getConnection();
        $query = "update pagamaento set valor = '{$dado->getValor()}',descricao = '{$dado->getDescricao()}',"
            ."data = '{$dado->getData()}',funcionario_id = '{$dado->getFuncionario()->getId()}' where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function delete($id)
    {
        $link = getConnection();
        $query = "delete from pagamento where id = '{$id}'";
        $link->query($query);
        $link->close();
    }

    static function getById($id)
    {
        $link = getConnection();
        $query = "select * from pagamento where id = '{$id}'";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                return new PagamentoVO($row[0],$row[1],FuncionarioDAO::getById($row[4]),$row[2],$row[3]);
            }
        }
        $link->close();
    }

    static function getAll()
    {
        $pagamentos = [];
        $link = getConnection();
        $query = "select * from pagamento";
        if($result = $link->query($query)){
            while ($row = $result->fetch_row()){
                $link->close();
                $pagamentos[] = new PagamentoVO($row[0],$row[1],FuncionarioDAO::getById($row[4]),$row[2],
                    $row[3]);
            }
        }
        $link->close();
        return $pagamentos;
    }
}