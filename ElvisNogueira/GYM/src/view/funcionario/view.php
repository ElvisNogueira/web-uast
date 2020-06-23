<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Funcionario</title>
</head>
<body>
    <h1>Dados Pessoais</h1>
    <p>Nome: <?php echo $funcionario->getNome(); ?></p>
    <p>CPF: <?php echo $funcionario->getCpf(); ?></p>
    <p>Data de pagamento: <?php echo $funcionario->getDiaPagamento(); ?></p>
    <p>Salário: <?php echo $funcionario->getSalario(); ?></p>

    <h1>Endereço</h1>

    <p>Cidade: <?php echo $funcionario->getEndereco()->getCidade(); ?></p>
    <p>UF: <?php echo $funcionario->getEndereco()->getUf(); ?></p>
    <p>CEP: <?php echo $funcionario->getEndereco()->getCep(); ?></p>
    <p>Bairro: <?php echo $funcionario->getEndereco()->getBairro(); ?></p>
    <p>Rua: <?php echo $funcionario->getEndereco()->getRua(); ?></p>
    <p>Número: <?php echo $funcionario->getEndereco()->getNumero(); ?></p>

    <h1>Dados de login</h1>
    <p>Login: <?php echo $funcionario->getLogin(); ?></p>
</body>
</html>
