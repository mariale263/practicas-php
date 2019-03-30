<?php

/*
EJERCICIO 5.

Hacer un programa que muestre todos los numeros entre dos 
numeros que nos lleguen por la URL ($_GET)
*/
if (isset ($_GET['num1']) && isset($_GET["num2"])) {
    $num1= $_GET["num1"];
    $num2= $_GET["num2"];

   if ($num1 < $num2) {
       
        for ($i = $num1; $i<=$num2  ; $i++) { 
            echo $i."<br>";
        }
    }else{
        echo "El numero 1 debe ser menor que el numero 2";
    }

} else {
    echo "<h1>Introduce correctamente los numeros por la url</h1>";
}