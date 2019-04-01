<?php

/*
FUNCIONES PREDEFINIDAS:

var_dump()

*/

echo "<h1>Funciones predefinidas</h1>";

echo "<p><em>1.- var_dump(): Es una funcion predefinida, para Debuggear si le pasamos una variable
me va a sacar el resultado en que linea esta y todos los datos.</em></p>";

$nombre = "Maria Moreno";
var_dump($nombre);

echo "<p><em>2.- date():  Es una funcion predefinida, para las fechas. Para mas informacion bucar en: <a href='http://php.net/manual/es/function.date.php' target='_blank'>El manual de PHP/date</a></em></p><br/>";

echo date('d-m-y');

echo "<br/>";

echo "<p><em>3.- time():  Es una funcion predefinida, nos permite sacar el time stam la fecha en formato iunix que es una cifra
numerica que no se va a repetir jamas</em></p><br/>";

echo time();

echo "<br/>";

echo "<h1>Funciones Matematicas</h1>";

echo "<p><em>Nos permite sacar la raiz cuadrada, redondear algo, numero pi... Para mas informacion bucar en: <a href='https://www.php.net/manual/es/book.math.php' target='_blank'>El manual de PHP/Funciones matematicas</a></em></p><br/>";

echo "Raiz cuadrada de 10: " .sqrt(10);

echo "<br/>";

echo "Numero aleatorio entre 10 y 40: ".rand(10,40);
echo "<br/>";

echo "Numero PI:".pi();
echo "<br/>";

echo "Redondear: ".round(7.895126, 2);//dos decimales
echo "<br/>";

//MAS FUNCIONES GENERALES

echo "<h1>Mas Funciones generales</h1>";

echo "<p><em>1.- gettype():  Consigue el tipo de una variable</em></p><br/>";

echo "<em>gettype(La variable nombre con el simbolo $ antes): </em>";
echo gettype($nombre);

echo "<br/>";

echo "<p><em>2.- Funciones para comprobar de una variable es de un tipo u otro</em></p><br/>";

if (is_string($nombre)) {
    echo "La variable nombre es un string";
}

echo "<br/>";

if (is_float($nombre)) {
    echo "La variable nombre no es un numero  con decimales";
}


echo "<p><em>3.- Funciones isset: con esta funcion podemos averiguar si una variable existe dentro de nuestro programa y si existe devuelve true y si no extiste devuelve false</em></p><br/>";

if (isset($edad)){
    echo "La variable existe<br/>";
}else{
    echo "La variable no existe<br/>";
}

if (isset($nombre)){
    echo "La variable existe<br/>";
}else{
    echo "La variable no existe<br/>";
}

echo "<p><em>4.- Funciones trim(): nos permite que si tenemos una variable y le metamos muchos espacios
por delante del contenido y muchos espacios por detras entre las comillas utilizando la funcion trim() se puede limpiar el contenido de esa variable:</em></p><br/>";

$frase = "           mi contenido       ";
trim($frase);


echo "<p><em>3.- Funcion unset(): con esta funcion se puede eliminar variables o indices de array_search</em></p><br/>";

echo "<p>Ejemplo la variable year = 2020, con unset(variable year); se elimina esa variable.</p>";

$year = 2020;
unset($year);


echo "<p><em>3.- Funcion empty(): con esta funcion se puede sirve para comprobar si una variable esta vacia, no existe o su valor es cero</em></p><br/>";

$texto = "";

if(empty($texto)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable de texto TIENE CONTENIDO";
}

echo "<p><em>4.- Funcion strlen(): Nos calcula cuantos caracteres tiene una cadena de texto</em></p><br/>";

$cadena = "12345"; 

echo strlen($cadena);

echo "<p><em>5.- Funcion strpos: encuentra en un string la posicion de un caracter determinado o una palabra o lo que sea </em></p><br/>";

$frase = "La vida es bella";

echo "En la frase ".$frase.", la posicion de la palabra vida esta en en el Nº: ";

echo strpos($frase, "vida");

echo "<p><em>6.- Funcion str_replace(): con esta funcion tambien se puede reemplazar palabras u/o contenido de un string </em></p><br/>";

$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<p><em>3.- Funcion strtolower() y strtoupper(): Son funciones para convertir a MAYUSCULA O minusculas</em></p><br/>";

echo strtolower($frase);//minusculas
echo "<br/>";
echo strtoupper($frase);//MAYUSCULAS