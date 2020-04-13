## Array_push

Adiciona elementos ao final de um array. Mesma funcionalidade da sintaxe $array[] = $valor

```
int array_push (array nome_array, mixed valor [, mixed...])

<?php
$a = array ("verde", "azul", "vermelho");
array_push ($a, "amarelo");
var_dump($a);
?>
```