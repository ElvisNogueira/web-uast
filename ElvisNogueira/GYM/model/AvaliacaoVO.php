<?php

include_once ("ComposicaoCorporalVO.php");
include_once ("MetasIdeaisVO.php");
include_once ("DobrasCutaneasVO.php");
include_once ("PerimetriaVO.php");
include_once ("InstrutorVO.php");


class AvaliacaoVO{
    private $id, $objetivo, $proxima_avaliacao, $data, $composicaoCorporal, $metasIdeais,
            $dobras_cutaneas, $perimetria, $instrutor;

    /**
     * AvaliacaoVO constructor.
     * @param $id
     * @param $objetivo
     * @param $proxima_avaliacao
     * @param $data
     * @param $composicaoCorporal
     * @param $metasIdeais
     * @param $dobras_cutaneas
     * @param $perimetria
     * @param $instrutor
     */
    public function __construct($id, $objetivo, $proxima_avaliacao, $data, $composicaoCorporal, $metasIdeais, $dobras_cutaneas, $perimetria, $instrutor){
        $this->id = $id;
        $this->objetivo = $objetivo;
        $this->proxima_avaliacao = $proxima_avaliacao;
        $this->data = $data;
        $this->composicaoCorporal = $composicaoCorporal;
        $this->metasIdeais = $metasIdeais;
        $this->dobras_cutaneas = $dobras_cutaneas;
        $this->perimetria = $perimetria;
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
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * @param mixed $objetivo
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;
    }

    /**
     * @return mixed
     */
    public function getProximaAvaliacao()
    {
        return $this->proxima_avaliacao;
    }

    /**
     * @param mixed $proxima_avaliacao
     */
    public function setProximaAvaliacao($proxima_avaliacao)
    {
        $this->proxima_avaliacao = $proxima_avaliacao;
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
    public function getComposicaoCorporal()
    {
        return $this->composicaoCorporal;
    }

    /**
     * @param mixed $composicaoCorporal
     */
    public function setComposicaoCorporal($composicaoCorporal)
    {
        $this->composicaoCorporal = $composicaoCorporal;
    }

    /**
     * @return mixed
     */
    public function getMetasIdeais()
    {
        return $this->metasIdeais;
    }

    /**
     * @param mixed $metasIdeais
     */
    public function setMetasIdeais($metasIdeais)
    {
        $this->metasIdeais = $metasIdeais;
    }

    /**
     * @return mixed
     */
    public function getDobrasCutaneas()
    {
        return $this->dobras_cutaneas;
    }

    /**
     * @param mixed $dobras_cutaneas
     */
    public function setDobrasCutaneas($dobras_cutaneas)
    {
        $this->dobras_cutaneas = $dobras_cutaneas;
    }

    /**
     * @return mixed
     */
    public function getPerimetria()
    {
        return $this->perimetria;
    }

    /**
     * @param mixed $perimetria
     */
    public function setPerimetria($perimetria)
    {
        $this->perimetria = $perimetria;
    }

    /**
     * @return mixed
     */
    public function getInstrutor()
    {
        return $this->instrutor;
    }

    /**
     * @param mixed $instrutor
     */
    public function setInstrutor($instrutor)
    {
        $this->instrutor = $instrutor;
    }
}