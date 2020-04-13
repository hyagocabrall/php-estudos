## Str_replace

Substitui uma string por outra em um dado contexto

```
mixed str_replace (mixed procura, mixed substitui, mixed contexto)
```

Parâmetros          Descrição
*procura*           // String a ser substituída.
*substitui*         // String substituta
*contexto*          // String inicial a ser submetida á substituição

```
<?php
$txt = "O rato roeu a roupa do rei de Roma";
print str_replace ('Rato', 'Leão', $txt);   // O Leão roeu a roupa do rei de Roma
?>
```