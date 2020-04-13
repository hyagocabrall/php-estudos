## Substr

Retorna o conteúdo determinado na variável, caso a determinação seja negativa a contagem é feita de forma regressiva.
```
string substr (string conteudo, int inicio [, int comprimento])
```

Parâmetros             Descrição
*conteudo*             // String original a ser percorrida
*inicio*               // Caractere inicial a ser lido
*comprimento*          // Comprimento da cadeia de caracteres a ser lida

```
<?php
$rest = substr ("América", 1);
echo $rest . "\n";                  // mérica

$rest = substr ("América", 1, 3);
echo $rest . "\n";                  // mér

$rest = substr ("América", -2);
echo $rest . "\n";                  // ca
?>
```