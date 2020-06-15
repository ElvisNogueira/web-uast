<?php


namespace GYM\src\model\vo;


class UsuarioVO{
    protected $id, $login, $senha;

    /**
     * UsuarioVO constructor.
     * @param $login
     * @param $senha
     */
    public function __construct($login, $senha, $id)
    {
        $this->login = $login;
        $this->senha = $senha;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
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