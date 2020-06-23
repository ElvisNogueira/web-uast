<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Finança</title>
</head>
<body>
    <p>Data: <?php echo $financa->getData();?></p>
    <p>Conta: <?php echo $financa->getConta()->getNome();?></p>
    <p>Valor: <?php echo $financa->getValor();?></p>
    <p>Descrição: <?php echo $financa->getDescricao();?></p>
</body>
</html>
