<?php

//include(); permite repetir.
//include_once(); si ya se ejecuto no se vuelve a ejecutar.
require("funciones.php");
include_once("calculadora.php");

//require("noexiste.php");

//require("funciones.php"); 

/*
$resultado = sumar(1,2);
echo $resultado;
*/

$resultado = calculadora::calcular(1,5);

echo $resultado;
?>