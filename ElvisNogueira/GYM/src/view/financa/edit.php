<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Finança</h1>
    <form action="/financa?id=<?php echo $financa->getId()?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <fieldset>
            <legend>Finança</legend>
            <label for="dateCampo">Data: </label>
            <input type="date" name="data" id="dateCampo" value="<?php echo $financa->getData()?>">
            <label for="valorCampo">Valor: R$</label>
            <input type="text" name="valor" id="valorCampo"value="<?php echo $financa->getValor()?>">
            <br>
            <br>
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
            <br>
            <br>
            <label for="descricaoArea">Descrição:</label>
            <br>
            <textarea name="descricao" id="descricaoArea" cols="58" rows="10" >
                <?php echo $financa->getDescricao()?>
            </textarea>

            
        </fieldset>
        <br>
        <br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
