## Tipo Objeto

Um objeto é uma entidade com um determinado comportamento definido por seus métodos (ações) e propriedades (dados). Cria-se objetos iniciando com operador new. Exemlo:

```
<?php
class COmputador
{
    var $cpu;
    function ligar()
    {
        echo "Ligando computador a {$this->cpu}...";
    }
}

$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();
?>
```

Ligando o computador a 500Mhz...