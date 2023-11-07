<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>

    <style>
        body {
            font-family: 'Segoe UI';
            font-size: 22px;
        }

        body p{
            font-weight: bold;
        }

        ol li:nth-child(odd) {
            color: red;   
        }

        ol li:nth-child(even) {
            color: green;   
        }

        ol li:first-child {
            color: yellow;   
        }
        </style>
</head>
<body>
    <!-- 1) Crie um array contendo o nome dos 12 meses do ano.

    2) Monte uma lista ordenada exibindo o nome de cada mês em um item.

    DESAFIO: formate a lista de uma forma que os meses apareçam com cores alternadas. Exemplo: janeiro/março em azul, fevereiro/abril em vermelho etc.
    -->

    
    
<ol>
    <?php
    $meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];

    $QTDmeses = count($meses);

    for( $i = 0; $i < $QTDmeses; $i++ ){
    ?>
        
        <li> <?=$meses[$i]?> </li>

    <?php
     }
    ?>
</ol>

</body>
</html>