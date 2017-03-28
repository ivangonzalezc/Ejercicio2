<?php
include_once("FigurasGeometricas.php");
include_once("Rectangulo.php");
//include_once();

$rectangulo = new Rectangulo(2,3);

$rectangulo->SetColor("Azul");
echo $rectangulo->Dibujar();

$rectangulo->CalcularDatos();

?>