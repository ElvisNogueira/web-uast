<?php


namespace GYM\src\model\vo;
use GYM\src\model\vo\AlunoVO;

class MensalidadeVO{
    private $id, $valor, $desconto, $total, $aluno, $data_vencimento;

    /**
     * MensalidadeVO constructor.
     * @param $id
     * @param $valor
     * @param $desconto
     * @param $total
     * @param $aluno
     * @param $data_vencimento
     */
    public function __construct($id, $valor, $desconto, $total, $aluno, $data_vencimento)
    {
        $this->id = $id;
        $this->valor = $valor;
        $this->desconto = $desconto;
        $this->total = $total;
        $this->aluno = $aluno;
        $this->data_vencimento = $data_vencimento;
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
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @param mixed $desconto
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getAluno()
    {
        return $this->aluno;
    }

    /**
     * @param mixed $aluno
     */
    public function setAluno($aluno)
    {
        $this->aluno = $aluno;
    }

    /**
     * @return mixed
     */
    public function getDataVencimento()
    {
        return $this->data_vencimento;
    }

    /**
     * @param mixed $data_vencimento
     */
    public function setDataVencimento($data_vencimento)
    {
        $this->data_vencimento = $data_vencimento;
    }



}