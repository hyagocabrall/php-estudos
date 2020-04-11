## File_put_contents

Grava uma string em um arquivo. Retorna a quantidade de bytes gravados.
```
int file_put_contents (string nome_arquivo, mixed conteúdo)
```

Parâmetros      Descrição
*nome_arquivo*    //Arquivo a ser aberto
*conteúdo*        //Novo conteúdo

```
<?php
echo file_put_contents ('/tmp/teste.txt', "este \n é o conteúdo \n do arquivo");
?>
```