## Unlink

Apaga um arquivo passado como parâmetro. Retorna True em caso de sucesso e False em caso de falhas.
```
bool unlink (string nome_arquivo)

<?php
$arquivo = "/tmp/file3.txt";
if(inlink($arquivo))
{
    echo "Arquivo apagado";
}
else
{
    echo "Arquivo não apagado";
}
?>
```
