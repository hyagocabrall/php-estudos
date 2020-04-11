## Rmdir

Apaga um diretório
```
bool rmdir (string localização)
```

Parâmetros          Descrição
*localização*       // Localização de um diretório

```
<?php
$dir = '/tmp/diretorio';
if (rmdir($dir))
{
    echo "$dir apagado com sucesso";
}
else
{
    echo "$dir não apagado";
}
?>
```