<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
<table class="desktop">
    <thead>
        <th>ID</th>
        <th>DATA</th>
        <th>VALOR</th>
        <th>CONTA</th>
        <th>DESCRICAO</th>
        <th COLSPAN="3">AÇÕES</th>
    </thead>

    <?php foreach ($financas as $f){?>
        <tr>
            <td><?php echo $f->getId();?></td>
            <td><?php echo $f->getData();?></td>
            <td>R$ <?php echo $f->getValor();?></td>
            <td><?php echo $f->getConta()->getNome();?></td>
            <td><?php echo $f->getDescricao();?></td>
            <td>
                <a href="/financa?id=<?php echo $f->getId();?>">
                    <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                </a></td>
            <td><a href="/financa?action=edit&id=<?php echo $f->getId();?>">
                    <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                </a>
            </td>
            <td>
                <form action="/financa?id=<?php echo $f->getId();?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" id="botaoApagar" class="acaoButton botoes">Excluir</button>
                </form></td>
        </tr>
    <?php }?>
</table>
<table class="mobile">
    <thead>
        <th>DATA</th>
        <th>VALOR</th>
        <th COLSPAN="3">AÇÕES</th>
    </thead>

    <?php foreach ($financas as $f){?>
        <tr>
            <td><?php echo $f->getData();?></td>
            <td>R$ <?php echo $f->getValor();?></td>
            <td>
                <a href="/financa?id=<?php echo $f->getId();?>">
                    <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                </a></td>
            <td><a href="/financa?action=edit&id=<?php echo $f->getId();?>">
                    <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                </a>
            </td>
            <td>
                <form action="/financa?id=<?php echo $f->getId();?>" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" id="botaoApagar" class="acaoButton">Excluir</button>
                </form></td>
        </tr>
    <?php }?>
</table>

    <div class="botaoNovo">
        <a href="/financa?action=create" id="botaoNovo">
            <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-mais-48.png" alt="Adicionar">
        </a>
        <div class="tooltip">
            <div>Novo</div>
        </div>
    </div>
</div>



<?php require_once __DIR__."/../layout/footer.php"?>