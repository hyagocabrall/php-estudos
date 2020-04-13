## Array_pad

Preenche um array com um dado valor, determinada quantidade de posições
```
array array_pad (array nome_array, int tamanho, mixed valor)

<?php
$a = array ("verde", "azul", "vermelho")
$a = array_pad($a, 6, "branco");
var_dump($a);
?>
```