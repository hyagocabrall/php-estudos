## Get_class_vars

Retorna um vetor com os nomes das propriedades e conteúdos de uma determinada classe. Os valores são definidos na criação das classes.
```
array get_class_vars (string nome_classe)

<?php
class Funcionario
{
    var $Codigo;
    var $Nome;
    var $Salario
    var $Departamento = 'Contabilidade';

    function SetSalario()
    {

    }
    function GetSalario()
    {

    }
}

print_r(get_class_vars('Funcionario');)
?>
```