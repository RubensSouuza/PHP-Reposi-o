<?php
    //Chama o cabeçalho;
    require_once('../component/header.php');

//Chama a conexão com o banco de dados;
require_once('../DB/conexao.php');

//Lendo dados do banco de dados;

$control = $conecta->prepare("SELECT * FROM tb_livro ORDER BY titulo asc");
$control->execute();

//Pega toda a tabela e guarda em uma variável;
$resultado = $control->fetchALL(PDO::FETCH_ASSOC);

var_dump($resultado);