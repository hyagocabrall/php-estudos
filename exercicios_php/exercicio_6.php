## Exercício 6 <br>

6 - Faça um Programa onde é informado um horario de 24 horas e imprima a mensagem "Bom Dia!" (6:00 ate 12:00), "Boa Tarde!" (13:00 ate 18) ou "Boa Noite!" (18:00 ate 5:59) ou "Valor Inválido!" (caso o seja invalido), conforme o valor informado.
<br> <br> <br>
<?php
$horas = '06';

if ($horas >= '06' && $horas < '12'){
    echo "Bom Dia ! <br>";
}elseif ($horas >= '12' && $horas < '18'){
    echo "Boa Tarde ! <br>";
}elseif ($horas >= '18' && $horas < '24'){
    echo "Boa Noite ! <br>";
}elseif ($horas >= '00' && $horas < '06'){
    echo "Boa Noite ! <br>";
}else{
    echo "Valor informado é inválido ! <br>";
}
?>