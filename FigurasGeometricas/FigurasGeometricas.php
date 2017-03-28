<?php


abstract class FigurasGeometricas
{
    protected $_color;
    protected $_perimetro;
    protected $_superficie;

    function __construct($color, $perimetro, $superficie)
    {
       $this->_color = $color;
       $this->_perimetro = $perimetro;
       $this->_superficie = $superficie;
    }

    protected function CalcularDatos()
    {
    }

    public function Dibujar()
    {
    }

    public function GetColor()
    {
       return $this->color;
    }

    public function SetColor($color)
    {
       $this->color = $color;
    }

    public function ToString()
    {
       
    }


}


?>