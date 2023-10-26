<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>

    <style>
        p {
            font-size: 32px;
            font-family: verdana;
        }

    </style>

</head>
<body>
    <!-- 
        Exercício 1
    Crie um novo arquivo chamado exercicio01.php e nele crie variáveis e/ou constantes para:

    Nome de uma pessoa (exemplo: Chapolin)
    Idade que esta pessoa tem (exemplo: 25)
    Mostre no HTML uma mensagem qualquer apresentando o nome da pessoa e a idade dela. Exemplo: "Fulano possui 25 anos."

    Destaque o nome em itálico e a idade em negrito.
    
    -->

    <?php
    const NOME = "JOÃO";
    $idade = 27;
    ?>

    <p>Esse é o <i><?=NOME?></i> e ele possui <b><?=$idade?> anos.</b> </p>

</body>
</html>