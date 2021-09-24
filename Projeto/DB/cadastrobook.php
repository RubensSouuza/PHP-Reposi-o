<?php
// conexão com o banco de dados

require_once('conexao.php');

//
if(isset($_POST['txtTitle']) && (isset($_POST['txtANO'])) && (isset($_POST['txtPagina'])){

    //captura os dados vindos do input do formulário
$Title = $_POST['txtTitle'];
$ANO = $_POST['txtANO'];
$Pagina = $_POST['txtPagina'];


//insere os dados no banco de dados
$control = $conecta->prepare("INSERT INTO tb_livro(titulo,isbn,Ano,qtdPaginas) VALUES (:TITULO, :ISBN, :ANO, :QTDPAGINAS)");
$control->bindParam("TITULO", $Title);
$control->bindParam("ISBN", $ISBN);
$control->bindParam("ANO", $ANO);
$control->bindParam("QTDPAGINAS", $Pagina);
$control->execute();
}





require_once('../pages/home.php');
?>




