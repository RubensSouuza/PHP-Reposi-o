<?php
    echo "<h1> Solução das atividades</h1>";

    /* 3 -  Uma conta telefônica é composta dos seguintes custos:

        Assinatura: R $ 32,00
        Impulsos: R $ 0,09 por impulso que exceder a 90
        Chamadas p / celular: R $ 0,35 por impulso
            Escreva um programa que monte a fórmula para calcular o valor da conta para 254 impulsos e 23 chamadas para celular imprimindo o resultado.
    */

    echo "<h2> Exercício - 03 </h2>";

    $assinatura = 32.00;
    $impulso = 0.09;
    $celular = 0.35;

    $impulsoExedido = 254-90;
    $totalLigacaoCelular = 23;

    $valorFatura = $assinatura + ($impulsoExedido*$impulso) + ($totalLigacaoCelular*$celular);

    echo "O valor da fatura é: " . $valorFatura;


    echo "<hr>";
    /* Um professor atribui pesos de 1 a 4 para as notas de quatro alunos. A nota é calculada por meio da média ponderada (N1 * 1 + N2 * 2 + N3 * 3 + N4 * 4) / (1 + 2 + 3 + 4), onde N1 é a nota da primeira avaliação, N2 a da segunda , etc. Um aluno tirou as seguintes notas: 8, 7.5, 10, 9. Faça um programa que calcula e escreva a média deste aluno*/

    echo "<h2> Exercício - 04 </h2>";

    $peso1 = 1; $peso2 = 2; $peso3 = 3; $peso4 = 4;
    $nota1 = 8; $nota2 = 7.5; $nota3 = 10; $nota4 = 9;
    $somaPesos = $peso1 + $peso2 + $peso3 + $peso4;

    $mediaPonderada=($nota1*$peso1 + $nota2*$peso2 + $nota3*$peso3 + $nota4*$peso4)/$somaPesos;

    echo "A nota Ponderada é ".$mediaPonderada;

    echo "<hr> ";

    echo "<h2> Exercício - 05</h2>";

        $a = 10;
        $b = 2;

         echo "A soma de $a e $b é:" .($a+$b).'<br><br>';
         echo "A subtração de $a e $b é:" .($a-$b).'<br><br>';
         echo "A multiplicação de $a e $b é:" .($a*$b).'<br><br>';
         echo "A divisão de $a e $b é:" .($a/$b).'<br><br>';

         echo "<hr> ";
         echo "<h2> Exercício - 06</h2>";

         /*Fazer um programa que imprime a média dos números 11, 19 e 7.*/

         $n1 = 11;
         $n2 = 19;
         $n3 = 7;

         $media = ($n1 + $n2 + $n3)/3;

         echo "A média dos números é:".$media;
?>