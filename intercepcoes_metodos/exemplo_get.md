## Método __get()
O método __get() intercepta requisições de propriedade do objeto. Sempre que for requisitada uma propriedade, automaticamente essa requisição passará pelo método __get(), o qual recebe o nome da propriedade requisitada, podendo retoá-la ou não.
```
<?php
class Produto
{
    var $Codigp;
    var $Descricao;
    var $Quantidade;
    private $preco;
    const MARGEM = 10;
    function __contruct ($Codigo, $Descricao, $Quantidade, $Preco)  // método construtor de um Produto
    {
        $this -> Codigo = $Codigp;
        $this -> Descricao = $Descricao;
        $this -> Quantidade = $Quantidade;
        $this -> Preco = $Preco;
    }
    function __get($propriedade)
    {
        echo "Obtendo o valor de '$propriedade' :\n";
        if ($propriedade == 'Preco')
        {
            return $this -> $Propriedade * (1+(self::MARGEM / 100));
        }
    }
}

?>
```
O método __get() pode ser utilizado para retornar valores calculados. Neste caso, poe exemplo, ao solicitar o preço de um produto, podemos retorná-lo já com seu valor ajustado (com a margem de lucro).
```
<?php
include_once 'classes/Produto.class.php';   //inclui classe Produto
$produto = new Produtoo (1, 'pendrive 512 mb', 1, 345.67);  //cria novo produto e adiciona a descrição
echo $produto -> Preco; //Imprime o preço
?>

Resultado:
Obtendo o valor de 'Preço': 380,237
```