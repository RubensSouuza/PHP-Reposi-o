<?php
require_once('conexao.php');

if( isset($_POST['txtName']) && isset($_POST['txtCPF']) && isset($_POST['txtTel']) && isset($_POST['txtMail']) ){

    $name = $_POST['txtName'];
    $cpf = $_POST['txtCPF'];
    $telefone = $_POST['txtTel'];
    $email = $_POST['txtMail'];
    
    $control = $conecta->prepare("INSERT INTO tb_autor(nome,cpf,telefone,email) VALUES (:NOME, :CPF, :TELEFONE, :EMAIL)");
    $control->bindParam("NOME", $name);
    $control->bindParam("CPF", $cpf);
    $control->bindParam("TELEFONE", $telefone);
    $control->bindParam("EMAIL", $email);
    $control->execute();

    header('Location: http://localhost/Projeto/pages/home.php');
}

?>