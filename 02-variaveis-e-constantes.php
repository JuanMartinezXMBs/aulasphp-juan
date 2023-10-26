<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>

</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>

    <?php
    //variaveis
    $curso = "curso de programador web";
    $ano = 2023;
    $area = "Back-End";
    
    // frase: Estamos no Programador Web 2023

    /* Formas de saidas via PHP */

    // Não dá certo, as variáveis são tratadas como texto
    echo '<p>Estamos no $curso em $ano</p>';
    //---------------------------------------------------

    // Sainda interpolada
    echo "<p>Estamos no $curso em $ano</p>";
    
    // Saída com CONCATENAÇÃO
    echo '<p> estamos no '.$curso.' em '.$ano.'</p>';
    echo "<p> estamos no ".$curso." em ".$ano."</p>";
    ?>
    <hr>

    <!-- Forma de Saída ABREVIADA/SIMPLIFICADA -->

    <p>Estamos no <?=$curso?> em <?=$ano?></p>
    <hr>
    
    <?php
    // Constantes (recomenda-se dar nome em MAIUSCULAS)

    //Forma mais antiga
    define("AUTOR", "Tiago Bezzera do Santos");
    
    //forma mais atual
    const EMPRESA = "ABC Tecnologia";
    const ANO_FUNDACAO = 2000;
    ?>

    <P>Autor do Site: <?=AUTOR?> </P>
    <P>Nome da Empresa: <?=EMPRESA?> </P>
    <P>Fundada em: <?=ANO_FUNDACAO?> </P>


</body>
</html>