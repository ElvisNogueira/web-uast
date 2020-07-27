<?php ?>

<?php require_once __DIR__."/../layout/header.php"?>


<div id="corpoPage">
    <nav class="nav_tabs">
        <ul class="abas">
            <li class="aba" id="aba1">
                <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
                <label for="tab1">Dados</label>
                <div class="content">
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
            </li>
            <li class="aba" id="aba2">
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label for="tab2">Mensalidades</label>
                <div class="content">
                    <table>
                        <thead>
                            <th>DATA DE VENCIMENTO</th>
                            <th>VALOR</th>
                            <th>STATUS</th>
                            <th>AÇÃO</th>
                        </thead>
                        <?php foreach ($mensalidades as $mensalidade){?>
                            <tr>
                                <td><?php echo $mensalidade->getDataVencimento();?></td>
                                <td><?php echo $mensalidade->getValor();?></td>
                                <td><?php echo $mensalidade->getStatus();?></td>
                                <td>
                                    <form action="/mensalidade?action=pagar" method="post">
                                        <input type="hidden" name="idMensalidade" value="
                                            <?php
                                                echo $mensalidade->getId();
                                            ?>">
                                        <?php if($mensalidade->getStatus()=="À pagar"){ ?>
                                            <button type="submit" class="botoes pagar"> Pagar </button>                                            </button>
                                        <?php } ?>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </li>
        </ul>
    </nav>



</div>

<?php require_once __DIR__."/../layout/footer.php" ?>
