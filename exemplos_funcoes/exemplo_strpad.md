## Strpad

Preenche uma string com uma outra string, dentro de um tamanho específico.
```
string str_pad (string entrada, int tamanho [, string complemento [, int tipo]])
```

Parâmetros              Descrição
*entrada*               // String inicial a ser complementada.
*tamanho*               // Comprimento da string a ser retornada.
*complemento*           // String de preenchimento
*tipo*                  // Tipo de preenchiimento. Pode ser **SR_PAD_RIGHT** (preenche com caracteres á direita), **STR_PAD_LEFT**(preenche á esquerda) ou ** STR_PAD_BOTH** (preenche em ambos os lados).
```
<?php
$texto = "The Beatles";
print str_pad($texto, 20) . "\n";       // The Beatles
print str_pad($texto, 20, "*", str_pad_left) . "\n";    // ********* The Beatles
print str_pad($texto, 20, "*", str_pad_both) . "\n"/    // **** The Beatles *****
print str_pad($texto, 20, "*") . "\n";      // The Beatles *********
?>
```