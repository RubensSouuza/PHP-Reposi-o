<?php
echo("

<h1> Estrutura de decisão </h1>
<h2> Na programação nós temos alguns tipos de estrutura de decisão</h2>

<p> Os tipos são <p>
 <ul>
    <li> Estrutura simples </li>
    <li> Estrutura composta </li>
    <li> Estrutura encadeada </li>
    <li> Estrutura tenária </li>
    <li> estrutura multipla </li>
 </ul>

<h3>Operadores lógicos</h3>
 <ul>
    <li> = = Compara se dois valores possuem o mesmo valor </li>
    <li> = = = Comprara se dois valores são identicos </li>
    <li> != Compara se dois valores são diferentes </li>
    <li> < Compara se o valor da direita é menor que o da esquerda</li>
    <li> > Compara se o valor da esquerda é menor do que o da direita </li>
    <li> <= Compara se o valor da direita é menor ou igual que o valor da esquerda </li>
    <li> >= Compara se o valor da direita é maior ou igual que o valor da esquerda </li>
 </ul>
");
// Estrutura Simples: É dada por ter uma única ação//
echo "<hr>";
$age = 18;
if ($age >= 18) {echo " Ele pode ir a festa";}

echo "<br><hr><br>";

//Estrutura composta: É dada por ter uma ação e uma saída padrão//
if ($age >= 18) {
    echo "Ele pode ir a festa";
}
else {
    echo " Ele não pode ir a festa";
}
//Estrutura encadeada: É dada por ter mais de uma ação e somente uma ação//
echo "<br><hr><br>";

$materia ="";

if($materia == 'PHP') {
    echo "Linguagem de programação simpels para web";
}
elseif ($materia == 'JAVA'){
    echo "Linguagem de programação robusta";
}
elseif ($materia == 'ANGULAR'){
    echo "Framework de desenvolvimento Mobile";
}else {
    echo "matéria não consta na sua grade!";
}

//Estrutura compacta: Ela é dada pela auséncia das chaves "{}"//
echo "<br><hr><br>";

if ($age >= 18)
    echo "pode ir a festa";

else
    echo "não pode ir a festa";
 
//OBS: A estrutura compacta só pode ser utilizada quando só temos uma única linha por bloco//

echo "<br><hr><br>";

// Estrutura Ternaria: è dada por definir a estrutura composta em uma única linha//

echo ($age >= 18)? "pode ir a festa" : "Não pode ir a festa";

// Decisão Multipla: É dada por definir casos de teste //

echo "<br><hr><br>";

$opcao = '';

switch ($opcao) {
    case '1':
        echo "A soma dos valores é " .(1+2);
        break;
    case 2:
        echo "A multiplicação dos valores é " . (2*3);
        break;
    case 3:
        echo "A divisão dos valores é " . (3/2);
        break;
       
    default:
        echo "Opção invalida ";
        break;    
}

echo "<br><hr><br>";

//Desenvolva um programa que receba duas notas de um aluno. Calcule uma média e informe se o aprovado ou reprovado. nota de corte 6//

$AV1 = 7;
$AV2 = 3;
$AV3 = 9;
$media = ($AV1+$AV2+$AV3)/3 ;

if ($media >= 7)

echo "aluno aprovado";

elseif ($media >= 6 && $media < 7) 
    echo "recuperação";

else
echo "aluno reprovado";

?>