<?php


namespace GYM\src\controller;


use GYM\src\model\dao\ConfiguracaoDAO;
use GYM\src\model\vo\ConfiguracaoVO;

class ConfiguracaoController implements InterfaceController
{

    function index()
    {
        // TODO: Implement index() method.
    }

    function view()
    {
        // TODO: Implement view() method.
    }

    function create()
    {
        if (empty(ConfiguracaoDAO::getById(1))){
            require_once __DIR__ . "/../view/configuracao/create.php";
        }else{
            $this->edit();
        }
    }

    function edit()
    {
        $configuracao = ConfiguracaoDAO::getById(1);
        require_once __DIR__ . "/../view/configuracao/edit.php";
    }

    function store()
    {
        $horarioAbertura = $_POST['horaAbertura'];
        $taxaJurosAtrasoMensalidade = $_POST['taxaJuros'];
        $valorMensalidade = $_POST['valorMensalidade'];

        $configuracao = new ConfiguracaoVO(null,$horarioAbertura,$taxaJurosAtrasoMensalidade,$valorMensalidade);
        ConfiguracaoDAO::create($configuracao);
        $this->edit();
    }

    function update()
    {
        $horarioAbertura = $_POST['horaAbertura'];
        $taxaJurosAtrasoMensalidade = $_POST['taxaJuros'];
        $valorMensalidade = $_POST['valorMensalidade'];

        $configuracao = new ConfiguracaoVO(1,$horarioAbertura,$taxaJurosAtrasoMensalidade,$valorMensalidade);
        ConfiguracaoDAO::update($configuracao, 1);
        $this->edit();
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }
}