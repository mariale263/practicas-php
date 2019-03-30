<?php

/*
EJERCICIO 3

Escribir un programa que imprima por pantalla los cuadrados  que es 
un numero multiplicado por si mismo de los primeros 40 numeros
naturales

pdta: utilizar el bucle while
*/


/*
$a = 0;

while ($a < 40) {
    $a++;
    $cuadrados = $a*$a;
    echo "El numero cuadrado de $a es: ".$cuadrados."<br>";
}

*/

//Ahora con el bucle for


for ($i=0; $i <= 40; $i++) { 
    $cuadrado = $i * $i;
    echo "El numero cuadrado de $i es: ".$cuadrado."<br>";
}
