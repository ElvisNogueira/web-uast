<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <table class="desktop">
        <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>TIPO</th>
        <th>DESCRIÇÃO</th>
        <th colspan="3">AÇÕES</th>
        </thead>

        <?php foreach ($contas as $c){ ?>
            <tr>
                <td><?php echo $c->getId()?></td>
                <td><?php echo $c->getNome()?></td>
                <td><?php echo $c->getTipo()?></td>
                <td><?php echo $c->getDescricao()?></td>
                <td>
                    <a href="/conta?id=<?php echo $c->getId(); ?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                    </a>
                </td>
                <td>
                    <a href="/conta?action=edit&id=<?php echo $c->getId();?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                    </a>
                </td>
                <td>
                    <form action="/conta?id=<?php echo $c->getId();?>" method="post">
                        <input type="hidden" name="_method" value="DELETE" >
                        <button type="submit" id="botaoApagar" class="acaoButton botoes">Excluir</button>
                    </form></td>
            </tr>
        <?php }?>

    </table>
    <table class="mobile">
        <thead>
        <th>ID</th>
        <th>NOME</th>
        <th colspan="3">AÇÕES</th>
        </thead>

        <?php foreach ($contas as $c){ ?>
            <tr>
                <td><?php echo $c->getId()?></td>
                <td><?php echo $c->getNome()?></td>
                <td>
                    <a href="/conta?id=<?php echo $c->getId(); ?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                    </a>
                </td>
                <td>
                    <a href="/conta?action=edit&id=<?php echo $c->getId();?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                    </a>
                </td>
                <td>
                    <form action="/conta?id=<?php echo $c->getId();?>" method="post">
                        <input type="hidden" name="_method" value="DELETE" >
                        <button type="submit" id="botaoApagar" class="acaoButton">Excluir</button>
                    </form></td>
            </tr>
        <?php }?>

    </table>
    <div class="botaoNovo">
        <a href="<?php echo "/conta?action=create"?>" id="botaoNovo">
            <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-mais-48.png" alt="Adicionar">

        </a>
        <div class="tooltip">
            <div>Novo</div>
        </div>
    </div>
</div>

<?php require_once __DIR__."/../layout/footer.php"?>
