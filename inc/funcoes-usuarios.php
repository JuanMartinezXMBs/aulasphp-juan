<?php
require "conecta.php";
                        //PARÂMETROS
function inserirUsuario($conexao, $email, $nome, $senha, $tipo){

    /* Montando uma variavel com o comando SQL de INSERT e com os dados (PARÂMETROS) recebidos peka função */
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo)
    VALUES('$nome','$email','$senha','$tipo')";

    /* Execute o comando SQL */
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
};

function lerUsuarios($conexao){
    // Comando SQL para fazer a leitura de dados (SELECT)
    $sql = "SELECT id, nome, email, tipo FROM usuarios ORDER BY nome";
    
    // Execução do comando e armazenamento do resultado da consulta/query
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    
    // Retornamos o resultado da query transformado em array associativo
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}