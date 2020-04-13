## Get_object_vars

Retorna um vetor com os nomes e conteúdos das propriedades de um objeto. São valores dinâmicos que se alteram de acordo com o ciclo de vida do objeto.
```
array get_object_vars (object nome_objeto)

<?php
class Funcionario
{
    var $Codigo;
    var $Salario
    var $Salario = 990;
    var $Departamento = 'Contabilidade';
    function SetSalario()
    {

    }
    function GetSalario ()
    {

    }
}

$jose = new Funcionario;
$jose->Codigo = 44;
$jose->Nome = 'José da Silva';
$jose->Salario += 100;
$jose->Departamento = 'Financeiro';

print_r(get_object_vars($jose));
?>
```