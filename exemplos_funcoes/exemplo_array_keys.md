## Array_keys

Retorna as chave de um array. Se o segundo parâmetro for indicado, a função retornará apenas índices que apontam para um conteúdo igual ao parâmetro.
```
array array_keys (array nome_array [, mixed valor_procurado])

<?php
$exemplo = array ('cor' => 'vermelho', 'volume' => 5, 'animal' => 'cachorro');
$indices = array_keys($exemplo);
print_r($indices);
?>
```