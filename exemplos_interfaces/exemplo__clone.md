## Método __clone()
Este método é utilizado para gerar duas variáveis idênticas apontando para a emsma região da memória, este método é responsável por definir o comportamento da ação de clonagem, atuando diretamente nas propriedade do objeto resultante dessa ação.

No exemplo, criaremos um objeto $toto da classe **Cachorro** e, em seguida, iremos cloná-lo. Neste exemplo, o método __clone() executado no momento da clonagem define que o código da **coleira** do **Cachorro** deverá ser incrementado, sua **idade** será zerada e seu **nome** será acrescido de 'Júnior' ao final.
```
<?php
class Cachorro
{
    function __construtor($coleira, $nome, $idade, $raca)   //Método construtor
    {
        $this -> coleira = $coleira;
        $this -> nome = $nome;
        $this -> idade = $idade;
        $this -> raca = $raca;
    }
    function __clone()
    {
        $this -> coleira = $this -> coleira +1;
        $this -> nome .= 'Junior';
        $this -> idade = 0;
    }
}

$toto = new Cachorro (100, 'Totó', 10, 'Fox Terrier');
$vava = clone $toto;

echo 'Código: '. $toto -> coleira ."\n";
echo 'Nome: '. $toto -> nome ."\n";
echo 'Idade: '. $toto -> idade ."anos \n"

echo "\n";
echo 'Código: '. $vava -> coleira . "\n";
echo 'Nome: '. $vava -> nome . "\n";
echo 'Idade: '. $vava -> idade ."anos \n";
?>

Resultado:
Código: 100
Nome: Totó
Idade: 10 anos

Código: 101
Nome: Totó Junior
Idade: 0 anos
```