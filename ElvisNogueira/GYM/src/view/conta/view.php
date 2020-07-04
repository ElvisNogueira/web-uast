<?php require_once __DIR__ ."/../layout/header.php";?>
<div id="corpoPage">
    <form class="viewClass">
        <fieldset>
            <legend>Conta</legend>
                <p><b>Nome:</b> <?php echo $conta->getNome(); ?></p>
                <p><b>Tipo:</b> <?php echo $conta->getTipo(); ?></p>
                <p><b>Descrição:</b> <?php echo $conta->getDescricao(); ?></p>
        </fieldset>
    </form>
</div>
<?php require_once __DIR__ ."/../layout/footer.php";?>