<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Cadastrar Finança</title>
</head>
<body>
    <h1>Criar Finança</h1>
    <form action="/financa" method="post">
        <fieldset>
            <legend>Finança</legend>
            <label for="dateCampo">Data: </label>
            <input type="date" name="data" id="dateCampo">
            <label for="valorCampo">Valor: R$</label>
            <input type="text" name="valor" id="valorCampo">
            <br>
            <br>
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
</body>
</html>
