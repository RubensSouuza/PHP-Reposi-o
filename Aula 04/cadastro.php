<?php
//conexão com o banco de dados
    require_once('conexao.php');

//captura os dados vindos do input do formulário
$nome = $_GET['txtNome'];
$email = $_GET['txtEmail'];


//insere os dados no banco de dados
$control = $conecta->prepare("INSERT INTO tb_alunos(nome,email) VALUES (:NOME, :EMAIL)");
$control->bindParam("NOME", $nome);
$control->bindParam("EMAIL", $email);
$control->execute();


//mysqli só funciona com o BD MYSQL
//PDO funciona com a maioria dos bancos de dados
?>