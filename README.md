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

1- [Fopen]()
2- [Feof]()
3- [Fgets]()
4- [Fwrite]()
5- [Fclose]()
6- [File_put_contents]
7- [file_get_contents]
9- [File]()
10- [Copy]()
11- [Rename]()
12- [Unlink]()
13- [File_exists]()
14- [is_file]()
15- [mkdir]()
16- [getcwd]()
17- [chdir]()
18- [rmdir]()
19- [opendir]()
20- [closedir]()
21- [readdir]()


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


## Classes

## Orientação a objeto

## Condicionais

## Listas

## Objetos
