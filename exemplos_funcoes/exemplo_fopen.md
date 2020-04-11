## Fopen

Abre um arquivo e retorna um identificador. Se o nome do arquivo está na forma "protocolo:// ...", o **PHP** irá procurar por um manipulador de protocolo, também conhecido como *wrapper*.

int fopen (string arquivo, string modo [, int usar_path [, resource contexto]])

Parâmetros  Descrição
*arquivo*     // String identificando o nome do arquivo a ser aberto.
*modo*        // Forma de abertura do arquivo (r=read, w=write, a=append).
*usar_path*   // Se 1 ou *True*, vasculha a path pelo arquivo a ser aberto.
*contexto*    // Opções de contexto; variam de acordo com o protocolo do arquivo.

```
<?php
$fp = fopen ("/home/pablo/file.txt", "r");
$fp = fopen ("/home/pablo/file.gif", "wb");
$fp = fopen ("http://www.example.com/", "r");
$fp = fopen ("ftp://user:password@example.com/", "w");
?>
```