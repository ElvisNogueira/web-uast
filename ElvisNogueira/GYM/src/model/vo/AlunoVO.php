<?php


namespace GYM\src\model\vo;
use GYM\src\model\vo\EnderecoVO;


class AlunoVO{
    private $id, $nome, $cpf, $data_nasc, $sexo,
            $status, $data_venc_pag, $endereco, $telefone;

    /**
     * Aluno constructor.
     * @param $id
     * @param $nome
     * @param $cpf
     * @param $data_nasc
     * @param $sexo
     * @param $status
     * @param $data_venc_pag
     * @param $endereco
     */
    public function __construct($id, $nome, $cpf, $data_nasc, $sexo, $status, $data_venc_pag, $endereco, $telefone)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->data_nasc = $data_nasc;
        $this->sexo = $sexo;
        $this->status = $status;
        $this->data_venc_pag = $data_venc_pag;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
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
    public function getDataNasc()
    {
        return $this->data_nasc;
    }

    /**
     * @param mixed $data_nasc
     */
    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
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
    public function getDataVencPag()
    {
        return $this->data_venc_pag;
    }

    /**
     * @param mixed $data_venc_pag
     */
    public function setDataVencPag($data_venc_pag)
    {
        $this->data_venc_pag = $data_venc_pag;
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
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }




}