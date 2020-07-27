<?php


namespace GYM\src\controller;


use Cassandra\Date;
use GYM\src\model\dao\AlunoDAO;
use GYM\src\model\dao\ConfiguracaoDAO;
use GYM\src\model\dao\ContaDAO;
use GYM\src\model\dao\FinancaDAO;
use GYM\src\model\dao\MensalidadeDAO;
use GYM\src\model\vo\FinancaVO;
use GYM\src\model\vo\MensalidadeVO;

class MensalidadeController implements  InterfaceController
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
        $aluno = AlunoDAO::getById($_GET['idAluno']);
        $conf = ConfiguracaoDAO::getById(1);


        $data_criada = $this->criarData();
        $data_venc = date_add($data_criada,date_interval_create_from_date_string("1 month"));

        $data_venc = date_format($data_venc,"Y-m-d");

        $mensalidade = new MensalidadeVO(null,$conf->getValorMensalidade(),0,
            $conf->getValorMensalidade(), $aluno,$data_venc,"À pagar");

        require_once __DIR__ . "/../view/mensalidade/create.php";
    }

    function edit()
    {
        // TODO: Implement edit() method.
    }

    function store()
    {
        $nome = $_POST["nome"];
        $dataVenc = $_POST["dataVenc"];
        $valor = $_POST["valor"];
        $desconto = $_POST["desconto"];
        $total = $_POST["total"];
        $aluno = AlunoDAO::getById($_POST["idAluno"]);

        $mensalidade = new MensalidadeVO(null,$valor,$desconto,$total,$aluno,$dataVenc,"À pagar");

        MensalidadeDAO::create($mensalidade);
        header("Location: /aluno");
    }

    function pagar(){

        $idMensalidade = $_POST['idMensalidade'];
        $mensalidade = MensalidadeDAO::getById(2);
        $dataPagamento = $this->criarData();
        $dataPagamentoString = date_format($dataPagamento,"Y-m-d");
        $valor = $mensalidade->getValor();
        $conta = ContaDAO::getByNome("Mensalidade");
        $descricao = "Mensalidade paga por ".$mensalidade->getAluno()->getNome().".";

        $mensalidade->setStatus("Pago");

        MensalidadeDAO::pagar($idMensalidade);

        $financa = new FinancaVO(null,$dataPagamentoString,$descricao,$valor,$conta);

        FinancaDAO::create($financa);
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function criarData(){
        $data_atual = getdate();

        $dia = $data_atual["mday"];
        $mes = $data_atual["mon"];
        $ano = $data_atual["year"];

        if($mes<10){
            $mes = "0".$mes;
        }

        if ($dia<10){
            $dia = "0".$dia;
        }

        return date_create($ano . "-" . $mes . "-" . $dia);
    }
}