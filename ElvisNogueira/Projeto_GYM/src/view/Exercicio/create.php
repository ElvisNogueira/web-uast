<?php
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GYM | Criar Exercício</title>
</head>
<body>
    <form action="/exercicio" method="post">
        <input type="text" name="nome" class = "campoTexto" placeholder="Nome do Exercício">
        <select name="tipo" class="comboTxt" required>
            <option value="">Selecione um tipo de exercício</option>
            <option value="Peito">Peito</option>
            <option value="Biceps">Biceps</option>
            <option value="Triceps">Triceps</option>
            <option value="Costa">Costa</option>
            <option value="Ombro">Ombro</option>
            <option value="Abdomen">Abdomen</option>
            <option value="Perna">Perna</option>
            <option value="Gluteo">Gluteo</option>
        </select>
        <input type="submit" value="Criar">
    </form>


</body>
</html>
