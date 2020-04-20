## Exemplo Interface
No exemplo a seguir, criaremos a classe **Aluno**, mas o projeto do sistema indica que esta classe deve implementar um conjunto de métodos que devem estar disponíveis para os outros objetos do sistema. Para tanto, criamos a interface **IAluno** contendo os métodos **getNome()**, **setNome()** e **setResponsavel()**. Neste exemplo, a classe **Aluno** não está implementando o método **setResponsavel()** (que recebeu um parâmetro da classe **Pessoa**), dessa forma, o programa irá retornar o erro indicado no final.
```
<?php
interface IAluno    //interface Aluno
{
    function getNome();
    function setNome();
    function serResponsavel(Pessoa $responsavel);
}

class Aluno implements IAluno   //classe aluno
{
    function setNome($nome) //atribui o nome do aluno
    {
        $this -> nome = $nome;
    }
    function getNome()  //retora o nome do aluno
    {
        return $this -> nome;
    }
}

$joaninha = new Aluno;  // instancia novo Aluno
$joaninha -> setNome ('Joana Maranhao');
echo $joaninha -> getNome();
?>

Resultado:
Fatal error: Class Aluno contais 1 abstract methods and must therefore be declared abstract (IAluno::setResponsavel) in interface.php on line 24.
```