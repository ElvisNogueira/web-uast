<?php
?>

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
    <a href="/exercicio?action=create">Novo Exercicio</a>
    <table>
        <tr>
            <td>id</td>
            <td>Nome</td>
            <td>Tipo</td>
        </tr>
        <?php foreach ($exercicios as $exercicio) {?>
            <tr>
                <td><?php echo $exercicio->getId() ?></td>
                <td><?php echo $exercicio->getNome() ?></td>
                <td><?php echo $exercicio->getTipo() ?></td>
                <td><a href="/exercicio?action=edit&id=<?php echo $exercicio->getId() ?>">Editar</a></td>
            </tr>
        <?php }?>
    </table>

</body>
</html>
