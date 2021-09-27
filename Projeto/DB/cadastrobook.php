<?php
// conexão com o banco de dados;

require_once('conexao.php');

if( isset($_POST['txtTitle']) && isset($_POST['txtANO']) && isset($_POST['txtISBN']) && isset($_POST['txtPagina'])){

 //captura os dados vindos do input do formulário;
$title = $_POST['txtTitle'];
$isbn = $_POST['txtISBN'];
$ano = $_POST['txtANO'];
$Pagina = $_POST['txtPagina'];


//insere os dados no banco de dados;

$control = $conecta->prepare("INSERT INTO tb_livro(titulo,isbn,Ano,qtdPaginas) VALUES (:TITULO, :ISBN, :ANO, :QTDPAGINAS)");
$control->bindParam("TITULO", $title);
$control->bindParam("ISBN", $isbn);
$control->bindParam("ANO", $ano );
$control->bindParam("QTDPAGINAS", $Pagina);
$control->execute();

header('Location: http://localhost/Projeto/pages/');
}else{
    echo "Deu error";
}

?>




