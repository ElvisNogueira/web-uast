<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <table class="desktop">
        <thead>
        <th>ID</th>
        <th>NOME</th>
        <th>CPF</th>
        <th>CARGO</th>
        <th colspan="3">AÇÕES</th>
        </thead>
        <?php foreach ($funcionarios as $f){ ?>
            <tr>
                <td><?php echo $f->getId();?></td>
                <td><?php echo $f->getNome();?></td>
                <td><?php echo $f->getCpf();?></td>
                <td><?php echo $f->getCargo(); ?></td>
                <td>
                    <a href="/funcionario?id=<?php echo $f->getId();?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                    </a>
                </td>
                <td>
                    <a href="/funcionario?action=edit&id=<?php echo $f->getId();?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                    </a>
                </td>
                <td>
                    <form action="/funcionario?id=<?php echo $f->getId();?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" id="botaoApagar" class="acaoButton">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>
    <table class="mobile">
        <thead>
        <th>ID</th>
        <th>NOME</th>
        <th colspan="3">AÇÕES</th>
        </thead>
        <?php foreach ($funcionarios as $f){ ?>
            <tr>
                <td><?php echo $f->getId();?></td>
                <td><?php echo $f->getNome();?></td>
                <td>
                    <a href="/funcionario?id=<?php echo $f->getId();?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                    </a>
                </td>
                <td>
                    <a href="/funcionario?action=edit&id=<?php echo $f->getId();?>">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                    </a>
                </td>
                <td>
                    <form action="/funcionario?id=<?php echo $f->getId();?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" id="botaoApagar" class="acaoButton botoes">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>
    <br>
    <div class="botaoNovo">
        <a href="/funcionario?action=create" id="botaoNovo">
            <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-mais-48.png" alt="Adicionar">
        </a>

        <div class="tooltip">
            <div>Novo</div>
        </div>
    </div>
</div>

<?php require_once __DIR__."/../layout/footer.php"?>