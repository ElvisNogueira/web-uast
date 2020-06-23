<?php
require __DIR__ . "/../autoload.php";

use GYM\src\controller\AlunoController;
use GYM\src\controller\ContaController;
use GYM\src\controller\FinancaController;
use GYM\src\controller\FuncionarioController;

$caminho = $_SERVER["PATH_INFO"];
$metodo = $_SERVER["REQUEST_METHOD"];


if($metodo == "POST"){
    if(isset($_POST['_method'])){
        $metodo = $_POST['_method'];
        echo "O método é ".$metodo;
    }
}

switch ($caminho){
    case "/aluno":
        $controller = new AlunoController();
        metodo($controller,$metodo);
        break;
    case "/conta":
        $controller = new ContaController();
        metodo($controller,$metodo);
        break;
    case "/financa":
        $controller = new FinancaController();
        metodo($controller,$metodo);
        break;
    case "/funcionario":
        $controller = new FuncionarioController();
        metodo($controller,$metodo);
        break;
    case "/info":
        echo phpinfo();
        break;
}

function metodo($controller, $method){
    switch ($method){
        case "POST":
            $controller->store();
            break;
        case "GET":

            if (isset($_GET['action'])){
                if(isset($_GET["id"])){
                    $controller->edit();
                }else{
                    $controller->create();
                }
            }else{
                if (isset($_GET["id"])){
                    $controller->view();
                    break;
                }else{
                    $controller->index();
                }
            }
        break;
        case "PUT":
            $controller->update();
            break;
        case "DELETE":
            $controller->delete();
            break;
    }

}