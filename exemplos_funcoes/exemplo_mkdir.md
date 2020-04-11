## Mkdir

Cria um diretório
```
bool mkdir (string localização, [ínt modo])
```

Parâmetros              Descrição
*localização*           //Localização de um diretório
*Modo*                  //Permissão de acesso

```
<?php
$dir = '/tmp/diretorio'
if (mkdir($dir, 0777))
{
    echo "$dir criado com sucesso";
}
else
{
    echo "$dir não criado";
}
?>
```