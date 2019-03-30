<?php

/*
EJERCICIO 4

Este ejercicio va a consistir en lo siguiente tenemos que recoger dos números por la URL con un parámetro

GET y tenemos que hacer todas las operaciones de una calculadora básica con ello de acuerdo a la

suma de esos dos números la resta es un buen número.

La multiplicación de esos dos números y la división son dos números vale.

*/


if (isset ($_GET['num1']) && isset($_GET["num2"])) {
    $num1= $_GET["num1"];
    $num2= $_GET["num2"];

    echo "<h1>Calculadora</h1>";

    echo "El resultado de la suma es:".$suma = $num1 + $num2."<br>";
    echo "El resultado de la resta es:".$resta = $num1 - $num2."<br>";
    echo "El resultado de la multiplicacion es:".$multiplicacion = $num1 * $num2."<br>";
    echo "El resultado de la division es:".$division = $num1 / $num2."<br>";
    echo "El resultado de la resto es".$resto = $num1 % $num2;

} else {
    echo "<h1>Introduce correctamente los numeros por la url</h1>";
}

