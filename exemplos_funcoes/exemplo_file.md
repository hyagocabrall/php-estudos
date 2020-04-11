## File

Lê um arquivo e retorna um array com todo o seu conteúdo, de modo que cada posição do array representa uma linha lida do arquivo. Caso o nome do arquivo contenha protocolo, o arquivo remoto será lido como array.

```
array file (string nome_arquivo, [int usar_include_path])
```

Parâmetros              Descrição
*nome_arquivo*          //Arquivo a ser lido
*usar_include_path*     // Se "1", procura também nos diretórios da cosntate *php_include_path*

```
<?php
$arquivo = file ("/home/pablo/file.txt");   // lê o arquivo para o array $arquivo
echo $arquivo[0];       // exibe o conteúdo
echo $arquivo[2];       // exibe o conteúdo
echo $arquivo[2];       // exibe o conteúdo
?>
```