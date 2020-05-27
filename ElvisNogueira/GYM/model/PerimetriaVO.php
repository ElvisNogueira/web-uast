<?php


class PerimetriaVO{
    private $id, $altura, $cintura, $peso, $coxa_esquerda, $paturrilha_esquerda,
            $ombro, $braco_esquerdo, $panturrilha_direita, $coxa_direita, $abdomen,
            $torax, $quadril, $braco_direito, $anti_braco_direito, $anti_braco_esquerdo;

    /**
     * PerimetriaVO constructor.
     * @param $id
     * @param $altura
     * @param $cintura
     * @param $peso
     * @param $coxa_esquerda
     * @param $paturrilha_esquerda
     * @param $ombro
     * @param $braco_esquerdo
     * @param $panturrilha_direita
     * @param $coxa_direita
     * @param $abdomen
     * @param $torax
     * @param $quadril
     * @param $braco_direito
     * @param $anti_braco_direito
     * @param $anti_braco_esquerdo
     */
    public function __construct($id, $altura, $cintura, $peso, $coxa_esquerda, $paturrilha_esquerda, $ombro, $braco_esquerdo, $panturrilha_direita, $coxa_direita, $abdomen, $torax, $quadril, $braco_direito, $anti_braco_direito, $anti_braco_esquerdo)
    {
        $this->id = $id;
        $this->altura = $altura;
        $this->cintura = $cintura;
        $this->peso = $peso;
        $this->coxa_esquerda = $coxa_esquerda;
        $this->paturrilha_esquerda = $paturrilha_esquerda;
        $this->ombro = $ombro;
        $this->braco_esquerdo = $braco_esquerdo;
        $this->panturrilha_direita = $panturrilha_direita;
        $this->coxa_direita = $coxa_direita;
        $this->abdomen = $abdomen;
        $this->torax = $torax;
        $this->quadril = $quadril;
        $this->braco_direito = $braco_direito;
        $this->anti_braco_direito = $anti_braco_direito;
        $this->anti_braco_esquerdo = $anti_braco_esquerdo;
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
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getCintura()
    {
        return $this->cintura;
    }

    /**
     * @param mixed $cintura
     */
    public function setCintura($cintura)
    {
        $this->cintura = $cintura;
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
    public function getCoxaEsquerda()
    {
        return $this->coxa_esquerda;
    }

    /**
     * @param mixed $coxa_esquerda
     */
    public function setCoxaEsquerda($coxa_esquerda)
    {
        $this->coxa_esquerda = $coxa_esquerda;
    }

    /**
     * @return mixed
     */
    public function getPaturrilhaEsquerda()
    {
        return $this->paturrilha_esquerda;
    }

    /**
     * @param mixed $paturrilha_esquerda
     */
    public function setPaturrilhaEsquerda($paturrilha_esquerda)
    {
        $this->paturrilha_esquerda = $paturrilha_esquerda;
    }

    /**
     * @return mixed
     */
    public function getOmbro()
    {
        return $this->ombro;
    }

    /**
     * @param mixed $ombro
     */
    public function setOmbro($ombro)
    {
        $this->ombro = $ombro;
    }

    /**
     * @return mixed
     */
    public function getBracoEsquerdo()
    {
        return $this->braco_esquerdo;
    }

    /**
     * @param mixed $braco_esquerdo
     */
    public function setBracoEsquerdo($braco_esquerdo)
    {
        $this->braco_esquerdo = $braco_esquerdo;
    }

    /**
     * @return mixed
     */
    public function getPanturrilhaDireita()
    {
        return $this->panturrilha_direita;
    }

    /**
     * @param mixed $panturrilha_direita
     */
    public function setPanturrilhaDireita($panturrilha_direita)
    {
        $this->panturrilha_direita = $panturrilha_direita;
    }

    /**
     * @return mixed
     */
    public function getCoxaDireita()
    {
        return $this->coxa_direita;
    }

    /**
     * @param mixed $coxa_direita
     */
    public function setCoxaDireita($coxa_direita)
    {
        $this->coxa_direita = $coxa_direita;
    }

    /**
     * @return mixed
     */
    public function getAbdomen()
    {
        return $this->abdomen;
    }

    /**
     * @param mixed $abdomen
     */
    public function setAbdomen($abdomen)
    {
        $this->abdomen = $abdomen;
    }

    /**
     * @return mixed
     */
    public function getTorax()
    {
        return $this->torax;
    }

    /**
     * @param mixed $torax
     */
    public function setTorax($torax)
    {
        $this->torax = $torax;
    }

    /**
     * @return mixed
     */
    public function getQuadril()
    {
        return $this->quadril;
    }

    /**
     * @param mixed $quadril
     */
    public function setQuadril($quadril)
    {
        $this->quadril = $quadril;
    }

    /**
     * @return mixed
     */
    public function getBracoDireito()
    {
        return $this->braco_direito;
    }

    /**
     * @param mixed $braco_direito
     */
    public function setBracoDireito($braco_direito)
    {
        $this->braco_direito = $braco_direito;
    }

    /**
     * @return mixed
     */
    public function getAntiBracoDireito()
    {
        return $this->anti_braco_direito;
    }

    /**
     * @param mixed $anti_braco_direito
     */
    public function setAntiBracoDireito($anti_braco_direito)
    {
        $this->anti_braco_direito = $anti_braco_direito;
    }

    /**
     * @return mixed
     */
    public function getAntiBracoEsquerdo()
    {
        return $this->anti_braco_esquerdo;
    }

    /**
     * @param mixed $anti_braco_esquerdo
     */
    public function setAntiBracoEsquerdo($anti_braco_esquerdo)
    {
        $this->anti_braco_esquerdo = $anti_braco_esquerdo;
    }



}