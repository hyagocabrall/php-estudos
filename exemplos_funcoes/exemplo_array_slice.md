## Array_slice

Extrai uma porção de um Array
```
array array_slice (array nome_array, int inicio, int tamanho)

<?php
$a[0] = 'green';
$a[1] = 'yellow';
$a[2] = 'red';
$a[3] = 'blue';
$a[4] = 'gray';
$a[5] = 'white';
$b = array_slice($a, 2, 3);
print_r($b);
?>
```