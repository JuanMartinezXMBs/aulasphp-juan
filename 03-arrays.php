<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>

    <style>
        body {font-family: Verdana;}
    </style>

</head>
<body>
    <h1>Arrays no PHP (vetores e matrizes)</h1>
    <hr>

    <h2>Arrays numericos/indexados</h2>

    <?php
    // Declarar Arrays
    $bandas = ["FHOP","DNA"];
    $cursos = array("JavaScript","Excel", "PHP","HTML");

    // Declarando como constante
    define("unidade_sesc", ["belenzinho", "bertioga"]);
    const UNIDADE_SENAC = ["Penha", "Tatuapé", "São Miguel","Itaquera"];
    ?>

    <h3>Saida de Dados de Arrays</h3>

    <ul>
        <li>Bandas que eu mais gosto: <?=$bandas[0]?> </li>
        <li>Assunto estudando: <?=$cursos[2]?> </li>
        <br>
        <li>Unidade do sesc no litoral: <?=unidade_sesc[1] ?> </li>
        <li>Unidade do senac que estamos: <?=UNIDADE_SENAC[0] ?> </li>
    </ul>
    <hr>

    <h2>Arrays associativo</h2> <!-- alternativa para objeto -->
    <?php
    $livro = [
        //chave associativa
        "titulo" => "Senhor dos anéis",
        "autor" => "J.R.R Tolkien",
        "ano" => 1954,
        "personagens" => ["Frodo","Legolas"]
    ];

    $filme = array(
        "titulo" => "Velozes e Furioso",
        "genero" => "Ação"
    );
    ?>
    <h3>Saida de dados (array associativo)</h3>

    <p>Livro: <?=$livro["titulo"]?></p>
    <p>O cara que usa flechinhas: <?=$livro["personagens"][1]?></p>
    <hr>

    <h3>Comandos para analisar a estrutura de arrays: print_r() e var_dump() </h3>

    <!-- Saidas sem formatação -->
    <?=print_r($bandas)?>
    <br><br>
    <?=var_dump($bandas)?>

    <!-- Saidas com formatação usando a tag <pre> -->
    <pre> <?=print_r($bandas)?> </pre>
    <pre> <?=var_dump($bandas)?> </pre>

    <pre>
        <?=var_dump($livro)?>
    </pre>






</body>
</html>