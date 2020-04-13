## Is_subclass_of

Indica se um determinado objeto ou classe é derivado de uma determinada classe.
```
boolean is_subclass_of (mixed objeto, string classe)

<?php
Class Funcionario
{
    var $Codigo;
    var $Nome;
}

class Estagiario extends Funcionario
{
    var $Salario;
    var $Bolsa;
}

$jose = new Estagiario;
if (is_subclass_of($jose, 'Funcionario'))
{
    echo "Classe do objeto Jose é derivada de Funcionario";
}
echo "\n";      // quebra de linha

if (is_subclass_of('Estagiario', 'Funcionario'))
{
    echo "Classe Estagiario é derivada de Funcionario";
}
?>
```