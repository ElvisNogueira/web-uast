<?php ?>

<?php require_once __DIR__."/../layout/header.php"?>

<div id="corpoPage">
    <h1>Configurações</h1>
    <form action="/configuracao?action=edit&id=1" method="post">
        <input type="hidden" name="id" value="1">
        <fieldset>
            <div class="label-top half-line">
                <label for="hora">Hora de abertura:</label>
                <input type="time" name="horaAbertura" id="hora" value="<?php
                    echo $configuracao->getHorarioAbertura() ?>">
            </div>

            <div class="label-top half-line">
                <label for="taxa">Taxa de juros:</label>
                <input type="text" name="taxaJuros" id="taxa" value="<?php
                    echo $configuracao->getTaxaJurosAtrasoMensalidade() ?>">
            </div>
            <div class="label-top half-line">
                <label for="valorM">Valor da mensalidade:</label>
                <input type="text" name="valorMensalidade" id="valorM" placeholder="R$" value="<?php
                    echo $configuracao->getValorMensalidade();
                ?>">
            </div>

        </fieldset>
        <button type="submit">Salvar</button>
    </form>
</div>

<?php require_once __DIR__."/../layout/footer.php" ?>
