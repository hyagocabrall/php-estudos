## Implode

Converte um array em uma string, separando os elementos do array por meio de um separador.
```
array implode (string separador, array padrão)

<?php
$padrão = array('Maria', 'Paulo', 'José');
$resultado = implode(' + ', $padrão);
var_dump($resultado;)
?>
```
