## Is_file

Verifica se a localização dada corresponde ou não a um arquivo.

```
bool is_file (string localização)
```

Parâmetros          Descrição
*localização*       // Localização de um arquivo ou diretório.

```
<?php
$arquivo = '/home/pablo/file.txt';
if (is_file($arquivo))
{
    echo "$arquivo é um arquivo";
}
else
{
    echo "$arquivo não é um arquivo"
}
?>
```