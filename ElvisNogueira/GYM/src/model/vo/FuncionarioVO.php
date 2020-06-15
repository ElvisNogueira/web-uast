<?php


namespace GYM\src\model\vo;
use GYM\src\model\vo\UsuarioVO;
use GYM\src\model\vo\EnderecoVO;

class FuncionarioVO extends UsuarioVO {
    private $cpf, $nome, $salario, $status, $cargo, $dia_pagamento, $endereco;

    /**
     * Funcionario constructor.
     * @param $cpf
     * @param $nome
     * @param $salario
     * @param $status
     * @param $cargo
     */
    public function __construct($cpf, $nome, $salario, $status, $cargo, $login, $senha, $dia_pagamento, $endereco, $id)
    {
        parent::__construct($id, $login, $senha);
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->salario = $salario;
        $this->status = $status;
        $this->cargo = $cargo;
        $this->dia_pagamento = $dia_pagamento;
        $this->endereco = $endereco;
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
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
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
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
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
    public function getDiaPagamento()
    {
        return $this->dia_pagamento;
    }

    /**
     * @param mixed $dia_pagamento
     */
    public function setDiaPagamento($dia_pagamento)
    {
        $this->dia_pagamento = $dia_pagamento;
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








}