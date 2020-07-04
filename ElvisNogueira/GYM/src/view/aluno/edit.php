<?php $uf = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE",
    "PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO");?>

<?php require_once __DIR__ ."/../layout/header.php";?>

<div id="corpoPage">
    <h1>Cadastrar aluno</h1>
    <form action="/aluno?id=<?php echo $aluno->getId();?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <fieldset >

            <legend>Dados Pessoais</legend>
            <div class="label-top full-line">
                <label for="campoNome">Nome: </label>
                <input type="text" name="nome" id="campoNome" value="<?php echo $aluno->getNome();?>">
            </div>

            <div class="label-top half-line">
                <label for="campoCpf">CPF: </label>
                <input type="text" name="cpf" id="campoCpf" value="<?php echo $aluno->getCpf();?>">
            </div>
            <div class="label-top half-line">
                <label for="campoData">Data de Nascimento: </label>
                <input type="date" name="data_nasc" id="campoData" value="<?php echo $aluno->getDataNasc();?>">
            </div>
            <div class="label-top full-line">
            <label for="radioSexo">Sexo: </label>
                <input type="radio" name="sexo" id="radioSexo" value="Feminino" <?php if($aluno->getSexo()=="Feminino"){
                    echo "checked";
                }?> > Feminino
                <input type="radio" name="sexo" id="radioSexo" value="Masculino"  <?php if($aluno->getSexo()=="Masculino"){
                    echo "checked";
                }?> > Masculino
            </div>
            <div class="label-top half-line">
                <label for="campoDataPag">Data de pagamento: </label>
                <select name="data_venc_pag" id="campoDataPag">
                    <option value="">Selecione uma data...</option>
                    <option value="1" <?php if($aluno->getDataVencPag()==1){
                        echo "selected";
                    }?> >1</option>
                    <option value="6" <?php if($aluno->getDataVencPag()==6){
                        echo "selected";
                    }?> >6</option>
                    <option value="15" <?php if($aluno->getDataVencPag()==15){
                        echo "selected";
                    }?> >15</option>
                    <option value="20" <?php if($aluno->getDataVencPag()==20){
                        echo "selected";
                    }?> >20</option>
                    <option value="30" <?php if($aluno->getDataVencPag()==30){
                        echo "selected";
                    }?> >30</option>
                </select>
            </div>
            <div class="label-top half-line">
                <label for="campoTelefone">Telefone: </label>
                <input type="tel" name="telefone" id="campoTelefone" value="<?php echo $aluno->getTelefone();?>">
            </div>
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <div class="label-top half-line">
                <label for="campoCep">CEP: </label>
                <input type="text" name="cep" id="campoCep" value="<?php echo $aluno->getEndereco()->getCep();?>">
            </div>
            <div class="label-top half-line">
                <label for="campoCidade">Cidade: </label>
                <input type="text" name="cidade" id="campoCidade" value="<?php echo $aluno->getEndereco()->getCidade();?>">
            </div>

            <div class="label-top half-line">
                <label for="comboUf">UF: </label>
                <select name="uf" id="comboUf">
                    <option value="">Selecione uma UF...</option>
                    <?php foreach ($uf as $estado){?>
                        <option value="<?php echo $estado;?>" <?php if($estado==$aluno->getEndereco()->getUf()){
                            echo "selected";} ?>><?php echo $estado;?></option>
                    <?php }?>
                </select>
            </div>
            <div class="label-top half-line">
                <label for="campoBairro">Bairro: </label>
                <input type="text" name="bairro" id="campoBairro" value="<?php echo $aluno->getEndereco()->getBairro();?>">
            </div>
            <div class="label-top full-line">
                <label for="campoRua">Rua: </label>
                <input type="text" name="rua" id="campoRua"  value="<?php echo $aluno->getEndereco()->getRua();?>">
            </div>
            <div class="label-top half-line">
                <label for="campoNum">Número: </label>
                <input type="text" name="numero" id="campoNum" value="<?php echo $aluno->getEndereco()->getNumero();?>">
            </div>
        </fieldset>
        <br>
        <button type="submit">Salvar</button>
    </form>
</div>

<?php require_once __DIR__ ."/../layout/footer.php";?>
