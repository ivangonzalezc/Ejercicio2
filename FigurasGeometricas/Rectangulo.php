<?php
class Rectangulo extends FigurasGeometricas
{

    private $_ladoUno;
    private $_ladoDos;
    
    function __construct($lado1,$lado2)
    {
       $this->_ladoUno = $lado1;
       $this->_ladoDos = $lado2;
    }

    protected function CalcularDatos()
    {
      $perimetro= $this->_ladoUno*2+$this->_ladoDos*2;
      $superficie = $this->_ladoUno*$this->_ladoDos;

      echo $perimetro.$superficie;
    }

    public function Dibujar()
    {
       echo parent::GetColor();
       echo "<br>";
       echo "*******<br>";
       echo "*******<br>";
       echo "*******";
    }
}


?>