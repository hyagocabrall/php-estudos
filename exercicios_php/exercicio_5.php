## Exercício 5 

5 - Faça um Programa que peça dois números e imprima o maior deles. Exibir os valores informados. <br> <br>
<?php

$n1 = 3;
$n2 = 3;
if ($n1 > $n2){
    echo ("<br> O números inseridos são: $n1 e $n2, sendo assim o maior deles é $n1 <br>");
}elseif ($n1 == $n2){
    echo ("<br> O números inseridos são iguais $n1 e $n2 <br>");
}else{
    echo ("<br> O números inseridos são: $n1 e $n2, sendo assim o maior deles é $n2 <br>");
}
?>