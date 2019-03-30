<?php

//Operadores aritmeticos

$num1 = 55;

$num2 = 33;

echo 'suma: '.($num1 + $num2).'<br>';
echo 'resta: '.($num1 - $num2).'<br>';
echo 'multiplicacion: '.($num1 * $num2).'<br>';
echo 'division: '.($num1 / $num2).'<br>';
echo 'resto: '.($num1 % $num2).'<br>';


//Operadores de incremento y decremento

$year = 2019;

//$year++; Respuesta es 20 incremento $year = $year + 1;
//$year--; Respuesta es 18 decremento $year = $year - 1;
//++$year;preincremento 20 $year = 1 + $year;
--$year;//predecremento 20 $year = 1 - $year;


echo "<h1>$year</h1>";

// Operadores de asignacion

$edad = 55;

echo $edad.'<br>';
echo ($edad+=5).'<br>';//$edad = $edad + 5;
echo ($edad-=5).'<br>';//$edad = $edad - 5; y se puede hacer cualquier tipo de operador +, -, *, /, %


