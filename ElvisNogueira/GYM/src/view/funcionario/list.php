<?php ?>

<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST'];?>/css/listStyle.css">
    <title>GYM | Funcionarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <table>
        <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>CPF</th>
        <th>CARGO</th>
        </thead>
        <?php foreach ($funcionarios as $f){ ?>
            <tr>
                <td><?php echo $f->getId();?></td>
                <td><?php echo $f->getNome();?></td>
                <td><?php echo $f->getCpf();?></td>
                <td><?php echo $f->getCargo(); ?></td>
                <td><a href="/funcionario?id=<?php echo $f->getId();?>">Ver</a></td>
                <td><a href="/funcionario?action=edit&id=<?php echo $f->getId();?>">Editar</a></td>
                <td>
                    <form action="/funcionario?id=<?php echo $f->getId();?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>
    <br>
    <a href="/funcionario?action=create">Novo Funcionario</a>

</body>
</html>

