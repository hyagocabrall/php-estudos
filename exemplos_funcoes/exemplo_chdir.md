## Chdir

Altera o diretório corrente. Retorna True em caso de sucesso e False em caso de falhas.
```
bool chdir (string localização)
```

Parâmetros          Descrição
*localização*       // Localização de um diretório.

```
<?php
echo 'o diretório atual é: ' .getcwd();
chdir ('/home/pablo');
echo 'o diretório atual é: '.getcwd();
?>
```