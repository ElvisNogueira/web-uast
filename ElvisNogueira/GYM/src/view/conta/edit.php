<?php require_once __DIR__ ."/../layout/header.php";?>

<div id="corpoPage">
    <h1>Editar Conta</h1>
    <form action="/conta?id=<?php echo $conta->getId();?> " method="post">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Conta</legend>
            <div class="label-top full-line">
                <label for="campoNome">Nome: </label>
                <input type="text" name="nome" id="campoNome" value="<?php echo $conta->getNome()?>">
            </div>
            <div class="label-top full-line">
                <label for="textDescricao">Descrição: </label>
                <textarea name="descricao" id="textDescricao" cols="30" rows="10"><?php echo $conta->getDescricao()?></textarea>
            </div>
            <div class="label-top half-line">
                <label for="comboTipo">Tipo: </label>
                <select name="tipo" id="comboTipo">
                    <option value="">Selecione...</option>
                    <option value="Entrada" <?php if($conta->getTipo()=="Entrada"){echo "selected";} ?> >Entrada</option>
                    <option value="Saída" <?php if($conta->getTipo()=="Saída"){echo "selected";} ?> >Saída</option>
                </select>
            </div>
        </fieldset>
        <button type="submit">Editar</button>
    </form>
</div>

<?php require_once __DIR__ ."/../layout/footer.php";?>
