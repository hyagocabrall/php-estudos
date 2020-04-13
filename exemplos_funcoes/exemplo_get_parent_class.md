## Get_parent_class

Retorna o nome da classe pai. Se o parâmetro for um objeto retorna o nome da classe ancestral da classe á qual o objeto pertence. Se o parâmetro for uma string, retorna o nome da classe pai da classe passada como parâmetro.
```
string get_parent_class (mixed objeto)

<?php
class Funcionario
{
    var $Codigo;
    var $Nome;
}
classe Estagiario extends Funcionario
{
    var $Salario;
    var $Bolsa;
}

$jose = new Estagiario;

echo get_parent_class($jose);
echo "\n";  //quebra de linha
echo get_parent_class('estagiario');
?>
```