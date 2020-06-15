<?php


namespace Projeto_GYM\src\model\VO;


class ExercicioVO
{
    private $id,$tipo, $nome;

    /**
     * Exercicio constructor.
     * @param $id
     * @param $tipo
     * @param $nome
     */
    public function __construct($id, $tipo, $nome)
    {
        $this->id = $id;
        $this->tipo = $tipo;
        $this->nome = $nome;
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
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}