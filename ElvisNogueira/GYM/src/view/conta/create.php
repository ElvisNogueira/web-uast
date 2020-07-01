<?php require_once __DIR__."/../layout/header.php"; ?>

<div id="corpoPage">
    <h1>Cadastrar conta</h1>
    <form action="/conta" method="post">
        <div class="label-float">
            <input type="text" name="nome" id="campoNome" placeholder=" " required="" class="full-line">
            <label>Nome</label>
        </div>



        <div class="label-float">
            <textarea name="descricao" id="textDescricao" cols="30" rows="10" placeholder=" "  class="half-line"></textarea>
            <label>Descrição</label>
        </div>

        <div class="select-label ">
            <label for="comboTipo">Tipo: </label>
            <select name="tipo" id="comboTipo" half-line>
                <option value="">Selecione...</option>
                <option value="Entrada">Entrada</option>
                <option value="Saída">Saída</option>
            </select>
        </div>
        <button type="submit">Criar</button>
    </form>

    <?php require_once __DIR__."/../layout/footer.php"?>
