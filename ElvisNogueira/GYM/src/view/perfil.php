<?php $uf = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE",
    "PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO"); ?>

<?php require_once __DIR__."/layout/header.php"; ?>
<div id="corpoPage">
    <h1>Meu Perfil</h1>
    <form action="/funcionario?id=<?php echo $funcionario->getId();?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <div class="label-top full-line">
                <label for="campoNome">Nome: </label>
                <input type="text" name="nome" id="campoNome" value="<?php echo $funcionario->getNome();?> " disabled>
            </div>
            <div class="label-top half-line">
                <label for="campoCpf">CPF: </label>
                <input type="text" name="cpf" id="campoCpf" value="<?php echo $funcionario->getCpf();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="salarioCampo">Salario: R$</label>
                <input type="text" name="salario" id="salarioCampo" value="<?php echo $funcionario->getSalario();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="diaPagCampo">Dia de Pagamento: </label>
                <input type="number" name="diaPag" id="diaPagCampo" value="<?php echo $funcionario->getDiaPagamento();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="cargoCampo">Cargo: </label>
                <input type="text" name="cargo" id="cargoCampo" value="<?php echo $funcionario->getCargo();?>" disabled>
            </div>
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <div class="label-top half-line">
                <label for="campoCep">CEP: </label>
                <input type="text" name="cep" id="campoCep" value="<?php echo $funcionario->getEndereco()->getCep();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="campoCidade">Cidade: </label>
                <input type="text" name="cidade" id="campoCidade" value="<?php echo
                $funcionario->getEndereco()->getCidade();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="comboUf">UF: </label>
                <select name="uf" id="comboUf" disabled>
                    <option value="">Selecione uma UF...</option>
                    <?php foreach ($uf as $estado){?>
                        <option value="<?php echo $estado;?>" <?php if($estado == $funcionario->getEndereco()->getUf()){
                            echo "selected";
                        }?> ><?php echo $estado;?></option>
                    <?php }?>
                </select>
            </div>
            <div class="label-top half-line">
                <label for="campoBairro">Bairro: </label>
                <input type="text" name="bairro" id="campoBairro" value="<?php echo $funcionario->getEndereco()->getBairro();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="campoRua">Rua: </label>
                <input type="text" name="rua" id="campoRua" value="<?php echo $funcionario->getEndereco()->getRua();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="campoNum">Número: </label>
                <input type="text" name="numero" id="campoNum" value="<?php echo $funcionario->getEndereco()->getNumero();?>" disabled>
            </div>
        </fieldset>
        <fieldset>
            <legend>Dados de login</legend>
            <div class="label-top full-line">
                <label for="loginCampo">Login: </label>
                <input type="text" name="login" id="loginCampo" value="<?php echo $funcionario->getLogin();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="senhaCampo">Senha: </label>
                <input type="password" name="senha" id="senhaCampo" value="<?php echo $funcionario->getSenha();?>" disabled>
            </div>
            <div class="label-top half-line">
                <label for="confSenhaCampo">Confirmar senha: </label>
                <input type="password" name="confSenha" id="confSenhaCampo" disabled>
            </div>
        </fieldset>
        <br>
        <button type="submit">Criar</button>
    </form>
</div>
<?php require_once __DIR__."/layout/footer.php"?>
