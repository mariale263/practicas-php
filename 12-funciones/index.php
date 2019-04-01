<?php

/**
 * FUNCIONES:
 * Son conjuntos de ordenes agrupados por un nombre en concreto
 * reutilizando la funcion una y mis veces
 * 
 */

 //Ejemplo1
 echo "<h1>Ejemplo 1: Funciones</h1>";


function muestraNombre(){
    echo "Victor Robles <br/>";
    echo "Maria Moreno <br/>";
    echo "Pablo Escobar <br/>";
    echo "Daniel Escboar <br/>";
}
 muestraNombre();

 //se puede invocar la funcion las veces que uno quiera o necesite


 //Ejemplo 2

 //Generar una funcion para generar la tabla de multiplicar de un numero
 echo "<h1>Ejemplo 2: Funciones, generando tabla de multiplicar</h1>";
 function tabla($num1){
    echo "<h3>Tabla de multiplicar del $num1</h3>"; 

     for ($i=0; $i <= 10 ; $i++) { 
         
         $x = $num1 * $i;
         echo "$num1 x $i = $x <br>";
     }
 }
tabla(2);

for ($i=0; $i <=10 ; $i++) { 
    tabla($i);
}

//Ejemplo 3

echo "<h1>Ejemplo 3: Funciones con Parametros</h1>";

function calculado($numero11, $numero12){
    
    $suma = $numero11 + $numero12;
    $resta = $numero11 - $numero12;
    $multiplicacion = $numero11 * $numero12;
    $division = $numero11 / $numero12;
    
    echo "Suma: $suma <br/> ";
    echo "Resta: $resta <br/> ";
    echo "Multiplicacion: $multiplicacion <br/> ";
    echo "division: $division <br/> ";

}

calculado(4, 5);




//Parametros opcionales

echo "<h1>Parametros opcionales</h1>";

function calculad($numero1, $numero2, $negrita = false){
    
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    if($negrita){
        echo "<h1>";
        
    }
    
    echo "Suma: $suma <br/> ";
    echo "Resta: $resta <br/> ";
    echo "Multiplicacion: $multiplicacion <br/> ";
    echo "division: $division <br/> ";

    if($negrita){
        echo "</h1>";
        
    }

}

calculad(4, 5, false);
calculad(4, 7, true);


//FUNCIONES CON RETORNO

echo "<h1>Funciones con retorno</h1>";

function calculadora($numer1, $numer2, $negrita = false){
    
    $suma = $numer1 + $numer2;
    $resta = $numer1 - $numer2;
    $multiplicacion = $numer1 * $numer2;
    $division = $numer1 / $numer2;

    $cadena_texto = "";

    if($negrita){
        $cadena_texto .= "<h1>";
        
    }
    
    $cadena_texto .= "Suma: $suma <br/> ";
    $cadena_texto .= "Resta: $resta <br/> ";
    $cadena_texto .= "Multiplicacion: $multiplicacion <br/> ";
    $cadena_texto .= "division: $division <br/> ";

    if($negrita){
        $cadena_texto .= "</h1>";
        
    }
    $cadena_texto .= "<hr/>";

    return $cadena_texto;
}

echo calculadora(2, 4, true);

//Ejemplo 4: Funciones dentro de otras

echo "<h1>Ejemplo 4: Funciones dentro de otras</h1>";

function gNombre($nombre){
    $texto = "El nombre es  $nombre";
    return $texto;
}

function gApellidos($Apellidos){
    $texto = "Los apellidos son  $Apellidos";
    return $texto;
}

function devuelveDatos($nombre, $apellidos){
   $texto = gNombre($nombre)
            ."<br/>".
            gApellidos($apellidos);
    return $texto;
}

echo devuelveDatos("Maria", "Moreno");

echo "<br/><em>Tambien se pueden llamar individualmente</em><br/>";

echo gApellidos("Escobar");



 
 