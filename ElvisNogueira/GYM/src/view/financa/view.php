<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <form class="viewClass">
        <fieldset>
            <legend>Finança</legend>
            <p><b>Data:</b> <?php echo $financa->getData();?></p>
            <p><b>Conta:</b> <?php echo $financa->getConta()->getNome();?></p>
            <p><b>Valor:</b> <?php echo $financa->getValor();?></p>
            <p><b>Descrição:</b> <?php echo $financa->getDescricao();?></p>
        </fieldset>
    </form>
</div>

<?php require_once __DIR__."/../layout/footer.php"?>
