<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST']; ?>/css/listStyle.css">
    <title>GYM</title>
</head>
<body>
<h1>Contas</h1>
<table>
    <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>TIPO</th>
        <th>DESCRIÇÃO</th>
    </thead>

    <?php foreach ($contas as $c){ ?>
        <tr>
            <td><?php echo $c->getId()?></td>
            <td><?php echo $c->getNome()?></td>
            <td><?php echo $c->getTipo()?></td>
            <td><?php echo $c->getDescricao()?></td>
            <td><a href="/conta?id=<?php echo $c->getId(); ?>">Ver</a></td>
            <td><a href="/conta?action=edit&id=<?php echo $c->getId();?>">Editar</a></td>
            <td>
                <form action="/conta?id=<?php echo $c->getId();?>" method="post">
                    <input type="hidden" name="_method" value="DELETE" >
                    <button type="submit">Excluir</button>
                </form></td>
        </tr>
    <?php }?>
</table>
<a href="/conta?action=create">Nova Conta</a>
</body>
</html>
