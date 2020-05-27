<?php
include_once "AvaliacaoVO.php";
include_once "EnderecoVO.php";
include_once "FichaTreinoVO.php";

class AlunoVO{
    private $id, $nome, $cpf, $status, $data_nascimento, $sexo, $avaliacao, $endereco, $ficha_treino;

    /**
     * AlunoVO constructor.
     * @param $id
     * @param $nome
     * @param $cpf
     * @param $status
     * @param $data_nascimento
     * @param $sexo
     * @param $avaliacao
     * @param $endereco
     * @param $ficha_treino
     */
    public function __construct($id, $nome, $cpf, $status, $data_nascimento, $sexo, $avaliacao, $endereco, $ficha_treino)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->status = $status;
        $this->data_nascimento = $data_nascimento;
        $this->sexo = $sexo;
        $this->avaliacao = $avaliacao;
        $this->endereco = $endereco;
        $this->ficha_treino = $ficha_treino;
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

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * @param mixed $avaliacao
     */
    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getFichaTreino()
    {
        return $this->ficha_treino;
    }

    /**
     * @param mixed $ficha_treino
     */
    public function setFichaTreino($ficha_treino)
    {
        $this->ficha_treino = $ficha_treino;
    }



}