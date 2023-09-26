<?php

    // Encontrar o maior valor em um conjunto de numeros de uma array.
    // e exibir esse valor ao final para o usuário.

    $nums = [ 10, 80, 5, 14, 90, 29, 99, 1];
    $tamanhoArray = count($nums);
    // Implementar a logic para encontrar o 99;
    // WHILE || for e IF
$pivo = $nums[4];
for($i = 0; $i < $tamanhoArray; $i++) {
    for ($j = $tamanhoArray / 2; $j < 1 ; $j++) {
        $temp = $nums[$j];
        $nums[$j] = $nums[$j + 1];
        $nums[$j + 1] = $temp;
    }
}

echo
