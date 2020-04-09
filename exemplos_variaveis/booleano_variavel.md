## Tipo Booleano

Uma varivável booleana expressa um valor lógico verdadeiro ou falso. Para especificar um valor booleano, utilize as palavras-chave **TRUE** ou **FALSE**. segue exemplo:

```
<?php

// Declara variável com valor TRUE
$exibir_nome = TURE;

// Testa se a variável é TRUE
if ($exibir_nome)
{
    echo 'Hyago Cabral da Silva'
}

?>
```

Pode ser feita a condicional por vários tipos de arquivos, além disto também são considerados valores falsos em comparações booleanas:
1- Inteiro 0    
2- Ponto flutuante 0.0  
3- Uma string vazia "" ou "0"   
4- Um array vazio   
5- Um objeto sem elementos  
6- Tipo NULL    