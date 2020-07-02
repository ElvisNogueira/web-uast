<?php ?>

<?php require_once __DIR__."/../layout/header.php"?>


<div id="corpoPage">
    <form class="viewClass">
        <fieldset>
            <legend>Dados Pessoais</legend>
            <p>Nome: <?php echo $aluno->getNome(); ?></p>
            <p>CPF: <?php echo $aluno->getCpf(); ?></p>
            <p>Data Nascimento: <?php echo $aluno->getDataNasc(); ?></p>
            <p>Sexo: <?php echo $aluno->getSexo(); ?></p>
            <p>Dia de Vencimento: <?php echo $aluno->getDataVencPag(); ?></p>
            <p>Telefone: <?php echo $aluno->getTelefone(); ?></p>

        </fieldset>
        <fieldset>
            <legend>Endereço</legend>
            <p>Cidade: <?php echo $aluno->getEndereco()->getCidade(); ?></p>
            <p>UF: <?php echo $aluno->getEndereco()->getUf(); ?></p>
            <p>CEP: <?php echo $aluno->getEndereco()->getCep(); ?></p>
            <p>Bairro: <?php echo $aluno->getEndereco()->getBairro(); ?></p>
            <p>Rua: <?php echo $aluno->getEndereco()->getRua(); ?></p>
            <p>Número: <?php echo $aluno->getEndereco()->getNumero(); ?></p>
        </fieldset>
    </form>


</div>

<?php require_once __DIR__."/../layout/footer.php" ?>
