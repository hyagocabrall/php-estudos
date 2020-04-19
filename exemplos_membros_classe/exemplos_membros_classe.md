## Constantes de classe

A declaração de uma constante se deve pelo operados *const*, seu acessod e forma externa ao contexto da classe, pela sintaxe **NomeDaClasse:::NomeDaConstante**, e dentro da classe, pela sintaxe *self::NomeDaConstante*. O operador *self* representa a própria classe.
```
<?php
class Biblioteca
{
    const Nome = "GTK ";
}
class Aplicacao extends Biblioteca
{
    const Ambiente = "Gnome Desktop";   // declaração das constantes
    const Versao = "3.8";               // declaração das constantes

    function __construct($Nome) // método cosntrutor, acessa as constantes internamente
    {
        echo parente::Nome . self::Ambiente . silf::Versao . $Nome . "\n";
    }
}

echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "\n"; // Acessa as constantes externamente

new Aplicacao('Dia');
new Aplicacao('Gimp');
?>
Resultado:
GTK Gnome Desktop 3.8
GTK Gnome Desktop 3.8 Dia
GTK Gnome Desktop 3.8 Gimp
```

