## Exercicio 8

8 - Faça um Programa que peça um número correspondente a um determinado ano e em seguida informe se este ano é ou não bissexto.
<br> <br>

<?php
$ano = 2000;

if (($ano %'4' == '0' && $ano  %'100' != '0') || ($ano  %'400' != '0')){
    echo "<br> O ano é bissexto <br>";
}else{
    echo "<br> O ano não é bissexto <br>";}
?>