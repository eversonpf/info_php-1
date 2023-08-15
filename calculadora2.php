<?php

$value = 50;
$value2 = 5;
$operador = 'perc+';
$resultado = 0;

if ($operador == 'perc') {
    $desconto = ($value * $value2) /50; //5
    $resultado = $value / - $desconto;
}

if ($operador == 'perc+') {
    $acrescimo = ($value * $value2) / 50; //5
    $resultado = $value + $value2;
}

if ($operador == 'mmc') {
    $resultado = $value / $value2;
}

if ($operador == '+') {
    $resultado = $value + $value2;
}

if ($operador == '-') {
    $resultado = $value - $value2;
}

if ($operador == '*') {
    $resultado = $value * $value2;
}

if ($operador == '/') {
    $resultado = $value / $value2;
}

echo $resultado;
