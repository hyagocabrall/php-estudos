## Método __toString()

Quando imrpimimos objetos na tela, por meio de comandos como o **echo** e **print**, o **PHP** exibe no console o identificador interno do objeto:
Object id #1
Object id #2

Para alterar esse comportamento, podemos definir o método __tostring() para cada classe. Caso o método __tostring() exista, no momento em que mandarmos exibir um objeto no console, o **PHP** irá imprimir o retono dessa função.
Obs: Note que no momento em que imprimimos esses objetos no console, será retornado o próprio nome dos mesmos.
```
<?php
class Cachorro
{
    private $Nascimento;
    function __construct($nome) //Método construtor
    {
        $this -> nome = $nome;
    }
    function __tostring()
    {
        return $this -> nome;
    }
}

$toto = new Cachorro('Totó');
$vava = new Cachorro('Daba');
echo $toto;
echo "\n";
echo $vava;
echo "\n"
?>

Resultado:
Totó
Daba
```