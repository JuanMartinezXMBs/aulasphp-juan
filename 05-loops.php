<?php
include "recursos.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>

    <style>
        body {
            font-family: 'Segoe UI';
            font-size: 22px;
        }

        body p{
            font-weight: bold;
        }
    </style>
    
</head>
<body>
    <!-- Usando o foreach para acessar os dados do array criado em outro arquivo (Acessivel devivo ao include) -->
    <?php foreach($linguagens as $linguagem){ ?>
        <p><i><?=$linguagem?></i></p>
    <?php } ?>

    <h1>Loops no PHP</h1>
    <hr>
    <p> <?=ESCOLA?> <?=$anoLetivo?></p>
    <hr>

    <h2>tradicionais: while, for e do/while</h2>
    <!-- -------------------------------------------------------------------------- -->
    <h3>While</h3>

    <?php
    $i = 1;
    while ($i <= 3){
    ?>
        <p>SENAC Penha - I vale <?=$i?></p>

    <?php
        $i++;
    }
    ?>
    <!-- -------------------------------------------------------------------------- -->
    <h3>do/while</h3>
    <ul>
        <?php 
        $j = 1;
        do {
        ?>

        <li>Item: <?=$j?></li>

        <?php 
            $j++;
        } while ($j <= 10)
        ?>
    </ul>
    <!-- -------------------------------------------------------------------------- -->
    <h3>for</h3>
    <?php
    $alunos = ["Jean", "Giuseppe", "Arthur", "Pedro", "Paola"];

    $qtd = count($alunos);
    
    for($i = 0; $i < $qtd; $i++ ){
    ?>

        <p>Alnuno: <?=$alunos[$i]?> </p>

    <?php
    }
    ?>

    <h3>foreach</h3>
    <?php foreach( $alunos as $aluno){?>
        <p> <?=$aluno?> </p>
    <?php }?>

</body>
</html>