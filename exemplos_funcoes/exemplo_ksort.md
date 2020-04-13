## Ksort

Ordena um array pelos seus índices. Para ordem reversa, utiliza krsort().
```
boolean ksort (array nome_array)

<?php
$carro['potência'] = '1.0';
$carro['cor'] = 'branco';
$carro['modelo'] = 'celta';
$carro['opcionais'] = 'ar quente';
ksort($carro);
print_r($carro);
?>
```