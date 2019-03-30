<?php
//BUCLE WHILE
//Es una estructura de control que itera o repite la ejecucion de una 
//serie de instrucciones tantas veces como sea necesario en base a una condicion que 
//el bucle lleva

$num = 0;

while ($num <= 100) {
    echo $num;
    if($num != 100){
        echo ", ";
    }
    $num++; 
}

echo "<hr/>";

//EJEMPLO

//hacer una tabla de multiplicar con un parametro que vamos a recibir por GET

if (isset ($_GET['numero'])) {
    $numero = (int) $_GET['numero'];//cuando recibimos un valor por la url es un string no un entero y lo que hacemos es castear, cambiando el tipo de dato
} else {
    $numero = 1;
}
 
echo "<h1>tabla de multiplicar de $numero</h1>";

$contador = 0;

while ($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br>";
    $contador;

}
