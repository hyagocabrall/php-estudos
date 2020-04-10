## Switch

O comando switch trabalha de forma parecida com a organização de menu, vc preenche as condicionais com as opções e ele recebe a entrada e compara os casos, caso a comparação seja true ele executa aquele bloco de informações, caso seja false ele testa a próxima. Caso após todas as comparações os dados de entrada continuem false, ele entra no default que é onde configuramos a execução para opção inexistente. Ao encerrar cada case, deve se utilizar a função break.
Obs: Se você tem um switch dentro de um loop e deseja continuar para a próxima interação do laço de repetição, utilize o comando continue 2, que escapará dois níveis acima.

```
<?php
$i = 1;
switch ($i)
{
    case 0:
        print "i é igual a 0";
        break;

    case 1:
        print "i é igual a 1";
        break;

    case 2:
        print "i é igual a 2";
        break;

    default:
        print "i não é igual a 0, 1 ou 2";
}
?>
```

O switch executa linha por linha até encontrar a funçaõ break. A cláusula default será executada caso nenhuma das expressões anteriores tenha sido verificada.

