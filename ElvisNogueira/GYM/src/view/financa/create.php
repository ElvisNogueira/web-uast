<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <h1>Cadastro de Finanças</h1>
    <form action="/financa" method="post">
        <fieldset>
            <legend>Finança</legend>
            <div class="label-top half-line">
                <label for="dateCampo">Data: </label>
                <input type="date" name="data" id="dateCampo" >
            </div>
            <div class="label-top half-line"">
                <label for="valorCampo half-line">Valor:</label>
                <input type="text" name="valor" id="valorCampo" placeholder="R$">
            </div>
            <div class="label-top half-line">
                <label for="contaCombo">Conta:</label>
                <select name="conta" id="contaCombo">
                    <option value="">Selecione a conta...</option>
                    <?php foreach ($contas as $conta){?>
                        <option value="<?php echo $conta->getNome();?>"><?php echo $conta->getNome();?></option>
                    <?php }?>
                </select>
            </div>

            <div class="label-top full-line">
                <label for="descricaoArea">Descrição:</label>
                <textarea name="descricao" id="descricaoArea" cols="58" rows="10"></textarea>
            </div>
            
        </fieldset>
        <button type="submit">Criar</button>
    </form>
</div>

<?php require_once __DIR__."/../layout/footer.php"?>
