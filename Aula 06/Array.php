<?php

// Criando um array em php;
//Entenda o array como uma gaveta, dentro desta gaveta temos divisórias, podemos numera-las ou nomea-las;
//Primeira forma de criar uma Array;
//cada item deve se ter um '' individual;
//
$notas = [];
$gaveta = ['colher','garfo','faca'];
$carros = ["Chevrolet" => 'Onix',"Ford" => 'ka',"Fiat" => 'uno'];

//Exibindo um Array

var_dump($gaveta);
echo "<hr>";
var_dump($carros);

//Segunda forma de criar um Array;

// $notas = array();
// $gaveta = array();
// $carros = array();

//Exibir divisórias especificas (indice);
echo '<hr>';
echo "Exibndo divisórisa especificas";
echo '<br>';
echo $gaveta[0];
echo '<hr>';
echo $carros["Chevrolet"];

echo '<hr>';
echo 'Lendo dados de uma lista de compras: <br>';

$listaCompras = ['Feijão', 'Arroz', 'Ovos', 'Batata', 'Frango'];

//Adiciona elementos no Array;

array_push($listaCompras, 'Melancia');
array_push($listaCompras, 'Alcatra');




//Função para leitura de um array;
foreach($listaCompras as $divisorias){
    echo ("
        <ul>
            <li>" . $divisorias . "</li>
        </ul>


    ");
   

 //foreach serve para ler uma lista de array;
}

?>