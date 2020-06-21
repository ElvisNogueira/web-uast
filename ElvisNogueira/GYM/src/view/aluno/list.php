<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//<?php echo $_SERVER["HTTP_HOST"]; ?>/css/listStyle.css">
    <title>GYM | Alunos</title>
</head>
<body>
    <p><?php echo $_SERVER["HTTP_HOST"]; ?></p>
    <h1>Alunos</h1>
    <table>
        <thead>
        <th>ID</th>
        <th>NOME</th>
        </thead>

        <?php foreach ($alunos as $a){?>
            <tr>
                <td><?php echo $a->getId();?></td>
                <td><?php echo $a->getNome();?></td>
                <td><a href="/aluno?id=<?php echo $a->getId(); ?>">Ver</a></td>
                <td><a href="/aluno?action=edit&id=<?php echo $a->getId(); ?>">Editar</a></td>
                <td>
                    <form action="/aluno?id=<?php echo $a->getId(); ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="/aluno?action=create">Novo aluno</a>

</body>
</html>
