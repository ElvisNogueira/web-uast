<?php ?>

<fieldset>
    <legend>Endereço</legend>

    <div class="label-top half-line">
        <label for="campoCep">CEP: </label>
        <input type="text" name="cep" id="campoCep" placeholder="99999-999">
    </div>

    <div class="label-top half-line">
        <label for="campoCidade">Cidade: </label>
        <input type="text" name="cidade" id="campoCidade">
    </div>
    <div class="label-top half-line">
        <label for="comboUf">UF: </label>
        <select name="uf" id="comboUf">
            <option value="">Selecione uma UF...</option>
            <?php foreach ($uf as $estado){?>
                <option value="<?php echo $estado;?>"><?php echo $estado;?></option>
            <?php }?>
        </select>
    </div>

    <div class="label-top half-line">
        <label for="campoBairro">Bairro: </label>
        <input type="text" name="bairro" id="campoBairro">
    </div>

    <div class="label-top full-line">
        <label for="campoRua">Rua: </label>
        <input type="text" name="rua" id="campoRua">
    </div>
    <div class="label-top half-line">
        <label for="campoNum">Número: </label>
        <input type="text" name="numero" id="campoNum">
    </div>
</fieldset>
