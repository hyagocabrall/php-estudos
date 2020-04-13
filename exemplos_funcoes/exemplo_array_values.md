## Array_values

Retorna um array contendo os valores de outro array.
```
array array_values (array nome_array)

<?php
$exemplo = array('cor' => 'vermelho', 'volume' => 5, 'animal' => 'cachorro');
$valores = array_values($exemplo);
print_r($valores);
?>
```