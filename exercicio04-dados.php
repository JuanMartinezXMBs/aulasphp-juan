
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
</head>
<body>
<!-- Etapa 01
    Abra o arquivo exercicio04-formulario.php e analise sua estrutura.
    Veja que existe um formulário com campos para para simulação de cadastro de produtos:
    Nome do produto - input text
    Fabricante - select/option
    Preço - input number
    Descrição - textarea
    Botão de enviar - input submit - OK

    DESAFIO FABRICANTE
    Crie um array contendo uma lista com os nomes de 4 fabricantes.
    Usando o loop foreach, faça as opções do select serem carregadas a partir dos dados do array que você criou.
    Etapa 02
    Abra o arquivo exercicio04-dados.php e faça a programação de processamento do formulário considerando o envio/recebimento via POST.
    Mostre os dados recebidos usando tags HTML.

    DESAFIO PREÇO
    Faça o preço aparecer formatado em Reais.
    Exemplo: se o preço digitado no formulário for 4500.75, deverá aparecer no HTML como R$ 4.500,00. -->

<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->

<?php
$produto = $_POST["produto"];
$fabricante = $_POST["fabricante"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

?>

<h2>Dados recebidos:</h2>
<ul>
    <li>Produto: <?=$produto?></li>
    <li>Fabricante: <?=$fabricante?></li>
    <li>Preço R$ <?=$preco?></li>
    <li>Descrição: <?=$descricao?></li>
</ul>
    
</body>
</html>