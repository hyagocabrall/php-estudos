## Rename

Altera a nomenclatura de um arquivo ou diretório
```
bool rename (string arquivo_origem, string arquivo_destino)
```

Parâmetros              Descrição
*arquivo_origem*        // Arquivo a ser renomeado
*arquivo_destino*       // Arquivo destino

```
<?php
$origem = "/hpme/pablo/file2.txt";
$destino = "/tmp/file3.txt";
if (rename($origem, $destino))
{
    echo "Renomeação efetuada";
}
else
{
    echo "Renomeação não efetuada";
}
?>
```