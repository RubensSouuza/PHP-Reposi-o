<?php
require_once('conexao.php');
//teste de sasafafafaf

if ( isset($_POST['txtName']) && isset($_POST['txtCNPJ']) && isset($_POST['txtTel']) && isset($_POST['txtend']) ){

    $name = $_POST['txtName'];
    $cnpj = $_POST['txtCNPJ'];
    $telefone = $_POST['txtTel'];
    $endereco = $_POST['txtend'];
    
    $control = $conecta->prepare("INSERT INTO tb_editora(nome,cnpj,telefone,endereco) VALUES (:NOME, :CNPJ, :TELEFONE, :ENDERECO)");
    $control->bindParam("NOME", $name);
    $control->bindParam("CNPJ", $cnpj);
    $control->bindParam("TELEFONE", $telefone);
    $control->bindParam("ENDERECO", $endereco);
    $control->execute();
    header('http://localhost/Projeto/pages/home.php');
    
}
?>  