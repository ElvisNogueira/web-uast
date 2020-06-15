<?php



require __DIR__ . "/../autoload.php";

use Projeto_GYM\src\controller\ExercicioController;

$caminho = $_SERVER['PATH_INFO'];
$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST"){
    if(isset($_POST['_method'])){
        $method = $_POST['_method'];
    }
}


switch ($caminho){
    case "":
        echo "hey";
        break;
    case "/anamnese";
        echo "anamnese";
        break;
    case "/exercicio":
        $exercicioController = new ExercicioController();
        metodo($exercicioController, $method);
        break;
}

function metodo($controller, $method){
    switch ($method){
        case "POST":
            $controller->store();
        case "GET":

            if (isset($_GET['action'])){
                if(isset($_GET["id"])){
                    $controller->edit();
                }else{
                    $controller->create();
                }
            }else{
                if (isset($_GET["id"])){

                }else{
                    $controller->index();
                }
            }

    }

}


