<?php


class UsuarioVO{
    private $id, $cpf, $senha, $login, $nome;

    /**
     * UsuarioVO constructor.
     * @param $id
     * @param $cpf
     * @param $senha
     * @param $login
     * @param $nome
     */
    public function __construct($id, $cpf, $senha, $login, $nome)
    {
        $this->id = $id;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->login = $login;
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }



}