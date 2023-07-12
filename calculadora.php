<?php

$value = '78';
$value2 = '6';
$operador = '+';
$resultado = '0';


if ($operador == '+'){
    $resultado = $value + $value2;
}

if ($operador == '-'){
    $resultado = $value - $value2;
}

if ($operador == '*'){
    $resultado = $value * $value2;
}

if ($operador == '/'){
    $resultado = $value / $value2;
}

echo $resultado;
