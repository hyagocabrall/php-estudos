## Array_merge

Mescla dois ou mais arrays. Um array é adicionado ao final do outro. O resultado é um novo array. Se ambos arrays tiverem conteúdo indexado pela mesma chave, o segundo irá se sobrepor ao primeiro.
```
array array_merge (array nome_array1, array nome_array2 [, array ...])

<?php
$a = array ("verde", "azul");
$b = array ("vermelho", "amarelo");
$c = array_merge ($a, $b);
var_dump($c);
?>
```