## Exercício Nº 2 
<br> 
// 2 - Faça um Programa que peça as 4 notas bimestrais e mostre a média, com arrays.<br> <br>

<?php

$media = 0;
$notas = array();
$notas[] = 10;
$notas[] = 10;
$notas[] = 10;
$notas[] = 10;

$media = (($notas[0]+$notas[1]+$notas[2]+$notas[3])/4);

echo ("Sua primeira nota é: $notas[0] \n \n \n"); 
echo ("Sua segunda nota é: $notas[1] \n \n \n");
echo ("Sua terceira nota é: $notas[2] \n \n \n");
echo ("Sua quarta nota é: $notas[3] \n \n \n");
echo ("Considerando estas informações, sua média é: $media")
?>