<?php $uf = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE",
    "PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO"); ?>

<?php require_once __DIR__ ."/../layout/header.php";?>

<div id="corpoPage">
    <h1>Cadastrar Funcionário</h1>
    <form action="/funcionario" method="post">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <div class="label-top full-line">
                <label for="campoNome">Nome: </label>
                <input type="text" name="nome" id="campoNome">
            </div>

            <div class="label-top half-line">
                <label for="campoCpf">CPF: </label>
                <input type="text" name="cpf" id="campoCpf" placeholder="999.999.999-99">
            </div>

            <div class="label-top half-line">
                <label for="salarioCampo">Salario: R$</label>
                <input type="text" name="salario" id="salarioCampo" placeholder="R$ 99,99">
            </div>
            <div class="label-top half-line">
                <label for="diaPagCampo">Dia de Pagamento: </label>
                <input type="number" name="diaPag" id="diaPagCampo">
            </div>
            <div class="label-top half-line">
                <label for="cargoCampo">Cargo: </label>
                <input type="text" name="cargo" id="cargoCampo">
            </div>
        </fieldset>

        <?php require_once __DIR__."/../layout/enderecoForm.php"?>

        <fieldset>
            <legend>Dados de login</legend>
            <div class="label-top half-line">
                <label for="loginCampo">Login: </label>
                <input type="text" name="login" id="loginCampo">
            </div>
            <div class="label-top half-line">
                <label for="senhaCampo">Senha: </label>
                <input type="password" name="senha" id="senhaCampo">
            </div>
            <div class="label-top half-line">
                <label for="confSenhaCampo">Confirmar senha: </label>
                <input type="password" name="confSenha" id="confSenhaCampo">
            </div>
        </fieldset>
        <br>
        <button type="submit">Criar</button>
    </form>

    <?php require_once __DIR__ ."/../layout/footer.php";?>
