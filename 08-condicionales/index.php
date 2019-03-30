<?php

/*
  CONDICIONALES
 
    if(condicion){
        instrucciones
    }else{
        otras condiciones
    }


    //OPERADORES DE COMPARACION

    == IGUAL
    === IDENTICO
    != DIFERENTE
    <> DIFERENTE
    !== NO IDENTICO
    < MENOR QUE
    > MAYOR QUE
    <= MENOR IGUAL QUE
    >= MAYOR IGUAL QUE

    // OPERADORES LOGICOS

    && ADN Y
    || OR O
    ! NOT NO
    and, or
 */

 //EJEMPLO 1 
 $color = "rojo";

 if($color == "rojo"){
     echo "El color es rojo";
 }else{
     echo "El color no es rojo";
 }
 echo "<br>";

 // EJEMPLO 2
 $year =2019;

 if($year < 2019){
    echo "Es un año anterior a 2019";
 }else{
     echo "Es un año posterior a 2019";
 }

 //EJEMPLO 3

 $nombre = "Maria Moreno";
 $ciudad = "Madrid";
 $continente = "Europa";
 $edad = 12;
 $mayoria_edad = 18;

 if ($edad >= $mayoria_edad) {
     echo "<h1>$nombre es mayor de edad</h1>";
     
     if ($continente == "Europa") {
        echo "<h2>Y es de $ciudad</h2>";
     }else {
        echo "No es Europeo";
     }
 } else {
     echo "<h2>$nombre No es mayor de edad</h2>";
 }


 //EJEMPLO 4
echo "<br>";

 //$dia = 5;

 /*if ($dia == 1) {
     echo "Lunes";
 } else {
     if ($dia == 2) {
        echo "Martes";
     } else {
         if ($dia == 3) {
            echo "Miercoles";
         } else {
            if ($dia == 4) {
                echo "Jueves";
             } else {
                if ($dia == 5) {
                    echo "Viernes";
                 } else {
                    echo "Fin de semana";
                 }
             }
         }
         
     }
     
 }*/

 //CON ELSE IF ES DIFERENTE NO COMO EL ANTERIOR
/*
 if ($dia == 1) {
     echo "Lunes";
 } elseif($dia == 2) {
     echo "Martes";
 }elseif($dia == 3){
     echo "Miercoles";
 }elseif($dia == 4){
     echo "Jueves";
 }elseif($dia == 5){
     echo "Viernes";
 }else{
     echo "Fin de semana";
 }

 */
 echo "<br>";
 //ejemplo 5 

 $edad1 = 18;
 $edad2 = 64;
 $edad_oficial = 17;

 if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
     echo "Esta en edad de trabajar";
 } else {
     echo "No puede trabajar";
 }
  echo "<hr/>";
 $pais = "Mexico";

 if($pais=="Mexico" || $pais=="España" || $pais=="Colombia"){
     echo " En  $pais se habla español";
 }else{
     echo "En $pais no se habla español";
 }
 

 echo "<hr/>";

 // SWITCH  

 $dia = 7;

 switch ($dia) {
    case '1':
        echo "LUNES";
        break;
    case '2':
        echo "MARTES";
        break;
    case '3':
        echo "MIERCOLES";
        break;
    case '4':
        echo "JUEVES";
        break;
    case '4':
        echo "VIERNES";
        break;
    default:
        echo "FIN DE SEMANA";
        break;
        
 }

 echo "<hr/>";

 //GOTO

 goto marca;
 echo "<h3>Instruccion 1</h3>";
 echo "<h3>Instruccion 2</h3>";
 echo "<h3>Instruccion 3</h3>";
 echo "<h3>Instruccion 4</h3>";

 marca:
 echo "<h1>Me he saltado 4 echos</h1>";