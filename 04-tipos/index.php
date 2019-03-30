<?php 
/*
    TIPOS DE DATOS:
    Entero (int / interger) = 99
    Coma flotante / decimales (float / double) = 0.5
    Cadenas (string) = "Hola yo soy un string"
    Boleano (bool) = true false
    null
    Array (Coleccion de datos)
    Objetos
*/

$numero = 100;
$decimal = 3.47;
$string = "string";
$verdadero = true;
$nula = Null;
echo gettype ($numero)."</br>";
echo gettype ($decimal)."</br>";
echo gettype ($string)."</br>";
echo gettype ($verdadero)."</br>";
echo $verdadero."</br>";//cuando es true muestra el 1, y si es falce no sale nada
echo gettype ($nula)."</br>";

/*
Las variables no pueden comenzar por un numero
ni signos raros ni ñ, ni tildes,
el guion bajo si se puede

*/

//DEBUGEAR

$mi_nombre = "Maria Moreno";
var_dump($mi_nombre ."<br>");// es una funcion para saber que tipo de dato hay cuanto mide y demas

$texto = "soy un texto $numero";// se puede mostrar el  valor de la variable con las comillas dobles pero con comillas simples toca concatenar.
//Para que me imprima unas comillas dobles hay que poner la barra invertida para que se pueda visualizar

$mi_apellido = "Moreno \"";
echo $mi_apellido;
?>