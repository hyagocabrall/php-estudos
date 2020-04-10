## For

Bem parecido com o while a estrutura de repetição, entretanto o que define a quantidade de vezes que será executado é o contador implementado na estrutura. O for é controlado por um bloco de 3 comandos que estabelecem a contagem.

```
for (expr1; expr2; expr3)   // expr1 - Valor inicial va variavel contadora
{                           // expr2 - Condicional de execução
    comandos                // expr3 - Valor a ser incrementado após cada execução
}
```

```
<?php
for ($i =1; $i <=10; $i++)
{
    print $i;
}
?>
```
Sempre que possivel evite muitos níveis de interações nos laços de repetição.
