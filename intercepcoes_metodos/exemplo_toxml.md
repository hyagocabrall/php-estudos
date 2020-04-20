## Método toXml()
O **PHP** não possui método para retornar o objeto em formato XML, mas iso não é problema, uma vez que é muito fácil desenvolver tal funcionalidade. No exemplo a seguir, a classe **Cachorro** possui um método *toXml()*, que retorna os dados do objeto em forma de uma string **xml**.
```
<?php
class Cachorro
{
    function __construct ($nome, $idade, $raca)  //Método construtor
    {
        $this -> = $nome;
        $this -> = $idade;
        $this -> = $raca;
    }
    function toXml()    // toXml, retorna o objeto no formato xml
    {
        return
        <<<XML
        <cachorro>
        <nome> {this -> nome} </nome>
        <idade> {this -> idade} </idade>
        <raca> {this -> raca} </raca>
    </cachorro>
    xml;
    }
}

$toto = new Cachorro ('Totó', 10, 'Fox Terrier');
$vava = new Cachorro ('Daba', 8, 'Dálmata');
echo $toto -> toXml();
echo $vava -> toXml();
?>

Resultado:
<cachorro>
    <nome> Totó </nome>
    <idade> 10 </idade>
    <raca> Fox Terrier </raca>
</cachorro>
<cachorro>
    <nome> Daba <\nome>
    <idade> 8 </idade>
    <raca> Dálmata </raca>
</cachorro>
```