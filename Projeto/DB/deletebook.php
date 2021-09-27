<?php
// conexão com o banco de dados;

require_once('conexao.php');

if( isset($_GET['id'])){

//captura os dados vindos do input do formulário;
$id = $_GET['id'];

//deleta os dados no banco de dados;
$control = $conecta->prepare("DELETE FROM tb_livro WHERE id= :ID");
$control->execute(array('ID'=>$id));

header('Location: http://localhost/Projeto/pages/viewbook.php');
}

?>