<?php


namespace GYM\src\model\vo;


class ConfiguracaoVO{
    private $id;
    private $horarioAbertura;
    private $taxaJurosAtrasoMensalidade;
    private $valorMensalidade;

    /**
     * ConfiguracaoVO constructor.
     * @param array $diasDePagamentoMensalidade
     * @param $horarioAbertura
     * @param $taxaJurosAtrasoMensalidade
     */
    public function __construct($id, $horarioAbertura, $taxaJurosAtrasoMensalidade,
                                $valorMensalidade)
    {
        $this->id = $id;
        $this->horarioAbertura = $horarioAbertura;
        $this->taxaJurosAtrasoMensalidade = $taxaJurosAtrasoMensalidade;
        $this->valorMensalidade = $valorMensalidade;
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
    public function getHorarioAbertura()
    {
        return $this->horarioAbertura;
    }

    /**
     * @param mixed $horarioAbertura
     */
    public function setHorarioAbertura($horarioAbertura)
    {
        $this->horarioAbertura = $horarioAbertura;
    }

    /**
     * @return mixed
     */
    public function getTaxaJurosAtrasoMensalidade()
    {
        return $this->taxaJurosAtrasoMensalidade;
    }

    /**
     * @param mixed $taxaJurosAtrasoMensalidade
     */
    public function setTaxaJurosAtrasoMensalidade($taxaJurosAtrasoMensalidade)
    {
        $this->taxaJurosAtrasoMensalidade = $taxaJurosAtrasoMensalidade;
    }

    /**
     * @return mixed
     */
    public function getValorMensalidade()
    {
        return $this->valorMensalidade;
    }

    /**
     * @param mixed $valorMensalidade
     */
    public function setValorMensalidade($valorMensalidade)
    {
        $this->valorMensalidade = $valorMensalidade;
    }



}

?>