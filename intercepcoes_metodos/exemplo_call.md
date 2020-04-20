## Método __call()
O método __call() intercepta a chamada de métodos. Sempre que for executado um método que não existir no objeto, automaticamente a execução será direcionada para ele, que recebe dois parâmetros, o nome do método requisitado e o parâmetro recebido, podendo decidir o procedimento a realizar.
```
<?php
class Produto
{
    var $Codigo;
    var $Descricao;
    var $Quantidade;
    private $Preco;
    const MARGEM = 10;

    function __contruct ($Codigo, $Descricao, $Quantidade, $Preco)  //Método construtor de um Produto
    {
        this ->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Quantidade = $Quantidade;
        $this->Preco = $Preco;
    }
    function __call ($metodo, $parametros)  //intercepta a chamada de métodos
    {
        echo "Você executou o método: {$metodo}\n";
        foreach ($parametros as $key => $parametro)
        {
            echo "\t Parâmetro $key: $parametro\n";
        }
    }
}
?>
```
Neste exemplo, iremos instanciar um objeto da classe **Produto**. Tentaremos executar o método **vender ()**, sendo que este método não existe. note que esta execução é interceptada pelo método __call(), que emite uma mensagem na tela, informando qual foi o método executado e quais parâmetros foram passados.
```
<?php
include_once 'classes/Produto.class.php';   //inclui classe Produto
$produto = new Produto (', 'Pendrive 512 mb', ', 345.67);   // criando novo produto e ajustando o preço
echo $produto -> Vender(10);    // Esecutando método vender, passando 10 unidades
?>

Resultado:
Você executou o método: Vender
Parâmetro 0: 10
```