## Get_class

Retorna o nome da classe a qual um objeto pertence
```
string get_classe (object nome_objeto)

<?php
class Funcionario
{
    var $Codigo;
    var $Nome;

    function SetSalario()
    {

    }
    function GetSalario()
    {

    }
}

$jose = new Funcionario;
echo get_classe($jose);
?>
```