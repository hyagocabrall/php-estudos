## Array_reverse

Recebe um array e retorna-o na ordem inversa
```
array array_reverse (array nome_array, boolean preservar_chave)

<?php
$a[0] = 'green';
$a[1] = 'yellow';
$a[2] = 'red';
$b = array_reverse($a, true);
var_dump($b);
?>
```