# Repositório para estudos relacioandos ao php 

# O que é ?

O **PHP** é uma linguagem de programação que começou inicialmetne no intuito de controlar o acesso ao curriculo de [Rasmus Lerdorf](https://github.com/hyagocabrall/php-estudos/blob/master/criadores_php/rasmus_lerdorf.md). Se baseava em u conjunto de scripts, que posterirmente foi crescendo e tendo influências da linguagem C, Depois de alguns anos de evolução e da ajuda de 2 estudantes ([Andi Gutmans](https://github.com/hyagocabrall/php-estudos/blob/master/criadores_php/andi_gutmans.md) e [Zeev Suraski](https://github.com/hyagocabrall/php-estudos/blob/master/criadores_php/zeev_suraski.md)), a linguagem se tornou uma das maiores de sua época, chegando a ser utilziada por mais de 20% de todo domínio da internet.

# Como surgiu ?

O **PHP** sugiu inicialmetne no intuito de controlar o acesso ao curriculo de [Rasmus Lerdorf](https://github.com/hyagocabrall/php-estudos/blob/master/criadores_php/rasmus_lerdorf.md). Se baseava em um conjunto de scripts, que posterirmente foi crescendo e tendo influências da linguagem C, após certo ponto de evolução o mesmo decidiu disponibilizar seu código na internet se tornando o **PHP/FI** (Personal Home Pages/Forms Interpreter), para obter um feedback sobre sua linguagem, isso por volta 1995.

Em novembro de 1997 foi lançada uma nova versão do **PHP**, nesta época certa de 1% de toda a itnernet já utilizava o **PHP**, neste momento alguns estudantes ([Andi Gutmans](https://github.com/hyagocabrall/php-estudos/blob/master/criadores_php/andi_gutmans.md) e [Zeev Suraski](https://github.com/hyagocabrall/php-estudos/blob/master/criadores_php/zeev_suraski.md)) que utilizavam a linguagem decidiram se unir a ramus e reformularam a linguagem, nascendo assim o **PHP 3**, disponibilizado oficialmente em junho de 1998. Esta versão foi bastante revolucionária contendo muitas particularidades como extensibilidade, possibilidade a conexão de banco de dados, novos protocolos, sintaxe mais consistente, suporte á orientação a objetos e até podendo ser utilizado **API**, ao final deste ano o **PHP 3** ja éra utilizado por cerca de 10% e todos os domínios da internet, neste meio tempo a sigla passou a ter um novo significado (Hypertext Preprocessor), assim expressando as reformuações da linguagem.

Ainda em 1998 os estudantes decidiram reescrever o núcleo do **PHP** e batizaram este novo núcleo como Zend Engine (Zeev + Andi). Em maio de 2000 foi lançado o **PHP 4** trazendo novamente muitas melhoria, entre elas as que mais se descaram foram a abstração de sua **API** e a possibilidade de utilizar a linguagem para shell script, neste ano foi levantado que cerca de 20% dos dóminios da internet utilizavam o **PHP**.

O **PHP 5** Foi disponibilizado em julho de 2004, resolvendo antigos bugs e melhorando seu suporte a orentação a objeto.

# Problemas que resolve: 

Esta linguagem tem como suas pasticularidades a facilitação o desenvolvimento de aplicações web, extensibilidade, conexões a diferentes bancos de dados, sintaxe consistente, suporte a orientação a objetos e API's exclusivas.

# Instalação

 Caso deseje realizar a instação do php, clique na tag [ >>> Instalação <<< ](https://github.com/hyagocabrall/php-estudos/blob/master/INSTALACAO.md)

## Declaração de variável

Variáveis são identificadores utilizados para representar valores inseridos ou interpretados no sistema, estes valores são mutáveis e voláteis, sendo assim os mesmos só existem durantes a execução do sistema, sendo armazenado na memória RAM e descartado assim que o sistema recebe um novo valor, ou o programa é encerrado. Existem algumas [Regras de Variáveis](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/regras_variaveis.md) para declaração das mesmas no **PHP**.
```
<?php
$nome_cliente   // Exemplo de variável
$nomeCliente    // Exemplo de viarável
?>
```

Para criar referências entre as varíaveis, sendo 2 variáveis apontando para o mesmo local na memória RAM, deve-se preceder a variável com "&", sendo assim a referência se mantém independente da situação, por exemplo:

```
<?php
$a = 5;
$b = &$a;
$b = 10
echo $a;    // resultado = 10
echo $b;    // resultado = 10
?>
```
Existem vários tipos de variáveis que se adequam melhor em determinadas situações, exemplo:     
1- [Booleano](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/booleano_variavel.md)  
2- [Numérico](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/numerico_vaiavel.md)   
3- [String](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/string_variavel.md)  
4- [Array](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/array_variavel.md)    
5- [Objeto](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/objeto_variavel.md)  
6- [Recuso](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/recurso_variavel.md)      
7- [Misto](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/misto_variaveis.md)          
9- [Callback](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/callback_variaveis.md)      
10- [NULL](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_variaveis/null_variaveis.md)    

## Contantes

A constante é um identificador que ao contrário das variáveis seu valor não é mutável, ele é criado com um valor fixo que é mantido durante a execução do programa. Para que isto ocorra existem algumas delimitações, as constantes so podem conter valores escalares (boolean, inteiro, ponto flutuante e string). Para declaração de constrantes não se utiliza inicialmente o cifrão "$" mas sim a função define (). Normlamente estas são escritas todas em maíusculo.

```
<?php
define ("MAXIMO_CLIENTES", 100);
echo MAXIMO_CLIENTES;
?>
```

## Operadores

Os tipos de operadores são:         
1- [Atribuição](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_operadores/exemplo_atribuicao.md)  
2- [Aritméticos](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_operadores/exemplo_aritmeticos.md)    
3- [Relacionais](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_operadores/exemplo_relacionais.md)    
4- [Lógicos](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_operadores/exemplo_logicos.md)

## Estruturas de controle

As estruturas de controle são:          
1- [If](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_if.md)  
2- [While](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_while.md)   
3- [For](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_for.md)   
4- [Switch](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_switch.md)      
5- [Foreach](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_foreach.md)   
6- [Continue](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_break.md)    
7- [Break](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_estruturas_controle/exemplo_break.md)   

## Requisições de arquivos

Em linguagens de script como o **PHP**, frequentemente precisamos de auxilio externo, como inclusão de funções, constantes, configurações ou até mesmo arquivos envolvendo classes de de objetos. Algumas destas funções são:      
1- [Include](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_include.md)            
2- [include_once](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_include_once.md)     
3- [Require](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_require.md)           
4- [require_once](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_require_once.md)           

## Funções
Função é um pedaço de código com um objetivo espécífico, encapsulado sob uma estrutura única que recebe um conjunto de parâmetros e retorna algum dado. As funções são declaradas apenas uma vez, e podem ser utilizadas quanto for necessário.
Para declarar uma função em **PHP**, utiliza-se o operador *function* seguido do nome que desejamos lhe atribuiir, sem espaços em branco e iniciando obrigatoriamente com uma letra. Na mesma linha adicionamos os parâmetros da função, separados por virgula, e em seguida colocamos o código da função dentro de {}. No final das funções utiliza-se o *return* para delimitar o tipo de resultado que a mesma irá retornar.

```
<?php
function calcula_obesidade($peso, $altura)  //nome da função (parâmetros)
{                               
    retur $peso / ($altura*$altura);        //fórmula utilizada
}
echo calcula_obesidade (70, 1.85);
?>
```
Segue algumas funções expecíficas para manipulação de arquivos e diretórios:

1- [Fopen](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_fopen.md)       
2- [Feof](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_feof.md)     
3- [Fgets](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_fgets.md)       
4- [Fwrite](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_fwrite.md)     
5- [Fclose](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_fclose.md)     
6- [File_put_contents](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_file_put_contents.md)       
7- [file_get_contents](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_file_get_contents.md)       
9- [File](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_file.md)     
10- [Copy](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_copy.md)        
11- [Rename](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_rename.md)        
12- [Unlink](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_unlink.md)        
13- [File_exists](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_file_exists.md)      
14- [is_file](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_getcwd.md)       
15- [mkdir](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_getcwd.md)     
16- [getcwd](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_getcwd.md)        
17- [chdir](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_chdir.md)      
18- [rmdir](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_rmdir.md)      
19- [opendir](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_getcwd.md)       
20- [closedir](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_closedir.md)        
21- [readdir](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_readdir.md)      

## Variáveis globais

Todas as variáveis declaradas dentro do escopo de uma função são locais e podem ser utilizadas a qualquer momento por aquela função. Entretanto em alguns casos é necessário utilizar variáveis que estão fora daquele grupo de funções, sendo assim é necessário declará-las como global. uma variável global é acessada a partir de qualquer ponto da aplicação.

```
<?php
$total = 0;
function km2mi($quilometros)
{
    global $total;
    $total += $quilometros;
    return $quilometros * 0.6;
}
echo 'percorreu' . km2mi(100) . "milhas \n";
echo 'percorreu' . km2mi(200) . "milhas \n";
echo 'percorreu no total' . $total . "quilometros \n";
?>
```

## Variáveis estáticas

Dentro do escopo de uma função podemos armazenar variáveis de forma estática. Assim, elas mantêm o valor que lhes foi atribuido na última execução. Declaramos uma variável estática com o operador *static*.

```
<?php
function percorre ($quilometros)
{
    static $total;
    $total += $quilometros;
    echo "percorreu mais $quilometros do total de $total \n"/
}
percorre(100);
percorre(200);
percorre(50);
?>
```

## Recursão
O **PHP** permite chamada de funções recursivamente. No caso a seguir criaremos uma função para calcular o fatorial de um número.
```
<?php
funcition Fatorial ($numero)
{
    if ($numero == 1)
        return $numero;
    else
        return $numero * Fatorial($numero -1);
}
echo Fatorial (5) . "\n";
echo Fatorial (7) . "\n";
?>
```

## Strings

### Declaração de strings
 Uma string é uma cadeia de caracteres alfanuméricos. Para declarar uma string podemos utilziar apóstrofe '' ou aspas "".
 ```
 <?php
 $variavel = 'maça'     
 print "Como $fruta";       // resultado 'como maça' - quando utilizado "" o php interpreta a valiravel
 print 'como $fruta';       // resultado 'como $fruta' - quando utilizado '' o php traz a variável
 ?>
 ```

### Concatenação
Para concatenar strings, pode-se utilizar o perador "." ou colocar múltiplas variáveis dentro de strings duplas "," uma vez que seu conteúdo é interpretado.
```
<?php
$a = 1234;
echo 'O salário é ' . $a . "\n";    // O salário é 1234
echo "O salário é $a \n";  // O salário é 1234
?>
```

### Caracteres de escape
Dentro do **php** existem alguns comando procedidos de \ que podemos utilizar para alcançar funções específicas.

Caractere       Descrição

*\n*                      // Quebra de linha

*\r*                     // Retorno de carro

*\t*                    // Tabulação

*\"*                   // Aspas duplas

*\$*                  // Símbolo de $


Obs: utiliza aspas duplas para declarar strings somente quando for necessário avaliar o conteúdo, evitando, assim, tempo de processamento desnecessário.

### Funções envolvendo strings
As funções aqui demonstradas são utilizadas para tratativa de strings       
1- [Strtoupper](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_strtoupper.md)     
2- [Strtolower](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_strtolower.md)     
3- [Substr](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_substr.md)     
4- [Strpad](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_strpad.md)     
5- [Str_repeat](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_str_repeat.md)     
6- [Strlen](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_strlen.md)     
7- [Str_repleace](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_str_replace.md)      
8- [Strpos](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_strpos.md)     

## Arrays
Arrays são acessados mediante uma posição, como um índice numérico. Para criar um array, pode-se utilizar a função array ([chave =>]valor, ...)
```
$cores = array ('vermelho', 'azul', 'verde', 'amarelo');
        ou
$cores = array (0=>'vermelho', '1=>'azul', 2=>'verde', 3=>'amarelo');
        ainda sim
$cores[]='vermelho'; 
$cores[]='joão';
$cores[]='carlos';
$cores[]='josé';
```
De qualquer forma, basta vc digitar o a posição dentro do colchetes que ele lhe mostrará a informação correspondente
```
echo $cores[0] = vermelho
```

### Interações do Array
Os arrays podem ser interativos no **PHP** pelo operador *foreach*, percorrendo cada uma das posições do array.
```
$frutas['cor']  =   'vermelha';
$frutas['sabor']    =   'doce';
$futas['formato']   =   'redonda';
$frutas['nome'] =   'maça';   
foreach ($frutas as $chave => $fruta)
{
    echo "$chave => $fruta \n";
}
``` 
### Funções envolvendo arrays
As funções aqui demonstradas são utilizadas para tratativa de arrays        
1- [array_push](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_push.md)     
2- [array_pop](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_pop.md)       
3- [array_shift](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_shift.md)       
4- [array_unshift](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_unshift.md)           
5- [array_pad](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_pad.md)       
6- [array_reverse](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_reverse.md)       
7- [array_merge](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_merge.md)       
8- [array_keys](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_keys.md)     
9- [array_values](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_values.md)     
10- [array_slice](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_slice.md)      
11- [count](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_count.md)          
12- [array_in](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_array_in.md)        
13- [sort](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_sort.md)            
14- [rsort](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_rsort.md)          
15- [asort](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_asort.md)          
16- [ksort](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_ksort.md)          
17- [explode](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_explore.md)      
18- [implode](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_implode.md)          

## Objetos

Um objeto é uma entidade com um determinado comportamento definido por seus métodos (ações) e propriedades (dados). Para criar um objeto deve-se utilizar o operador *new*.
```
<?php
class Computador
{
    var $cpu;
    function ligar()
    {
        echo "Ligando computador a {$this->cpu}...";
    }
}

$obj = new Computador;
$obj -> = "500Mhz"
$obj -> ligar();
?>
```


### Funções envolvendo objetos
Nesta lista iremos tratar de uma série de funções envolvendo manipulação de objetos.            
1- [get_class_methods](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_get_class_methods.md)       
2- [get_class_vars](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_get_class_vars.md)     
3- [get_object_vars](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_get_object_vars.md)       
4- [get_class](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_get_class.md)           
5- [get_parent_class](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_get_parent_class.md)     
6- [is_subclass_of](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_is_subclass_of.md)     
7- [method_exists](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_method_exists.md)       
8- [call_user_func](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_funcoes/exemplo_call_user_func.md)     


## Classes
Classe é uma estrutura que define um tipo de dados, podendo conter atributos (variáveis) e também funções (métodos) para manipular estes atributos.
Obs: Recomenda-se iniciar nomes de classes com a letra maipuscula e, de preferência, evitar a utilização do caractere "_". Ex: class CestaDeCompras ao invéz de cesta_de_compras.
```
<?php
class Produto
{
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;
}
?>
```

Os membros de uma classe são declarados na ordem: primeiro as propriedades, e em seguida, os métodos.
```
<?php
class Pessoa
{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    // Método Crescer - Aumenta a altura em $centimetros
    function Crescer($centimetros)
    {
        if ($centimetros > 0)
        {
            $this -> Altura += $centimetros;
        }
    }

    // Método Formar - Altera a escolaridade para $titulacao
    function Formar($titulacao)
    {
        $this -> Escolaridade = $titulacao;
    }

    // Método Envelhecer - Aumenta a idade em $anos
    function Envelhecer($anos)
    {
        if ($anos > 0)
        {
            $this -> Idade += $anos;
        }
    }
}
?>
```

## Construtores e destrutores
Construtor é um método especial utilizado para definir o comportamento inicial de um objeto, ou seja, o comportamento no momendo de sua criação. O mesmo é executado automaticamente no momento em que instanciamos o operador *new*. Assim, não devemos retornar nenhum valor por meio do método construtor por que o mesmo retorna por definição o p´roprio objeto que está sendo instanciado.
Obs: para definir um método *construtor* em um determinada classe basta declarar o método **__construct()**

Destrutor ou finalizador é um método especiaal executado automaticamente quando o objeto é desalocado da memória, quando atribuimos o valor *NULL* ao objeto, quando utilizamos a função **unset()** sobre o mesmo, o programa é finalizado. O método destrutor pode ser utilizado para finalizar conexões, apagar arquivos temporários criados durante o ciclo de voda do objeto, dentre outras circunstâncias.
Obs: para definir um método destrutor em uma determinada classe basta declarar o método **__destruct()**

## Herança
A herança é o compartilhamento de atributos e comportamentos entre as classes de uma mesma hierarquia (árvore). As classes inferiores da hierarquia automaticamente herdam todas as propriedades e os métodos das classes superiores, chamadas de superclasse.

## Polimorfismo
O polimorfismo é o principio que permite que classes derivadas de uma mesma superclasse tenham métodos iguais (com a mesma nomenclatura e parâmetros), mas comportamentos diferentes, redefinidos em cada uma das classes-filhas.
Obs: O **php** não suporta sobrecarga, ou métodos com o mesmo nome, mas assinaturas (parametrixação) diferentes.

## Abstração
Para construir um sistema orientado a objetos, não devemos projetar o sistema como sendo uma grande pela monolítica, devemos separá-lo em partes, concentrando-nos nas peças mais importantes e ignorando os detalhes (em primeiro momento), para podermos construir peças bem-definidas que possam ser reaprovetadas mais tarde, formando uma estrutura hierárquica.

## Classes abstratas
Classes abstratas são classes que nunca serão instanciadas na forma de objetos, sometne suas filhas. É interessantes marcas essas classes como sendo classes abstratas, demodo que cada classe abstrata é tratada diferentemente pela linguagem de programação, a qual irá automaticamente impedir que se instanciem objetos a partir dela.

## Classes finais
A classe final não pode ser uma superclasse, ou seja, não pode ser em uma estrutura de herança. Se definirmos uma classe como final pelo operador *final*, ela não poderá mais ser especializada.

## Métodos abstratos
Um método abstrato consiste na definição de uma assinatura na classe abstrata. Sendo assim obriga que antes da classe filha ser utilizada deverá ter sido preenchida primeiramente a classe pai.

## Métodos finais
Um método final não pode ser sobrescrito na classe filha. Para marcar um método como final, basta utilizar o operador *final* no início da sua declaração.

## Encapsulamento
O encapsulamento é um mecanismo que provê proteção de acesso aos membros internos de um objeto. Considerando que as as classes possuem responsabilidade sobre os atributos que contem, existem certas propriedades de uma classe que devem ser tratadas exclusivamente por métodos dela mesma, que são implementações projetadas para manipular essas propriedade da forma correta. As propriedades nunca devem ser acessadas diretamente de fora do escopo de uma classe, pois dessa forma a classe não fornece garantias sobre os atributos que contém. perdendo, assim, a responsabilidade sobre eles.
Uma das formas de atingir o encapsulamento é definir a [visibilidade das propriedades](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_encapsulamento/visibilidade_classificacao.md) e dos metodos de um objeto. A visibilidade define a forma como as propriedades devem ser acessadas.

Obs:  A visibilidade foi introduzida no **PHP 5**, sendo assim ficou definido que quando não houver visivilidade definida de uma propriedade por padrão ela será *public*.

## Membros da classe
A classe é uma estrutura-padrão para a criação de objetos. A classe permite que armazenemos valores enla de duas formas: [constantes de classe](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_membros_classe/exemplos_membros_classe.md) e [propriedades estáticas](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_membros_classe/exemplos_propriedades_estaticas.md). Estes atributos são comuns a todos os objetos da mesma classe.

## Métodos estáticos
  Métodos estáticos podem ser invocados diretamente da classe, sem a necessidade de isntanciar um objeto para isso. Eles não devem referenciar propriedades internas pelo operador $this, porque este operador é utilizado para referenciar propriedades internas da classe (objetos), mas não a própria classe. São limitados a chamarem outros métodos estáticos da classe ou tulizar apenas prrpiedades estáticas. Para executar um método estático, basta utilizar a sintaze NomeDaClasse::NomeDoMétodo(). Um método estático pode acessar ainda constantes de classe e propiedades estáticas da mesma classe (por meio do operador *self*) e da superclasse (por meio do operador *parent*).
```
<?php
class Aplicacao
{
    static function Sobre ()    // Método estático - lê o arquivo readme.txt
    {
        $fd = fopen('readme.txt', 'r');
        while ($linha = fgts($fd, 200))
        {
            echo $linha;
        }
    }
}
echo "Informações sobre a aplicação: \n";
echo "=============================: \n";
Aplicacao::Sobre();
?>

Resutlado:
Informações sobre a aplicação:
=============================:
Esta aplicação está licenciada sob a GLP
Paramaiores informações, www.fsf.org
Contate o autor através do e-mail autor@aplicacao.com.br
```

## Associação
Associação é a relação mais comum entre dois objetos, de modo que um possui uma referência á posição da memória onde o outro se encontra, podendo visualizar seus atributos ou mesmo acionar uma das suas funcionalidades (métodos). A forma mais comim de implementar uma associação é ter um objeto como atributo de outro.

## Agregação
Agregação se deve quando um objeto agrega outro objeto, ou seja, torna um objeto externo parte de si mesmo pela utilização de um dos seus métodos. Assim, o objeto-pai poderá utilizar funcionalidades do objeto agregado. Nesta relação, um objeto poderá agregar uma ou muitas instâncias de um outro objeto. Para agregar muitas instâncias, a forma mais simples é utilziando arrays. Cria-se um array como atributo da classe, sendo que o papel deste array é armazenar inpumeras instâncias de uma outra classe.

## Composição
A composição parece com a agregação, sua diferença consiste em o objeto-pai ou "todo" é responsável pela criação e destruição de suas partes. O objeto-pai realmente "possui" a(s) instância(s) de suas partes, ja na agregação , as instâncias de "todo" e das "partes" são independentes.
Na agregação, ao destruirmos o objeto "todo", as "partes" permanecem na memória por terem sido criadas fora do escopo da classe "todo". Já na composição, quando o objeto "todo" é destruído, suas "partes" também são, justamente por terem sido criadas pelo objeto "todo".

## Intercepções
O **PHP5** introduziu o conceito de interceptação em operações realizadas por objetos por meio dos métodos [__set()](https://github.com/hyagocabrall/php-estudos/blob/master/intercepcoes_metodos/exemplo_set.md), [__get()](https://github.com/hyagocabrall/php-estudos/blob/master/intercepcoes_metodos/exemplo_get.md), [__call()](https://github.com/hyagocabrall/php-estudos/blob/master/intercepcoes_metodos/exemplo_call.md), [__toString()](https://github.com/hyagocabrall/php-estudos/blob/master/intercepcoes_metodos/exemplo_call.md) e [__toXml()](https://github.com/hyagocabrall/php-estudos/blob/master/intercepcoes_metodos/exemplo_toxml.md).

## Interfaces
As interfaces são conjunto de métodos que determinadas classes do nosso sistema deverão implementar incondicionalmente, toda classe que implementar uma interface deverá obrigatoriamente possuir os métodos pre definidos na interface, caso contrátio resultará em erro.
Obs: uma classe pode implementar diversas interfaces separadas por virgula.
[Exemplo Interface](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_interfaces/exemplo_interface.md)
Nas interfaces são utiliziados 2 métodos [__clone()](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_interfaces/exemplo__clone.md) e [autoload](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_interfaces/exemplo_autoload.md).

## Objetos dinâmicos
O **PHP** nos oferece a opção de criarmos objetos dinamicamente, sem ter a classe previamente definida, entretanto esses objetos não recebem funções, apenas dados.
```
<?php
$william -> nome = 'William Scatola';
$william -> idade = 22;
$william -> profissao = 'Controle de Estoque';

$daline -> nome = 'Daline DallOglio';
$daline -> idade = 21;
$daline -> profissao = 'Almoxerifado';

print_r($william);
print_r($daline);
?>

Resultado:
stdClass Object
(
    [nome] => William Scatola
    [idade] => 22
    [profissao] => Controle de Estoque
)
stdClass Object
(
    [nome] => Daline DallOglio
    [idade] => 21
    [profissao] => Almoxerifado
)
```

## Manipulação de xml
A função que iremos abordar se chama SimpleXML, ela está disponível a partid do **PHP5**, seu objetivo é facilitar a leitura, interpretação e alteração de arquivos xml. Sendo assim iremos demonstrar alguns [exemplos](https://github.com/hyagocabrall/php-estudos/blob/master/exemplos_manipulacao_xml/manipulacao_xml.md) de forma gradual para sua aplicação.
Obs: a função *simplexml_load_file()* realiza a leitura de um documento xml, criando um objeto do tipo *SimpleXmlElement* a partir dessa operação. Caso o documento seja mal formatado, ou mesmo não seja um documento xml, essa função retornará FALSE.

## Tratamento de erros
Existem diversas formas de tratar os erros no **php** dentre elas iremso abordar as mais comuns:

### Função die ()
A forma de manipulação de erro mais simples é abortar a execução da aplicação. Claro que não é qualquer erro que deva causar esta interrupção. Esta é a forma mais simplista de tratar erros e, portanto, não deve ser utilizada amplamente.
```
<?php
function Abrir ($file = null)
{
    if ("$file)
    {
        die ('Falta o parâmetro com o nome do Arquivo')/
    }
    if ("file_exists($file))
    {
        die ('Arquivo não existe');
    }
    if (!$retorno = @file_get_contents($file))
    {
        die ('Impossivel ler o arquivo');
    }
    return $retorno;
}

$arquivo - Abrir ('/tmp/arquivo.dat');  //abrindo um arquivo
echo $arquivo;
?>

Resultado:
Arquivo não existe
```
Utilizar a função die() para controlar erros é ruim porque ela simplesmente aborta a execução do programa, o que, na maioria dos casos, não é o comportamento desejado, bisto que nem todos os tipo de erros são fatais para a execução da aplicação.

### Retono de flags
Outra forma de manipulação de erros é o retono de flags *TRUE* ou *FALSE*. Retornamos *TRUE* em caso de sucesso na operação e *FALSE* em caso de erros.
```
<?php
function Abrir(#file = null)
{
    if (!file)
    {
        return false;
    }
    if (!file_exists($file))
    {
        return false;
    }
    if (!$retorno = @file_get_contents($file))
    {
        return false;
    }
    return $retorno;
}

$arquivo = Abrir ('/tmp/arquivo.dat');

if (!$arquivo)
{
    echjo 'Falha ao abrir o arquivo';
}else{
    echo $arquivo;
}
?>

Resultado:
Falhas ao abrir o arquivo
```
A vantagem desse tipo de abordagem em relação ao primeiro é que a aplicação segue a sua execução sem ser abortada (a nao ser que a abortemos ao testar o retorno da função). A desvantagem é que não sabemos exatamente em qual ponto do programa a execução falhou, não tendo como exibir a mensagem de erro correta, apenas uma genérica.

### Lançando erros
Uma forma mais elegante de realizar a manipulação de erros é por meio das funções *trigger_error()*, que lança um erro, e a função *set_error_handler()*, a qual define uma função que realizará a manipulação dos erros lançados.

**trigger_error()**

bool trigger_error (string erro, int tipo)

erro - Mensagem de erro gerada.
tipo - Tipo de erro, veja os exemplos abaixo:

*E_USER_ERROR* - Gera um erro fatal
*E_USER_WARNING* - Gera uma warning
*E_USER_NOTICE* - Gera uma notice

**set_error_handler()**
Define uma função a ser utilizada para manipular erros

mixed set_error_handler (callback handler, int tipo)

handler - Função ou método de um objeto a ser invocado
tipo - Tipo de erro a ser manipulado. (segue a mesma orientação do *trigger_error*)
```
<?php
function Abrir ($file = null)
{
    if (!$file)
    {
        trigger_error ('Falta o parâmetro com o nome do arquivo', E_USER_NOTICE);
        return false;
    }
    if (!file_exists($file))
    {
        trigger_error('Arquivo não existe', E_USER_ERROR);
        return false;
    }
    if (!$retorno = @file_get_contents($file))
    {
        trigger_error('Impossível ler o arquivo', E_USER_WARNING);
        return false;
    }
    return $retorno;
}

function manipula_erro ($numero, $mensagem, $arquivo, $linha)   //função para manipular o erro
{
    $mensagem = "Arquivo $arquivo : linha $linha # no. $numero : $mensagem\n";

    $log = fopen ('erros.log', 'a');    //escreve no log todo tipo de erro
    fwrite ($log, $mensagem);
    fclose ($log);

    if ($numero == E_USER_WARNING)  // se for uma warning
    {
        echo $mensagem;
    }else if ($numero == E_USER_ERROR){ // se for um fatal error
        echo $mensagem;
        die;
    }
}

set_error_handler ('manipula_erro');    //define a função manipula_erro como manipuladora dos erros ocorridos

$arquivo = Abrir('/tmp;arquivo.dat');
echo $arquivo;
?>

Resultado:

Arquivo erro_trigger.php : linha 11 # no. 256 : Arquivo não existente
```
A vantagem desse tipo de abordagem para maipulação de erros é a liberdade que temos para personalizar o tratamento de erros por meio da função *manipula_erro()* definida por *set_error_handler()* como sendo a função a ser invocada quando algum erro ocorre. Dentro desta função podemos exibir ou suprimir a exibição do erro, gravá-lo em um banco de dados ou gravar em um arquivo de log. A desvantagem deste tipo de abordagem é que concentramos todo tratamento de erro em uma única função genérica, quando muitas vezes precisamos analisar caso a caso para optar por uma determinada ação.



