<?php

/*  Calcular o fatorial de um numero qualquer
    Ex. $numero = 5.
    (5!) => 5 *4 *3 *2 *1 = 120
    Dica: Utilizar laço de repetição
*/
  
    $numero = 4;
    $fatorial = 1;
    $contador = 1;

    while ($contador <= $numero){
        $fatorial *= $contador;
        $contador ++;
    }

    echo "O fatorial de $numero é $fatorial.";
