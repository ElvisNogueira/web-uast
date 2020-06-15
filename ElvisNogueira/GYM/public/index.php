<?php
require __DIR__ . "/../autoload.php";
use GYM\src\model\vo\EnderecoVO;
use GYM\src\model\dao\EnderecoDAO;


$end = new EnderecoVO(null,"PE","Floresta", "56400-000","DNER", "5",50);

echo EnderecoDAO::create($end);

echo "eita porra";

$caminho = $_SERVER["PATH_INFO"];
$metodo = $_SERVER["REQUEST_METHOD"];


if($metodo == "POST"){
    if(isset($_POST['_method'])){
        $method = $_POST['_method'];
    }
}

switch ($caminho){
    case "/aluno":
        echo $caminho;
        break;
}

function metodo($controller, $method){
    switch ($method){
        case "POST":
            //Salvar
        case "GET":

            if (isset($_GET['action'])){
                if(isset($_GET["id"])){
                    //Editar campos
                }else{
                    //Campos criar
                }
            }else{
                if (isset($_GET["id"])){
                    //Ver por id
                }else{
                    //Ver todos
                }
            }

    }

}