<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <table class="desktop">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
                <th>SEXO</th>
                <th colspan="3">AÇÕES</th>
            </tr>
        </thead>

        <?php foreach ($alunos as $a){?>
            <tr>
                <td><?php echo $a->getId();?></td>
                <td><?php echo $a->getNome();?></td>
                <td><?php echo $a->getCpf(); ?></td>
                <td><?php echo $a->getSexo(); ?></td>
                <td>
                    <a href="/aluno?id=<?php echo $a->getId(); ?>" class="acaoButton">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                    </a>
                </td>
                <td>
                    <a href="/aluno?action=edit&id=<?php echo $a->getId(); ?>" class="acaoButton">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                    </a>
                </td>
                <td>
                    <form action="/aluno?id=<?php echo $a->getId(); ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" id="botaoApagar" class="acaoButton botoes">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <table class="mobile">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th colspan="3">AÇÕES</th>
            </tr>
        </thead>

        <?php foreach ($alunos as $a){?>
            <tr>
                <td><?php echo $a->getId();?></td>
                <td><?php echo $a->getNome();?></td>
                <td>
                    <a href="/aluno?id=<?php echo $a->getId(); ?>" class="acaoButton">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-visualizar-arquivo-24.png" alt="">
                    </a>
                </td>
                <td>
                    <a href="/aluno?action=edit&id=<?php echo $a->getId(); ?>" class="acaoButton">
                        <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-editar-24.png" alt="" >
                    </a>
                </td>
                <td>
                    <form action="/aluno?id=<?php echo $a->getId(); ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" id="botaoApagar" class="acaoButton">Apagar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="botaoNovo">
        <a href="/aluno?action=create" id="botaoNovo">
            <img src="//<?php echo $_SERVER['HTTP_HOST'];?>/imagens/icons8-mais-48.png" alt="Adicionar">
        </a>

        <div class="tooltip">
            <div>Novo</div>
        </div>
    </div>

</div>
<?php require_once __DIR__."/../layout/footer.php"?>
