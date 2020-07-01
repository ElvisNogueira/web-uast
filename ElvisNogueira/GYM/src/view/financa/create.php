<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <h1>Cadastro de Finanças</h1>
    <form action="/financa" method="post">
        <fieldset>
            <legend>Finança</legend>
            <label for="dateCampo">Data: </label>
            <input type="date" name="data" id="dateCampo" placeholder=" ">
            <div class="label-float">
                <input type="text" name="valor" id="valorCampo" placeholder=" ">
                <label for="valorCampo">Valor: R$</label>
            </div>

            
            <label for="contaCombo">Conta:</label>
            <select name="conta" id="contaCombo">
                <option value="">Selecione a conta...</option>
                <?php foreach ($contas as $conta){?>
                    <option value="<?php echo $conta->getNome();?>"><?php echo $conta->getNome();?></option>
                <?php }?>
            </select>
            <br>
            <br>
            <label for="descricaoArea">Descrição:</label>
            <br>
            <textarea name="descricao" id="descricaoArea" cols="58" rows="10"></textarea>

            
        </fieldset>
        <br>
        <br>
        <button type="submit">Criar</button>
    </form>
</div>

<?php require_once __DIR__."/../layout/footer.php"?>
