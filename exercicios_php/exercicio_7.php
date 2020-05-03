## Exercício 7

7 - As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contraram para desenvolver o programa que calculará os reajustes.
Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual:
- salários até R$ 280,00 (incluindo) : aumento de 20%
- salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
- salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
- salários de R$ 1500,00 em diante : aumento de 5% Após o aumento ser realizado, informe na tela:
- o salário antes do reajuste;
- o percentual de aumento aplicado;
- o valor do aumento;
- o novo salário, após o aumento.
<br> <br> <br> <br> <br>
<?php

$salario_inicial = '3500.50';
$salario_final = 0;

if ($salario_inicial <= '280'){
    $salario_final = ($salario_inicial + ($salario_inicial * '0.20'));
    echo ("<br> O salário antes do reajueste é $salario_inicial passando a ser $salario_final após um aumento de 20% <br>");
}elseif ($salario_inicial > '280' && $salario_inicial <= '700'){
    $salario_final = ($salario_inicial + ($salario_inicial * '0.15'));
    echo ("<br> O salário antes do reajueste é $salario_inicial passando a ser $salario_final após um aumento de 15% <br>");
}elseif ($salario_inicial >= '700' && $salario_inicial <= '1500'){
    $salario_final = ($salario_inicial + ($salario_inicial * '0.10'));
    echo ("<br> O salário antes do reajueste é $salario_inicial passando a ser $salario_final após um aumento de 10% <br>");
}elseif ($salario_inicial > '1500'){ 
    $salario_final = ($salario_inicial + ($salario_inicial * '0.05'));
    echo ("<br> O salário antes do reajueste é $salario_inicial passando a ser $salario_final após um aumento de 5% <br>");
}else {
    echo ("<br> O valor digitado é inválido !!!");}
?>