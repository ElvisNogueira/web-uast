<?php


namespace Projeto_GYM\src\controller;
use Projeto_GYM\src\model\VO\ExercicioVO;
use Projeto_GYM\src\model\DAO\ExercicioDAO;

class ExercicioController implements InterfacesController
{

    function index()
    {
        // TODO: Implement index() method.
        $exercicios = ExercicioDAO::findAll();
        require __DIR__ . "/../view/Exercicio/list.php";
    }

    function view()
    {
        // TODO: Implement view() method.
    }

    function create()
    {
        require __DIR__ ."/../view/Exercicio/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
    }

    function store()
    {
        $nome = $_POST["nome"];
        $tipo = $_POST["tipo"];

        $exercicio = new ExercicioVO(null, $tipo, $nome);
        ExercicioDAO::create($exercicio);

    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }
}