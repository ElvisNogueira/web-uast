<?php


namespace GYM\src\model\vo;
use GYM\src\model\vo\ContaVO;


class FinancaVO{
    private $id, $data, $descricao, $valor, $conta;

    /**
     * FinancaVO constructor.
     * @param $id
     * @param $data
     * @param $descricao
     * @param $valor
     * @param $conta
     */
    public function __construct($id, $data, $descricao, $valor, $conta)
    {
        $this->id = $id;
        $this->data = $data;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->conta = $conta;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * @param mixed $conta
     */
    public function setConta($conta)
    {
        $this->conta = $conta;
    }



}