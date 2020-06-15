<?php


namespace Projeto_GYM\src\model\VO;


class AnamneseVO{
    private $tabagismo, $restricaoArticular, $cardiopatias, $medicamentos, $hipertensao,
            $outros, $diabetes, $probPulmonares,$ativFisica;
    private $nivel, $tabagismoObs, $restricaoArticularObs, $cardiopatiasObs, $medicamentosObs, $hipertensaoObs,
        $outrosObs,$diabetesObs, $probPulmonaresObs,$ativFisicaObs;
    private $id;

    /**
     * AnamneseVO constructor.
     * @param $tabagismo
     * @param $restricaoArticular
     * @param $cardiopatias
     * @param $medicamentos
     * @param $hipertensao
     * @param $outros
     * @param $diabetes
     * @param $probPulmonares
     * @param $ativFisica
     * @param $nivel
     * @param $tabagismoObs
     * @param $restricaoArticularObs
     * @param $cardiopatiasObs
     * @param $medicamentosObs
     * @param $hipertensaoObs
     * @param $outrosObs
     * @param $diabetesObs
     * @param $probPulmonaresObs
     * @param $ativFisicaObs
     * @param $id
     */
    public function __construct($tabagismo, $restricaoArticular, $cardiopatias, $medicamentos, $hipertensao, $outros, $diabetes, $probPulmonares, $ativFisica, $nivel, $tabagismoObs, $restricaoArticularObs, $cardiopatiasObs, $medicamentosObs, $hipertensaoObs, $outrosObs, $diabetesObs, $probPulmonaresObs, $ativFisicaObs, $id)
    {
        $this->tabagismo = $tabagismo;
        $this->restricaoArticular = $restricaoArticular;
        $this->cardiopatias = $cardiopatias;
        $this->medicamentos = $medicamentos;
        $this->hipertensao = $hipertensao;
        $this->outros = $outros;
        $this->diabetes = $diabetes;
        $this->probPulmonares = $probPulmonares;
        $this->ativFisica = $ativFisica;
        $this->nivel = $nivel;
        $this->tabagismoObs = $tabagismoObs;
        $this->restricaoArticularObs = $restricaoArticularObs;
        $this->cardiopatiasObs = $cardiopatiasObs;
        $this->medicamentosObs = $medicamentosObs;
        $this->hipertensaoObs = $hipertensaoObs;
        $this->outrosObs = $outrosObs;
        $this->diabetesObs = $diabetesObs;
        $this->probPulmonaresObs = $probPulmonaresObs;
        $this->ativFisicaObs = $ativFisicaObs;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTabagismo()
    {
        return $this->tabagismo;
    }

    /**
     * @param mixed $tabagismo
     */
    public function setTabagismo($tabagismo)
    {
        $this->tabagismo = $tabagismo;
    }

    /**
     * @return mixed
     */
    public function getRestricaoArticular()
    {
        return $this->restricaoArticular;
    }

    /**
     * @param mixed $restricaoArticular
     */
    public function setRestricaoArticular($restricaoArticular)
    {
        $this->restricaoArticular = $restricaoArticular;
    }

    /**
     * @return mixed
     */
    public function getCardiopatias()
    {
        return $this->cardiopatias;
    }

    /**
     * @param mixed $cardiopatias
     */
    public function setCardiopatias($cardiopatias)
    {
        $this->cardiopatias = $cardiopatias;
    }

    /**
     * @return mixed
     */
    public function getMedicamentos()
    {
        return $this->medicamentos;
    }

    /**
     * @param mixed $medicamentos
     */
    public function setMedicamentos($medicamentos)
    {
        $this->medicamentos = $medicamentos;
    }

    /**
     * @return mixed
     */
    public function getHipertensao()
    {
        return $this->hipertensao;
    }

    /**
     * @param mixed $hipertensao
     */
    public function setHipertensao($hipertensao)
    {
        $this->hipertensao = $hipertensao;
    }

    /**
     * @return mixed
     */
    public function getOutros()
    {
        return $this->outros;
    }

    /**
     * @param mixed $outros
     */
    public function setOutros($outros)
    {
        $this->outros = $outros;
    }

    /**
     * @return mixed
     */
    public function getDiabetes()
    {
        return $this->diabetes;
    }

    /**
     * @param mixed $diabetes
     */
    public function setDiabetes($diabetes)
    {
        $this->diabetes = $diabetes;
    }

    /**
     * @return mixed
     */
    public function getProbPulmonares()
    {
        return $this->probPulmonares;
    }

    /**
     * @param mixed $probPulmonares
     */
    public function setProbPulmonares($probPulmonares)
    {
        $this->probPulmonares = $probPulmonares;
    }

    /**
     * @return mixed
     */
    public function getAtivFisica()
    {
        return $this->ativFisica;
    }

    /**
     * @param mixed $ativFisica
     */
    public function setAtivFisica($ativFisica)
    {
        $this->ativFisica = $ativFisica;
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
    public function getTabagismoObs()
    {
        return $this->tabagismoObs;
    }

    /**
     * @param mixed $tabagismoObs
     */
    public function setTabagismoObs($tabagismoObs)
    {
        $this->tabagismoObs = $tabagismoObs;
    }

    /**
     * @return mixed
     */
    public function getRestricaoArticularObs()
    {
        return $this->restricaoArticularObs;
    }

    /**
     * @param mixed $restricaoArticularObs
     */
    public function setRestricaoArticularObs($restricaoArticularObs)
    {
        $this->restricaoArticularObs = $restricaoArticularObs;
    }

    /**
     * @return mixed
     */
    public function getCardiopatiasObs()
    {
        return $this->cardiopatiasObs;
    }

    /**
     * @param mixed $cardiopatiasObs
     */
    public function setCardiopatiasObs($cardiopatiasObs)
    {
        $this->cardiopatiasObs = $cardiopatiasObs;
    }

    /**
     * @return mixed
     */
    public function getMedicamentosObs()
    {
        return $this->medicamentosObs;
    }

    /**
     * @param mixed $medicamentosObs
     */
    public function setMedicamentosObs($medicamentosObs)
    {
        $this->medicamentosObs = $medicamentosObs;
    }

    /**
     * @return mixed
     */
    public function getHipertensaoObs()
    {
        return $this->hipertensaoObs;
    }

    /**
     * @param mixed $hipertensaoObs
     */
    public function setHipertensaoObs($hipertensaoObs)
    {
        $this->hipertensaoObs = $hipertensaoObs;
    }

    /**
     * @return mixed
     */
    public function getOutrosObs()
    {
        return $this->outrosObs;
    }

    /**
     * @param mixed $outrosObs
     */
    public function setOutrosObs($outrosObs)
    {
        $this->outrosObs = $outrosObs;
    }

    /**
     * @return mixed
     */
    public function getDiabetesObs()
    {
        return $this->diabetesObs;
    }

    /**
     * @param mixed $diabetesObs
     */
    public function setDiabetesObs($diabetesObs)
    {
        $this->diabetesObs = $diabetesObs;
    }

    /**
     * @return mixed
     */
    public function getProbPulmonaresObs()
    {
        return $this->probPulmonaresObs;
    }

    /**
     * @param mixed $probPulmonaresObs
     */
    public function setProbPulmonaresObs($probPulmonaresObs)
    {
        $this->probPulmonaresObs = $probPulmonaresObs;
    }

    /**
     * @return mixed
     */
    public function getAtivFisicaObs()
    {
        return $this->ativFisicaObs;
    }

    /**
     * @param mixed $ativFisicaObs
     */
    public function setAtivFisicaObs($ativFisicaObs)
    {
        $this->ativFisicaObs = $ativFisicaObs;
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



}