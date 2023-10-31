<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>

    <style>
        body {
            font-size: 18px;
            font-family: Verdana;
        }

        .oculto {
            user-select:none;
            background-color: black;
        }
    </style>
</head>
<body>
    <!-- Exercício 2
    Crie um novo arquivo chamado exercicio02.php e nele faça um array (numérico OU associativo) chamado dados contendo as seguintes informações:

    Nome de usuário (exemplo: chapolin.colorado)
    Senha (exemplo: 123teste)
    Idade (exemplo: 30)
    Cidade (exemplo: São Paulo)
    Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
    Em seguida, mostre somente os valores de nome de usuário, idade, cidade e um dos telefones em uma lista ordenada HTML. -->
    <?php
    $dados = [
        //chave associativa
        "nome" => "Alan",
        "senha" => "123teste",
        "idade" => 19,
        "cidade" => "São Paulo",
        "telefone" => ["11-2135-0300", "11-91234-5678"]
    ];
    ?>
    <h1>Bem-Vindo</h1>
    <hr>
    <h2>Conheça o nosso aluno Senac 😉 </h2>
    
    <ol>
    <li>Este é o <?=$dados["nome"]?></li>

    <li>Este é a sua senha: <span id="mensagem" class="oculto"><?=$dados["senha"]?></span></li>
    <button id="verificar">Ativar</button>

    <li>Ele tem <?=$dados["idade"]?> anos</li>
    <li>E mora em cidade: <?=$dados["cidade"]?></li>
    <li>Telefone: <?=$dados["telefone"][1]?></li>
    </ol>

    <script>
    const mensagem = document.querySelector("#mensagem");
    const exemplo01 = document.querySelector("#verificar");

    exemplo01.addEventListener("click", function(){
        mensagem.classList.toggle("oculto")
});
    </script>
</body>
</html>