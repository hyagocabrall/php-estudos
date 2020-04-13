## Method_exists

Verifica se um determinado objeto possui o método descrito.
```
boolean method_exists (object objeto, string método)

<?php
class Funcionario
{
    var $Codigo;
    var $Nome;


function Get Salario ()
{
}
function SetSalario ()
{
}
}

$jose = new Funcionario;

if (method_exists($jose, 'SetNome')
{
    echo 'Objeto Jose possui método SetNome()';
}
if (method_exists($jose, 'SetSalario')
{
    echo 'Objeto Jose possui método SetSalario()';
}
?>
```