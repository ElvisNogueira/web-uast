<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | View Conta</title>
</head>
<body>
    <h1>Conta</h1>
    <p>Nome: <?php echo $conta->getNome(); ?></p>
    <p>Tipo: <?php echo $conta->getTipo(); ?></p>
    <p>Descrição: <?php echo $conta->getDescricao(); ?></p>
</body>
</html>
