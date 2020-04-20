## Método __set()
O método __set() intercepta a atribuição de valores a propriedades do objeto. Sempre que for atribuido um valor a uma propriedade do objeto, automaticamente esta atribuição passa pelo método __set(), o qual recebe o nome da propriedade e o valor a ser atribuido, podendo atribuí-lo ou não.
```
<?php
class Cachorro
{
    private $Nascimento;

    function __contruct ($Nome)     //método construtor
    {
        $this-> nome = $nome;
    }

    function __set($propriedade, $valor)    //intercepta atribuição
    {
        if ($propriedade == 'Nascimento')           //Verifica se o valor é divido em 3
        {                                           //partes separadas por '/'
            if (count(explode('/', $valor))==3)
            {
                echo "Dado '$valor', atribuido á '$propriedade'\n";
                $this -> $propriedade = $valor;
            }else{
                echo "Dado '$valor', não atribuido á '$propriedade'\n";
            }
           
        }else{
            $this -> $propriedade = $valor;
        }
    }
}
?>
```
No próximo exemplo, instanciaremos um objeto $toto da classe Cachorro. A data de **nascimento** do objeto será atribuída duas vezes. Note que, nas duas vezes, o método __set() irá interceptar a atribuição, validando-a. Somente a segunda atribuição passará pelas regras de atribuição definidas dentro do método __set(). A segunda data é válida porque é formada por três partes separadas por "/".
```
<?php
#inclui classe cachorro
include_once 'classes/Cachorro.class.php';

$toto = new Cachorro('Totó');
$toto -> Nascimento = '3 de março'; //Atribuição incálida
$toto -> Nascimento = '10/04/2005'; //Atribuição correta
?>

Resultado:
Dado '3 de março', náo atribuido á 'Nascimento'
Dado '10/04/2005', atribuido á 'Nascimento'
```
