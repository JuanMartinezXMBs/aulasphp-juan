<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        body {
            font-size: 20px;
            font-family: Verdana;
        }
        .urgente {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>Condicionais (is, else, else if) </h1>
    <hr>

    <h2>Simples não tem else</h2>
    <?php
    
    $numero = 500;

    if($numero > 20){
        echo "<p>$numero é maior que 20.</p>";
    }
    ?>
<!-- --------------------------------------------------------------------------------------- -->
    <h2>Composta (if/else)</h2>

    <?php

    $produto = "Geladeira";
    
    $qtdEmDestaque = 0; //o que temos no momento
    $qtdCritica = 2; // minimo necessario
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h4>Produto: <?=$qtdEmDestaque?></h4>

    <?php
    if($qtdEmDestaque < $qtdCritica){
        //estoque normal
        echo "<p>Precismos abastecer o estoque</p>";

        //condicional ximples e alinhada
        if($qtdEmDestaque === 0){
            echo "<p class='urgente' >URGENTE!!!</p>";
        }

    } else {
        //mensagem que o precisa ser abastecido sem urgwncia
        echo "<p>temos que vender mais!!</p>";
    }
    ?>
<!-- --------------------------------------------------------------------------------------- -->

<?=
$a = 5;
$b = "5";

// igualdade de valor
var_dump($a == $b);

//igualdade de tipos
var_dump($a === $b);
?>

<hr>

<h2>Encadeada (if, else e elseif)</h2>
<?php
//Verificando o produto para dar a garantia certa

if($produto == "Ultrabook"){
    $garantia = 5;
} elseif($produto == "Geladeira"){
    $garantia = 3;
} elseif($produto == "TV"){
    $garantia = 2;
}else{
    $garantia = 1;
}
?>

<p>O produto <?=$produto?> possui garantia de <?=$garantia?> ano<?php if($garantia>1) echo "s"?>.</p>

<h3>Switch/case</h3>

<?php //switch (analise/avalie)
switch($produto){
    case "Ultrabook": $garantia = 5; break;
    case "Geladeira": $garantia = 3; break;
    case "Tv": $garantia = 2; break;
    default: $garantia = 1; break;
}

?>

<p>Produto <?=$produto?></p>
<p>Produto <?=$garantia?></p>

</body>
</html>