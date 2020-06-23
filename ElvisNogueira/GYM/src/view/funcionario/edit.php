<?php $uf = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE",
    "PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO"); ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Editar Funcionário</title>
</head>
<body>
    <h1>Cadastrar Funcionário</h1>
    <form action="/funcionario?id=<?php echo $funcionario->getId();?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <label for="campoNome">Nome: </label>
            <input type="text" name="nome" id="campoNome" value="<?php echo $funcionario->getNome();?>">
            <br>
            <br>
            <label for="campoCpf">CPF: </label>
            <input type="text" name="cpf" id="campoCpf" value="<?php echo $funcionario->getCpf();?>">
            <br>
            <br>
            <label for="salarioCampo">Salario: R$</label>
            <input type="text" name="salario" id="salarioCampo" value="<?php echo $funcionario->getSalario();?>">
            <br>
            <br>
            <label for="diaPagCampo">Dia de Pagamento: </label>
            <input type="number" name="diaPag" id="diaPagCampo" value="<?php echo $funcionario->getDiaPagamento();?>">
            <br>
            <br>
            <label for="cargoCampo">Cargo: </label>
            <input type="text" name="cargo" id="cargoCampo" value="<?php echo $funcionario->getCargo();?>">
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <label for="campoCidade">Cidade: </label>
            <input type="text" name="cidade" id="campoCidade" value="<?php echo
                $funcionario->getEndereco()->getCidade();?>">
            <label for="comboUf">UF: </label>
            <select name="uf" id="comboUf">
                <option value="">Selecione uma UF...</option>
                <?php foreach ($uf as $estado){?>
                    <option value="<?php echo $estado;?>" <?php if($estado == $funcionario->getEndereco()->getUf()){
                        echo "selected";
                    }?> ><?php echo $estado;?></option>
                <?php }?>
            </select>
            <br>
            <br>
            <label for="campoCep">CEP: </label>
            <input type="text" name="cep" id="campoCep" value="<?php echo $funcionario->getEndereco()->getCep();?>">
            <br>
            <br>
            <label for="campoBairro">Bairro: </label>
            <input type="text" name="bairro" id="campoBairro" value="<?php echo $funcionario->getEndereco()->getBairro();?>">
            <br>
            <br>
            <label for="campoRua">Rua: </label>
            <input type="text" name="rua" id="campoRua" value="<?php echo $funcionario->getEndereco()->getRua();?>">

            <label for="campoNum">Número: </label>
            <input type="text" name="numero" id="campoNum" value="<?php echo $funcionario->getEndereco()->getNumero();?>">
        </fieldset>
        <fieldset>
            <legend>Dados de login</legend>
            <label for="loginCampo">Login: </label>
            <input type="text" name="login" id="loginCampo" value="<?php echo $funcionario->getLogin();?>">
            <?php echo $funcionario->getLogin();?>
            <br>
            <br>
            <label for="senhaCampo">Senha: </label>
            <input type="password" name="senha" id="senhaCampo" value="<?php echo $funcionario->getSenha();?>">
            <br>
            <br>
            <label for="confSenhaCampo">Confirmar senha: </label>
            <input type="password" name="confSenha" id="confSenhaCampo">
        </fieldset>
        <br>
        <button type="submit">Criar</button>
    </form>
</body>
</html>
