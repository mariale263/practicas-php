<?php

/*
Variables locales: Son las que se definen dentro de una funcion y no pueden ser 
usadas fuera de la funcion solo estan disponibles dentro, a no se que yo haga un
return.

variables globales: Son las que se declaran fuera de una funciones y estan 
disponibles dentro y fuera de las funciones


*/

echo "<h1>Variables Globales</h1><br/>";

$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";//Variable Global

echo $frase;

function holaMundo(){
    global $frase;
    echo "<h3>$frase</h3>";

    $year = 2019;
    echo "<h1>$year</h1><br/>";
    

    return $year;
}

echo "<p><em>Si declaramos la variable $ year fuera de la funcion nos dara un error pero si,
la retornamos aqui fuera como acontinuacion y luego llamamos normal la funcion si nos funcionara.</em></p>";


holaMundo();


//FUNCIONES VARIABLES

echo "<h1>Funciones variables</h1><br/>";

function buenosDias(){
    return "Hola! Buenos dias :";
}

function buenasTardes(){
    return "Hey!! Que tal ha ido la comida??";
}

function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas noches!!";
}

echo "<h2>Opcion 1 para llamar a la funcion</h2>";

$horario ="BuenasNoches";

echo $horario();

echo "<h2>Opcion 2 para llamar a la funcion</h2>";

$horario1 = "Tardes";

$miFuncion = "buenas".$horario1;
echo $miFuncion();

echo "<h2>Opcion 3 para llamar a la funcion por la URL con GET ?horario=Noches</h2>";

$horario1 = $_GET["horario"];

$miFuncion = "buenas".$horario1;
echo $miFuncion();




