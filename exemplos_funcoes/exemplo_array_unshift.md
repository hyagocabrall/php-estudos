## Array_unshift

Adiciona um elemento ao início de um Array 
```
int array_unshift (array nome_array, mixed valor [, mixed ...])

<?php
$a = array("verde", "azul", "vermelho");
array_unshift ($a, "amarelo");
var_dump($a);
?>
```