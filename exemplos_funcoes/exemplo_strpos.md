## Strpos

Encontra a primeira ocorrência de uma string dentro de outra.
```
int strpos (string principal, string procurada [, int offset])
```
Parâmetros          Descrição
*principal*         // String qualuqer
*procurada*         // String a ser procurada dentro da string principal
*offset*            // Quantidade de caracteres a ser ignorada

<?php
$minha_string = 'O rato roeu a roupa do rei de Roma';
$encontrar = 'Roupa';
$posicao =strops ($minha_string, $encontrar);
if ($posicao)
{
    echo "String encontrada na posição $posicao";
}
else
{
    echo "String não encontrada";
}
?>