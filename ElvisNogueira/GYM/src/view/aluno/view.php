<?php ?>

<?php require_once __DIR__."/../layout/header.php"?>


<div id="corpoPage">
    <form class="viewClass">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <p><b>Nome:</b> <?php echo $aluno->getNome(); ?></p>
            <p><b>CPF:</b> <?php echo $aluno->getCpf(); ?></p>
            <p><b>Data Nascimento:</b> <?php echo $aluno->getDataNasc(); ?></p>
            <p><b>Sexo:</b> <?php echo $aluno->getSexo(); ?></p>
            <p><b>Dia de Vencimento:</b> <?php echo $aluno->getDataVencPag(); ?></p>
            <p><b>Telefone:</b> <?php echo $aluno->getTelefone(); ?></p>

        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <p><b>Cidade:</b> <?php echo $aluno->getEndereco()->getCidade(); ?></p>
            <p><b>UF:</b> <?php echo $aluno->getEndereco()->getUf(); ?></p>
            <p><b>CEP:</b> <?php echo $aluno->getEndereco()->getCep(); ?></p>
            <p><b>Bairro:</b> <?php echo $aluno->getEndereco()->getBairro(); ?></p>
            <p><b>Rua:</b> <?php echo $aluno->getEndereco()->getRua(); ?></p>
            <p><b>Número:</b> <?php echo $aluno->getEndereco()->getNumero(); ?></p>
        </fieldset>
    </form>


</div>

<?php require_once __DIR__."/../layout/footer.php" ?>
