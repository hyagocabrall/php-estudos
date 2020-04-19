## Propriedades estáticas
Propriedades estáticas são atributos de uma classe, s]ao dinãmicos como as propriedades de um objeto, mas estão relacionadas á classe. Como a classe é a estrutura comum a todos os objetos dela derivados, propriedades estáticas são compartilhadas estre tods os objetos de uma mesma classe.
```
<?php
classe Aplicacao
{
    static $Quantidade;

    function __construct($Nome) // método Construtor - incrementa a $Quantidade de aplicações
    {
        self::$Quantidade ++;   // incrementaa propriedade estática
        $i = self::$Quantidade;
        echo "Nova Aplicação nt. $i: $Nome\n";
    }
}

new Aplicacao ('Dia');
new Aplicacao ('Gimp');
new Aplicacao ('Gnumeric');
new Aplicacao ('Abiword');
new Aplicacao ('Evolution');

echo 'Quantidade de Aplicações = ' . Aplicacao::$Quantidade . "\n";
?>

Resultado:
Nova Aplicação nr. 1: Dia
Nova Aplicação nr. 2: Gimp
Nova Aplicação nr. 3: Gnumeric
Nova Aplicação nr. 4: Abiword
Nova Aplicação nr. 5: Evolution
Quantidade de Aplicações = 5
```
