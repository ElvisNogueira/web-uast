<?php ?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//<?php echo $_SERVER['HTTP_HOST'];?>/css/listStyle.css">
    <title>Document</title>
</head>
<body>
<h1>Finanças</h1>
<table>
    <thead>
        <th>ID</th>
        <th>DATA</th>
        <th>Valor</th>
        <th>CONTA</th>
        <th>DESCRICAO</th>
    </thead>

    <?php foreach ($financas as $f){?>
        <tr>
            <td><?php echo $f->getId();?></td>
            <td><?php echo $f->getData();?></td>
            <td>R$ <?php echo $f->getValor();?></td>
            <td><?php echo $f->getConta()->getNome();?></td>
            <td><?php echo $f->getDescricao();?></td>
            <td><a href="/financa?id=<?php echo $f->getId();?>">Ver</a></td>
            <td><a href="/financa?action=edit&id=<?php echo $f->getId();?>">Editar</a></td>
            <td>
                <form action="/financa?id=<?php echo $f->getId();?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Excluir</button>
                </form></td>
        </tr>
    <?php }?>
</table>
<a href="/financa?action=create">Nova Finança</a>
</body>
</html>
