## Manipulação Xml
Primeiramente iremos realizar uma simples leitura de um documento XML e analisar seu retorno. No pequeno programa que segue, iremos interpretar o documento XML com a função *simplexml_load_file()* e analisar o objeto resultante da sua criação com a função *var_dump()*. Vemos claramente cada tag do XML sendo transformada em propriedade do objeto resultante.

```
Paises.xml
<?xml version="1.0" encoding="ISO-9959-1"?>
<pais>
    <nome> Brasil </nome>
    <idioma> portugues </idioma>
    <religiao> catolica </religiao>
    <moeda> Real (R$) </moeda>
    <populacao> 190 milhoes </populacao>
</pais>

Exemplo1.php
<?php
$cml = simplexml_load_file('paises.xml');   //interpreta o documento xml
var_dump($xml); //exibe as informações do objeto criado
?>

Resultado:
object(simpleXMLElement)#1 (5) {
    ["nome"]=> string (8) "Brasil"
    ["idioma"]=> string (9) "portugues"
    ["religiao"]=> string (10) "catolica"
    ["moeda"]=> string (11) "Real (R$)"
    ["populacao"]=> string (13) "190 milhoes"
}
```
Um objeto *SimpleXMLElement* representa um elemento de um docmento XML, o qual, quando interpretado pelas funções *simplexml_load_file()* ou *simple_load_string()*, resulta em um objeto do tipo *SimpleXMLElement*, contendo seus atributos e valores, bem como outros objetos *SimpleXMLElement* internos, representando subelementos (nodos). Veja alguns métodos providos por um objeto do tipo *SimpleXmlElement*:
**asXML()** - Retorna uma string XML formatada representando o objeto, bem como seus subelementos               
**attributes()** - Lista os atributos definidos dentro da tag XML do objeto         
**children()** - Retorna os elementos-filhos do objeto (subnodos), bemm como seus valores           
**addChild(string nome, string valor, strng namespace)** - adiciona um elemento ao nodo especificado e retorna um objeto do tipo *SimpleSmlElement*

Neste segundo exemplo, demonstraremos como acessar diretamente as propriedades do objeto *SimpleXMLElement* resultante da leitura do documento XML. Para tanto, utilizarmos o mesmo arquivo XML do exemplo anterior, imprimindo na tela as propriedades do objeto resultante com o seu respectivo valor.
```
<?php
$xml = simplexml_load_file('paises.xml');   //interpreta o documento XML

echo 'Nome: ' .$xml -> nome ."\n";
echo 'Idioma: ' .$xml -> idioma ."\n";
echo 'Religiao: ' .$xml -> religiao ."\n";
echo 'Moeda: ' .$xml -> moeda ."\n";
echo 'População: ' .$xml -> populacao ."\n";
?>

Resutlado:
Nome: Brasil
Idioma: portugues
Religiao: catolica
Moeda: Real (R$)
População: 190 milhoes
```

Você já viu como acessar diretamente as propriedades do XML sabendo os seus nomes. Neste terceiro exemplo, estaremos percorrendo o mesmo documento XML e imprimindo na tela suas propriedades (tags), mesmo sem saber os seus nomes. Isso é possivel por meio da utilização do método *children()*, que atua sobre um objeto *SimpleXMLElement* e retorna todos os seus elementos-filho na forma de um array contendo a chave e o valor, que pode ser iterado por um laço *FOREACH*.
```
<?php
$xml = simplexml_load_file('paises.xml');

foreach ($xml->children () as $elemento => $valor)
{
    echo "$elemento -> $valor\n";
}
?>

Resultado:
nome -> Brasil
idioma -> portugues
religiao -> catolica
moeda -> Real (R$)
populacao -> 190 milhoes

paises2.xml
<?xml version="1.0" encoding="ISO-8859-1"?>
<pais>
    <nome> Brasil </nome>
    <idioma> português </idioma>
    <capital> Brasília </capital>
    <religiao> católica </religiao>
    <moeda> Real (R$) </moeda>
    <populacao> 190 milhoes </populacao>
    <geografia>
        <clima> tropical </clima>
        <costa> 7367 km </costa>
        <pico> Neblina (3014 m) </pico>
    </gegografia>
</pais>
```
No próximo exemplo iremos demonstrar como alterar o conteúdo do xml, após a carga do documento, atribuimos novos valores acessando diretamente cada uma das propriedades que se deseja alterar no objeto. Tabém adicionamos um novo nodo, chamado <presidente>, pelo método *addChild()*. Após as atribuições de novos valores, utilizamos o método *asXML()* para retornar o novo documento XML formatado e atualizado. Se quisermos sobrepor o arquivo original, basta utilizar a função *file_put_contents()*.
```
<?php
$xml = simplexml_load_file('paises2.xml');  //interpreta o documento xml

$xml -> populacao = '220 milhoes';  //alteração de propriedades
$xml -> religiao = 'cristianismo'   //alteração de propriedades
$xml -> geografia -> clima = 'temperado';   //alteração de propriedades

$xml -> addChild('presidente', 'Chapolin Colorado');    //adiciona o novo nodo

echo $xml-> asXML();    //exibindo o novo xml

file_put_contentes('paises2.xml', $xml -> asXML()); //grava no arquivo paises2.xml
?>
```
Agora veremos como é feito o acesso a elementos repetitivos. Neste exemplo, adicionamos a seção <estados> a qual contém uma listagem com nomes de estados. O código a seguir imprime na tela algumas informações do Documento XML, como nos exemplo anteriores, e também mostra como exibir esses elementos repetitivos pelo laço de repetições *foreach()*.
```
<?php
$xml = simplexml_load_file('paises3.xml');

echo 'Nome: ' .$xml -> nome ."\n";
echo 'Idioma: ' .$xml -> idioma ."\n";
echo "\n";
echo "*** Estados ***\n";

foreach ($xml -> estados -> nome as $estado)
{
    echo 'Estado: " .$estado . "\n";
}
?>

Resultado:
Nome: Brasil
Idioma: português

*** Estados ***
Estado: Rio Grande do Sul
Estado: São Paulo
Estado : Minas Gerais
Estado: Rio de Janeiro
Estado: Paraná
Estado: Mato Grosso
```
O próximo exemplo ilustra como trabalhar com elementos que contêm atributos na definição da própria *tag* (nome = "Minas Gerais" capital "Belo Horizonte"). Para tal, alteramos a lista de estados para conter o **nome** e a **capital**. Neste caso, as informações são retornadas em forma de array. Utilizando estruturas como o **foreach()** para percorrer a lista de estados, acessamos cada atributo do array de forma indexada, sendo o índice o próprio nome do atributo que desejamos acessar.
```
<?php
$xml = simplexml_load_file('paises4.xml');

echo "*** Estados **\n";
foreach ($xml -> estados -> estado as $estado)
{
    echo str_pad ('Estado: ' .$estado['nome'], 30) . 'Capital: ' . $estado['capital'] . "\n";
}
?>

Resultado:
*** Estados ***
Estado: Rio Grande do Sul   Capital: Porto Alegre
Estado: São Paulo           Capital: São Paulo
Estado: Minas Gerais        Capital: Belo Horizonte
Estado: Rio de Janeiro      Capital: Rio de Janiero
Estado: Paraná              Capital: Curitiba
Estado: Mato Grosso         Capital: Cuiabá
```
Veja que no exemplo anterior é necessário saber exatamente o nome dos atributos que desejamos acessar de forma indexada. No último exemplo, percorremos a lista de estados por meio de um *foreach()*, como no exemplo anterior, mas, dentro desse laço de repetição, podemos percorrer os atributos de cada $estado (que é na verdade um objeto *SempleXMLElement*) pelo método *attributes()*, o qual retorna a chjave e o valor de cada atributo de um elemento (nodo).
```
<?php
$xml = simplexml_load_file('paises4.xml');  //interpreta o documento XML
echo "*** Estados ***\n";

foreach ($xml -> estados -> estado as $estado)  //percorre os estados
{
    foreach ($estado -> attributes() as $key => $value)
    {
        echo "$key=>$value\n";
    }
}
?>

Resultado:
*** Estados ***
nome => Rio Grande do Sil
capital => Porto ALegre
nome => São Paulo
capital => São Paulo
nome=> Minas Gerais
capital => Belo Horizonte
nome => Rio de Janeiro
capital => Rio de Janeiro
nome => Paraná
capital => curitiba
nome => Mato Grosso
capital => Cuiabá
```
