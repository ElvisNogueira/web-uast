<?php ?>

<?php require_once __DIR__."/../layout/header.php"?>

<div id="corpoPage">
    <h1>Configurações</h1>
    <form action="/configuracoes" method="post">
        <fieldset>
            <div class="label-top half-line">
                <label for="hora">Hora de abertura:</label>
                <input type="time" name="horaAbertura" id="hora">
            </div>

            <div class="label-top half-line">
                <label for="taxa">Taxa de juros:</label>
                <input type="text" name="taxaJuros" id="taxa">
            </div>
            <div class="label-top half-line">
                <label for="valorM">Valor da mensalidade:</label>
                <input type="text" name="valorMensalidade" id="valorM" placeholder="R$">
            </div>

        </fieldset>
        <button type="submit">Criar</button>
    </form>
</div>

<?php require_once __DIR__."/../layout/footer.php" ?>
