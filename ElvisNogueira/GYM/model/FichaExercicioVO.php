<?php
include_once "ExercicioVO.php";

class FichaExercicioVO{
    private $id, $dia, $repeticoes, $exercicio;

    /**
     * FichaExercicioVO constructor.
     * @param $id
     * @param $dia
     * @param $repeticoes
     * @param $exercicio
     */
    public function __construct($id, $dia, $repeticoes, $exercicio)
    {
        $this->id = $id;
        $this->dia = $dia;
        $this->repeticoes = $repeticoes;
        $this->exercicio = $exercicio;
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
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * @param mixed $dia
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
    }

    /**
     * @return mixed
     */
    public function getRepeticoes()
    {
        return $this->repeticoes;
    }

    /**
     * @param mixed $repeticoes
     */
    public function setRepeticoes($repeticoes)
    {
        $this->repeticoes = $repeticoes;
    }

    /**
     * @return mixed
     */
    public function getExercicio()
    {
        return $this->exercicio;
    }

    /**
     * @param mixed $exercicio
     */
    public function setExercicio($exercicio)
    {
        $this->exercicio = $exercicio;
    }



}