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


<?php

$value = '2';
$value2 = '5';
$operador = '%';
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

if ($operador == '^'){
    $resultado = pow($value, $value2);
    $resultado = $value ** $value2;
}

if ($operador == '%'){
    $resultado = pow($value, $value2);
    $resultado = $value % $value2;
}

echo "o valor é {$resultado}";
