<?php

include_once "FichaExercicioVO.php";
include_once "ExercicioVO.php";
include_once "InstrutorVO.php";

class FichaTreinoVO{
    private $id, $fichaExercicio, $instrutor;

    /**
     * FichaTreinoVO constructor.
     * @param $id
     * @param $fichaExercicio
     * @param $instrutor
     */
    public function __construct($id, $fichaExercicio, $instrutor){
        $this->id = $id;
        $this->fichaExercicio = $fichaExercicio;
        $this->instrutor = $instrutor;
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
    public function getFichaExercicio()
    {
        return $this->fichaExercicio;
    }

    /**
     * @param mixed $fichaExercicio
     */
    public function setFichaExercicio($fichaExercicio){
        $this->fichaExercicio = $fichaExercicio;
    }

}