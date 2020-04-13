## Get_class_methods

Retorna um vetor com os nomes dos métodos de uma determinada classe.
```
array get_class_methods (string nome_classe)

<?php
class Funcionario
{
    function SetSalario()
    {

    }
    function GetSalario()
    {

    }
    functionSetNome()
    {

    }
    funcition GetNome()
    {

    }
}

print_r (get_class_methods('Funcionario');)
?>
```