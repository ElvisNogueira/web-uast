<?php


class ComposicaoCorporalVO{
    private $id, $peso_gorda, $imc, $rcq, $peso_magra, $porcentual_gordura,
            $pressao_arterial;

    /**
     * ComposicaoCorporal constructor.
     * @param $id
     * @param $peso_gorda
     * @param $imc
     * @param $rcq
     * @param $peso_magra
     * @param $porcentual_gordura
     * @param $pressao_arterial
     */
    public function __construct($id, $peso_gorda, $imc, $rcq, $peso_magra, $porcentual_gordura, $pressao_arterial)
    {
        $this->id = $id;
        $this->peso_gorda = $peso_gorda;
        $this->imc = $imc;
        $this->rcq = $rcq;
        $this->peso_magra = $peso_magra;
        $this->porcentual_gordura = $porcentual_gordura;
        $this->pressao_arterial = $pressao_arterial;
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
    public function getPesoGorda()
    {
        return $this->peso_gorda;
    }

    /**
     * @param mixed $peso_gorda
     */
    public function setPesoGorda($peso_gorda)
    {
        $this->peso_gorda = $peso_gorda;
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
    public function getRcq()
    {
        return $this->rcq;
    }

    /**
     * @param mixed $rcq
     */
    public function setRcq($rcq)
    {
        $this->rcq = $rcq;
    }

    /**
     * @return mixed
     */
    public function getPesoMagra()
    {
        return $this->peso_magra;
    }

    /**
     * @param mixed $peso_magra
     */
    public function setPesoMagra($peso_magra)
    {
        $this->peso_magra = $peso_magra;
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

    /**
     * @return mixed
     */
    public function getPressaoArterial()
    {
        return $this->pressao_arterial;
    }

    /**
     * @param mixed $pressao_arterial
     */
    public function setPressaoArterial($pressao_arterial)
    {
        $this->pressao_arterial = $pressao_arterial;
    }



}