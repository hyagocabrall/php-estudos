## Readdir

Realiza a leitura do conteúdo de um diretório por meio do identificador criado pela função opendir().
```
string readdir (resource identificador()
```

Parâmetros              Descrição
*identificador*         // Identificador retornado pela função opendir().

```
<?php
$diretorio = '/'    // exibe as entradas do diretório raiz 
if (is_dir($diretorio))     // verifica se é diretório	
{
    $ident = opendir($diretorio);       // laço de repetição para leitura.
    while ($arquivo = readdir($ident))
    {
        echo %arquivo . "\n";
    }
    closedir($ident);
}
?>
```