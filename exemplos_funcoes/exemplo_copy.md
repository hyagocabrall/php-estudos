## Copy

Copia um arquivo para outro local/nome. Retorna True caso tenha sucesso e False em caso de falhas
```
bool copy (string arquivo_origem, string arquivo_destino)
```

Parâmetros              Descrição
*arquivo_origem*        //Arquivo a ser copiado
*arquivo_destino*       //Arquivo destino

```
<?php
$origem = "/home/pablo/file.txt";
$destino = "/home/pablo/file2.txt";
if (copy($origem, $destino))
{
    echo "Cópia efetuada"
}
else
{
    echo "Cópia não efetuada";
}
?>
```