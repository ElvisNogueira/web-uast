<?php require_once __DIR__."/../layout/header.php"; ?>
<div id="corpoPage">
    <h1>Editar Finança</h1>
    <form action="/financa?id=<?php echo $financa->getId()?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Finança</legend>
            <div class="label-top half-line">
                <label for="dateCampo">Data: </label>
                <input type="date" name="data" id="dateCampo" value="<?php echo $financa->getData()?>">
            </div>
            <div class="label-top half-line">
                <label for="valorCampo">Valor: R$</label>
                <input type="text" name="valor" id="valorCampo"value="<?php echo $financa->getValor()?>">
            </div>
            <div class="label-top half-line">
                <label for="contaCombo">Conta:</label>
                <select name="conta" id="contaCombo">
                    <option value="">Selecione a conta...</option>
                    <?php foreach ($contas as $c){?>
                        <option value="<?php echo $c->getNome();?>" <?php if($c->getNome() == $conta->getNome()){
                            echo "selected";} ?> >
                            <?php echo $conta->getNome();?>
                        </option>
                    <?php }?>
                </select>
            </div>
            <div class="label-top full-line">
                <label for="descricaoArea">Descrição:</label>
                <textarea name="descricao" id="descricaoArea" cols="58" rows="10" >
                    <?php echo $financa->getDescricao()?>
                </textarea>
            </div>
            
        </fieldset>
        <button type="submit">Salvar</button>
    </form>
</div>
<?php require_once __DIR__."/../layout/footer.php"?>
