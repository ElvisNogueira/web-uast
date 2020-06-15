<?php


namespace GYM\src\model\vo;
use GYM\src\model\vo\FuncionarioVO;


class PagamentoVO
{
    private $id, $valor, $funcionario, $descricao, $data;

    /**
     * Pagamento constructor.
     * @param $id
     * @param $valor
     * @param $funcionario
     * @param $descricao
     * @param $data
     */
    public function __construct($id, $valor, $funcionario, $descricao, $data)
    {
        $this->id = $id;
        $this->valor = $valor;
        $this->funcionario = $funcionario;
        $this->descricao = $descricao;
        $this->data = $data;
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
    public function getFuncionario()
    {
        return $this->funcionario;
    }

    /**
     * @param mixed $funcionario
     */
    public function setFuncionario($funcionario)
    {
        $this->funcionario = $funcionario;
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



}