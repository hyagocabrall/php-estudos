## Fwrite

Grava uma string (conteúdo) no arquivo apontado pelo *identificador* de arquivo. Se o argumento *comprimento* é dado, a gravação irá parar depois que *comprimeiro* bytes for escrito ou o fim da string *conteúdo* for alcançado, o que ocorrer primeiro.
Retorna o número de bytes gravados, ou False em caso de erro.

```
int fwrite (int identificador, string conteúdo [, int comprimeiro])
```
Parâmetros          Descrição
*identificador*     // Parâmetro retornado pela fopen()
*conteúdo*          // String a escrever no arquivo
*comprimento*       // Comprimento da string

```
<?php
$fp = fopen ("/homepablo/file.txt", "w");   // abre o arquivo

fwrite ($fp, "Linha 1\n");       // escreve no arquivo
fwrite ($fp, "Linha 2\n");       // escreve no arquivo
fwrite ($fp, "Linha 3\n");       // escreve no arquivo

fclose ($fp);          // fecha o arquivo
?>
```
