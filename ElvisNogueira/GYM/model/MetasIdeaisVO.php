<?php


class MetasIdeaisVO{
    private $id, $peso, $imc, $nivel, $porcentual_gordura;

    /**
     * MetasIdeaisVO constructor.
     * @param $id
     * @param $peso
     * @param $imc
     * @param $nivel
     * @param $porcentual_gordura
     */
    public function __construct($id, $peso, $imc, $nivel, $porcentual_gordura)
    {
        $this->id = $id;
        $this->peso = $peso;
        $this->imc = $imc;
        $this->nivel = $nivel;
        $this->porcentual_gordura = $porcentual_gordura;
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
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getImc()
    {
        return $this->imc;
    }

    /**
     * @param mixed $imc
     */
    public function setImc($imc)
    {
        $this->imc = $imc;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getPorcentualGordura()
    {
        return $this->porcentual_gordura;
    }

    /**
     * @param mixed $porcentual_gordura
     */
    public function setPorcentualGordura($porcentual_gordura)
    {
        $this->porcentual_gordura = $porcentual_gordura;
    }



}