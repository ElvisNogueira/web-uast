<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Criar Contas</title>
</head>
<body>
    <h1>Cadastrar Contas</h1>
    <form action="/conta?id=<?php echo $conta->getId();?> " method="post">
        <input type="hidden" name="_method" value="PUT">
        <label for="campoNome">Nome: </label>
        <input type="text" name="nome" id="campoNome" value="<?php echo $conta->getNome()?>">
        <label for="comboTipo">Tipo: </label>
        <select name="tipo" id="comboTipo">
            <option value="">Selecione...</option>
            <option value="Entrada" <?php if($conta->getTipo()=="Entrada"){echo "selected";} ?> >Entrada</option>
            <option value="Saída" <?php if($conta->getTipo()=="Saída"){echo "selected";} ?> >Saída</option>
        </select>
        <br>
        <br>
        <label for="textDescricao">Descrição: </label>

        <br>
        <textarea name="descricao" id="textDescricao" cols="30" rows="10"><?php echo $conta->getDescricao()?></textarea>
        <br>
        <button type="submit">Editar</button>
    </form>
</body>
</html>
