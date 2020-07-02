<?php $uf = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE",
    "PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO");?>

<?php require_once __DIR__ ."/../layout/header.php";?>

<div id="corpoPage">
    <h1>Cadastrar aluno</h1>
    <form action="/aluno" method="post">
        <fieldset >
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
                <label for="campoData">Data de Nascimento: </label>
                <input type="date" name="data_nasc" id="campoData">
            </div>

            <div class="label-top full-line">
                <label for="radioSexo">Sexo: </label>
                <input type="radio" name="sexo" id="radioSexo" value="Feminino"> Feminino
                <input type="radio" name="sexo" id="radioSexo" value="Masculino"> Masculino
            </div>
            <div class="label-top half-line">
                <label for="campoDataPag">Data de pagamento: </label>
                <select name="data_venc_pag" id="campoDataPag">
                    <option value="">Selecione uma data...</option>
                    <option value="1">1</option>
                    <option value="6">6</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                </select>
            </div>
            <div class="label-top half-line">
                <label for="campoTelefone">Telefone: </label>
                <input type="tel" name="telefone" id="campoTelefone" placeholder="(99) 9 9999-9999">
            </div>
        </fieldset>
        <?php require_once __DIR__."/../layout/enderecoForm.php"?>
        <button type="submit">Criar</button>
    </form>
</div>

<?php require_once __DIR__ ."/../layout/footer.php";?>