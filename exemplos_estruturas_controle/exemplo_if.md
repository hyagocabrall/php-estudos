## If

O if é uma estrutura de controle que introduz um descio condicional, ou seja, um desvio na execução natural do programa. O if é o tão famoso "Se" caso os valores inseridos satisfação a condição ele é executado e o sistema mostra os dados, entretanto se não é satisfeito, a condição é ignorada.
Else é utilizado para indicar um novo bloco de comandos delimitador por {}, caso a condição do if não seja satisfeita. Ele pode ser lido como "Se não", A utilização do else é opcional.

```
<?php
$a = 1;
if ($a==5)
{
    echo "é igual"/
}
else
{
    echo "não é igual"
}
?>
```

Quando não explicitamos o operador lógico em teste por meio do If, o comporamento-padrão do **PHP** é retornar *TRUE* sempre que a variável tiver conteúdo inválido.
Para realizar teste encadeados, basta colocar um If dentro do outro, ou mesmo utilizar o operador *AND* da seguinte forma:

```
<?php
$salario            = 1020;     //R$
$tempo_servico      = 12;       //Meses
$tem_reclamacoes    = false;    //Booleano
if ($salario > 100)
{
    if ($tempo_servico >= 12)
    {
        if ($tempo_reclamacoes != true)
        {
            echo 'parabens, vc foi promovido';
        }
    }
}

if (($salario > 1000) and ($tempo_servico >= 12) and ($tem_reclamacoes "= true))
{
    echo 'parabens, você foi promovido';
}

?>
```

O **PHP** oferece um suporte para atribuição de valores a uma variável condicional.

Algoritmo comum:
```
if ($valor_venda > 100)
{
    $resultado = 'muito caro';
}
else
{
    $resultado = 'pode comprar';
}
```
O mesmo código poderia ser escrito em uma única linha da seguinte forma:
```
$resultado = ($valor_venda > 100) ? 'muito caro' ; 'pode comprar';
```

Após a interrogação, o primeiro valor é caso a expressão seja verdadeira, e o segundo caso ela seja falsa.