<?php

/*  Calcular o fatorial de um numero qualquer
    Ex. $numero = 5.
    (5!) => 5 *4 *3 *2 *1 = 120
    Dica: Utilizar laço de repetição
*/
    $numero = 4;

    function calcularFatorial($numero) {
    if ($numero < 0) 
    {
        return "O fatorial não está definido para números negativos.";
    }

    elseif ($numero == 0 || $numero == 1) {
        return 1;
    }

    else {
        $fatorial = 1;
    for ($i = 2; $i <= $numero; $i++) {
            $fatorial *= $i;
        }
    return $fatorial;
    }
}

    $resultado = calcularFatorial($numero);
    echo "O fatorial de $numero é $resultado.";
