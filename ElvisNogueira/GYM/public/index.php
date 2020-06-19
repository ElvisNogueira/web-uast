<?php
require __DIR__ . "/../autoload.php";

use GYM\src\controller\AlunoController;
use GYM\src\controller\ContaController;

$caminho = $_SERVER["PATH_INFO"];
$metodo = $_SERVER["REQUEST_METHOD"];


if($metodo == "POST"){
    if(isset($_POST['_method'])){
        $metodo = $_POST['_method'];
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