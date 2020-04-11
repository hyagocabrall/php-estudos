## Fgets

Lê uma linhas de um arquivo. Retorna uma string com até (tamanho -1)bytes lidos do arquivo apontado pelo identificador de arquivo. Se nenhum tamanho for informado, o *default* é 1kb; Se um erro ocorrer, retorna *false*.

string fgets (int identificador [, int tamanho])

Parâmetros          Descrição
*identificador *     // Parâmetro retornado pela fopen()
*tamanho*           // Quantidade em bytes a retonrar da leitura.

```
<?php
$fd = fopen ("/etc/fstab", "r");
while (!feof ($fd))
{
    $buffer = fgets($fd, 4096); // lê uma linha do arquivo

    echo $buffer    // imprime a linha.
}
fclose ($fd);
?>
```