<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <h1>Cadastrar conta</h1>
    <form action="/conta" method="post">
        <fieldset>
            <legend>Conta</legend>

            <div class="label-top full-line">
                <label for="campoNome">Nome:</label>
                <input type="text" name="nome" id="campoNome" placeholder=" " required>
            </div>

            <div class="label-top full-line">
                <label>Descrição:</label>
                <textarea name="descricao" id="textDescricao" cols="30" rows="10" placeholder></textarea>

            </div>

            <div class="label-top half-line">
                <label for="comboTipo">Tipo: </label>
                <select name="tipo" id="comboTipo" half-line>
                    <option value="">Selecione...</option>
                    <option value="Entrada">Entrada</option>
                    <option value="Saída">Saída</option>
                </select>
            </div>

        </fieldset>
        <button type="submit">Criar</button>
    </form>

    <?php require_once __DIR__."/../layout/footer.php"?>
