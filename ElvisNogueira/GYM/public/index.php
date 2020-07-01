<?php
require __DIR__ . "/../autoload.php";

use GYM\src\controller\AlunoController;
use GYM\src\controller\ContaController;
use GYM\src\controller\FinancaController;
use GYM\src\controller\FuncionarioController;
use GYM\src\controller\LoginController;


if(($caminho = $_SERVER["PATH_INFO"]) == null){
    header("Location: /login");
}
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
    case "/logout":
    case "/login":
        $controller = new LoginController();
        metodo($controller,$metodo);
        break;
    case "/home":
        require "../src/view/home.php";
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
                }else if($_GET['action'] == "logout"){
                    $controller->logout();
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
        case "LOGIN":
            $controller->logar();
            break;
    }

}