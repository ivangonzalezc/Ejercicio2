<?php 
//echo "Hola mundo";


//Array

//1- Constructor

$arrayConstructor = array(1,2,3,4,5);

//var_dump($arrayConstructor);
echo "<br>";

//2- [0] =

$arrayCorchete = array();
for ($i=0; $i< 5 ; $i++) 
{ 
  $arrayCorchete[$i]= rand(1,100);
}

var_dump($arrayCorchete);
echo "<br>";

//3- push()

$arrayPush = array();

array_push($arrayPush,rand(1,9),rand(1,9),rand(1,9),rand(1,9),rand(1,9));

//var_dump($arrayPush);
echo "<br>";


//Ejercicio 6

$arrayCorchete = array();
$suma = 0;
$promedio = 0;
$cantidadNumeros = 5;

for ($i=0; $i<$cantidadNumeros ; $i++) 
{ 
  $arrayCorchete[$i]= rand(1,1 0);
  $suma = $suma + $arrayCorchete[$i];
}

$promedio = $suma/$cantidadNumeros;

if($promedio > 6)
{
  echo "El promedio es mayor a 6";
}
else if ($promedio == 6)
{
    echo "El promedio es igual a 6";
}
else
{
    echo "El promedio es menor a 6";
}

?>