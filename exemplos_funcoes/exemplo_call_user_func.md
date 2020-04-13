## Call_user_func

Executa uma função ou um método de uma classe passado como parâmetro. Para executar uma função, basta passar seu nome como uma string, e, para executar um método de um objeto, basta passar o parâmetro como um array contendo na posição 0 o objeto e na posição 1 o método a ser executado. Para executar métodos estáticos, basta passar o nome da classe em vez do objeto na posição 0 do array.

```
mixed call_user_func (callback função [, mixed parâmetro [, mixed]])

<?php
function minhafuncao()          // Chamada Simples
{
    echo "minha função! \n";
}

call_user_func('minhafuncao');

class MinhaClasse   // Declaração de classe
{
    function MeuMetodo()
    {
        echo "Meu método! \n";
    }
}

call_user_func(array('MinhaClasse', ' MeuMetodo'));     // chamada de método estático

$obj = new MinhaClasse();
call_user_func(array($obj, 'MeuMetodo'));
?>
```