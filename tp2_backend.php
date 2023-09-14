<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP N°2</title>
</head>
<body>
 <h1>MI TP N° 2</h1>

<?php

//TAREA 1

echo "<h2>Tarea 1</h2>\n";

$variableA=17;

if ($variableA>0) {
   echo "La variable es un número positivo" . "<br>";

}

//TAREA 2

echo "<h2>Tarea 2</h2>\n";

$variableB=7;

if ($variableB>1 & $variableB<10) {
   echo "La variable es mayor a 1 y menor a 10" . "<br>"; 
}


//TAREA 3

echo "<h2>Tarea 3</h2>\n";

$variableC=1989;

if ($variableC>10 || $variableC<2) {
   echo "La variable es mayor a 10 o menor a 2" . "<br>";
 }

//TAREA 4

echo "<h2>Tarea 4</h2>\n";

$numero1=13;
$numero2=77;

if ($numero1>$numero2) {
   echo "La suma de ambas variables es ";
   echo $numero1+$numero2 . "<br>";
   echo "La resta de ambas variables es ";
   echo $numero1-$numero2 . "<br>";

} elseif ($numero2>$numero1) {
   echo "La multiplicación de ambos números es ";
   echo $numero2*$numero1. "<br>";
   echo "La división entera de ambos números es ";
   echo $numero2/$numero1. "<br>";
   echo "El resto de la división de ambos números es ";
   echo $numero2%$numero1. "<br>";

} else {
   echo "Los números ingresados son iguales"; 

}


?>
</body>
</html>