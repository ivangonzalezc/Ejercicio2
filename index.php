<?php 
//echo "Hola mundo";
//Ejercicio 6

//Array

//1- Constructor

$arrayConstructor = array(1,2,3,4,5);

var_dump($arrayConstructor);

//2- [0] =

$arrayCorchete = array();
for ($i=0; $i< 5 ; $i++) 
{ 
  $arrayCorchete[$i]= rand(1,100);
}

var_dump($arrayCorchete);



?>