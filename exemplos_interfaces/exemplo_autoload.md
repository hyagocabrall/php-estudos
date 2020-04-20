## Método Autoload
Esta função tem a mesma aplicação do método **include_once**, com ela a carga da classe é realizada de forma dinâmica sempre que um objeto for instanciado. Essa função recebe o nome da classe que está para ser instancidada, mas, antes que isso aconteça, ela tem de introduzir sua classe na memória.
No exemplo a seguir estamos lendo a classe no diretório *classes/* e adicionando *.class.php*, que é a extensão do arquivo. Perceba o correto funcionamento do programa.
```
<?php
function __autoload($classe)    //função de carga automática
{
    include_once "classes/{$classe}.class.php"; //busca a classe no diretório classes
}

$bolo = new Produto (500, 'Bolo de Fubá', 4, 4.12);
echp 'Código: '. $bolo -> Codigo . "\n";
echo 'Nome: ' . $bolo -> Descricao . "\n";
?>

Codigo: 500
Nome: Bolo de Fubá
```