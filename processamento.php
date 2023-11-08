<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
</head>
<body>
    <h1>Processamento de dados vindo do formulário</h1>
    <hr>

<?php
//Recebendo os dados via  método post
//usando o array super global $_POST[]
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$mensagem = $_POST["mensagem"];

if( empty($nome) || empty($email) ){
?>
    <p>Você deve preencher os espaços: Nome e E-mail!</p>
<?php
} else {
?>

<h2>Dados recebidos:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>
    <li>Data de nascimento: <?=$nascimento?></li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>

<?php } ?>
</body>
</html>