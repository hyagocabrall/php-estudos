## File_exists

Verifica a existência de um arquivo ou de um diretório.
```
bool file_exists (string nome_arquivo)
```

Parâmetros          Descrição 
*nome_arquivo*      // Localização de um arquivo ou diretório.

```
<?php
$arquivo = '/home/pablo/file2.txt';
if (file_exists($arquivo))
{
    echo "Arquivo existente";
}
else
{
    echo "Arquivo não existente";
}
?>
```