<?php $uf = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE",
    "PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO");?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Cadastro de aluno</title>
</head>
<body>
    <h1>Cadastrar aluno</h1>
    <form action="/aluno" method="post">
        <fieldset >
            <legend>Dados Pessoais</legend>
            <label for="campoNome">Nome: </label>
            <input type="text" name="nome" id="campoNome">
            <br>
            <br>
            <label for="campoCpf">CPF: </label>
            <input type="text" name="cpf" id="campoCpf">
            <br>
            <br>
            <label for="campoData">Data de Nascimento: </label>
            <input type="date" name="data_nasc" id="campoData">
            <br>
            <br>
            <label for="radioSexo">Sexo: </label>
            <input type="radio" name="sexo" id="radioSexo" value="Feminino"> Feminino
            <input type="radio" name="sexo" id="radioSexo" value="Masculino"> Masculino
            <br>
            <br>
            <label for="campoDataPag">Data de pagamento: </label>
            <select name="data_venc_pag" id="campoDataPag">
                <option value="">Selecione uma data...</option>
                <option value="1">1</option>
                <option value="6">6</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="30">30</option>
            </select>
            <label for="campoTelefone">Telefone: </label>
            <input type="tel" name="telefone" id="campoTelefone">
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <label for="campoCidade">Cidade: </label>
            <input type="text" name="cidade" id="campoCidade">
            <label for="comboUf">UF: </label>
            <select name="uf" id="comboUf">
                <option value="">Selecione uma UF...</option>
                <?php foreach ($uf as $estado){?>
                    <option value="<?php echo $estado;?>"><?php echo $estado;?></option>
                <?php }?>
            </select>
            <br>
            <br>
            <label for="campoCep">CEP: </label>
            <input type="text" name="cep" id="campoCep">
            <br>
            <br>
            <label for="campoBairro">Bairro: </label>
            <input type="text" name="bairro" id="campoBairro">
            <br>
            <br>
            <label for="campoRua">Rua: </label>
            <input type="text" name="rua" id="campoRua">

            <label for="campoNum">Número: </label>
            <input type="text" name="numero" id="campoNum">
        </fieldset>
        <br>
        <button type="submit">Criar</button>
    </form>
</body>
</html>
