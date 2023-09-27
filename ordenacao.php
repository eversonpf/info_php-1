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

// Remover valores duplicados de um array.
$frutas = [
    "maça",
    "banana",
    "laranja",
    "banana",
    "uva",
    "maça","maça",
];
  // Saida esperada :maça, banana , laranja, uva
  // Dica: in_array(), array_merge(), isset(), array_push()   

  $newFrutas = [];
  for($i =; $i < count($frutas); $i++) {

      $fruta = $frutas[$i];
     
      if (!isset(newFrutas[$fruta])){
        $newFrutas[$fruta] = 1; // ["maca"] = 1
      } else {
        $newFrutas[$fruta] += 1; // [ "maca"] += 1(2)

      }
    }
    echo implode("," $newFrutas,$frutas,);
