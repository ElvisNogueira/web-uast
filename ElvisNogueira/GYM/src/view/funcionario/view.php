<?php require_once __DIR__."/../layout/header.php"; ?>
<div id="corpoPage">
    <form class="viewClass">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <p><b>Nome:</b> <?php echo $funcionario->getNome(); ?></p>
            <p><b>CPF:</b> <?php echo $funcionario->getCpf(); ?></p>
            <p><b>Data de pagamento:</b> <?php echo $funcionario->getDiaPagamento(); ?></p>
            <p><b>Salário:</b> <?php echo $funcionario->getSalario(); ?></p>
        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <p><b>Cidade:</b> <?php echo $funcionario->getEndereco()->getCidade(); ?></p>
            <p><b>UF:</b> <?php echo $funcionario->getEndereco()->getUf(); ?></p>
            <p><b>CEP:</b> <?php echo $funcionario->getEndereco()->getCep(); ?></p>
            <p><b>Bairro:</b> <?php echo $funcionario->getEndereco()->getBairro(); ?></p>
            <p><b>Rua:</b> <?php echo $funcionario->getEndereco()->getRua(); ?></p>
            <p><b>Número:</b> <?php echo $funcionario->getEndereco()->getNumero(); ?></p>
        </fieldset>
        <fieldset>
            <legend>Dados de login</legend>
            <p><b>Login:</b><?php echo $funcionario->getLogin(); ?></p>
        </fieldset>
    </form>
</div>
<?php require_once __DIR__."/../layout/footer.php"?>
