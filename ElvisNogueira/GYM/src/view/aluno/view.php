<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Aluno</title>
</head>
<body>

    <h1>Dados Pessoais</h1>
    <p>Nome: <?php echo $aluno->getNome(); ?></p>
    <p>CPF: <?php echo $aluno->getCpf(); ?></p>
    <p>Data Nascimento: <?php echo $aluno->getDataNasc(); ?></p>
    <p>Sexo: <?php echo $aluno->getSexo(); ?></p>
    <p>Dia de Vencimento: <?php echo $aluno->getDataVencPag(); ?></p>
    <p>Telefone: <?php echo $aluno->getTelefone(); ?></p>
    <h1>Endereço</h1>
    <p>Cidade: <?php echo $aluno->getEndereco()->getCidade(); ?></p>
    <p>UF: <?php echo $aluno->getEndereco()->getUf(); ?></p>
    <p>CEP: <?php echo $aluno->getEndereco()->getCep(); ?></p>
    <p>Bairro: <?php echo $aluno->getEndereco()->getBairro(); ?></p>
    <p>Rua: <?php echo $aluno->getEndereco()->getRua(); ?></p>
    <p>Número: <?php echo $aluno->getEndereco()->getNumero(); ?></p>

</body>
</html>
