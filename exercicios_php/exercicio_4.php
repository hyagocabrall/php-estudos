## Exercício Nº 4 
<br> 
// 4 - Faça um programa para uma loja de tintas. O programa deverá pedir o tamanho em metros quadrados da área a ser pintada. <br>
//Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00.<br> 
//Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total..<br> <br>

<?php
$metragem = 7;  //metragem que o cliente deseja pintar
$litro_m = 3;   //quantidade de metros por litro de tinta
$valor_lata = 80.0;    //valor da lata de tinta 
$result_latas = 0;   // quantidade de latas a serem compradas
$resutl_valor = 0;   // valor a ser pago

$result_latas = ($metragem / 3);
$result_valor = ($result_latas * $valor_lata);

echo "\n A quantidade de latas é: $result_latas";
echo "\n O valor a ser pago é: $result_valor";

?>