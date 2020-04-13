## Asort

Ordena um array pelo seu valor, mantendo a associação de índices. Para ordenar de forma reversa, use arsort().
```
void asort (array nome_array)

<?php
$a[0] = 'green';
$a[1] = 'yellow';
$a[2] = 'red';
$a[3] = 'blue';
$a[4] = 'gray';
$a[5] = 'white';
asort($a);
print_r($a);
?>
```