<?php


class Carro{

    public $marca;
    public $color;

    public $modelo;

    public $annoFabricacion;


    public function __construct(){
    
      /*  $this->marca = $marca; 
        $this->color = $color;
        $this->modelo = $modelo;
        $this->annoFabricacion = $annoFabricacion;*/

    }

    public function getInformacion(){
        return "<b>Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Color: " . $this->color . ", Año de Fabricación: " . $this->annoFabricacion. "</b>";

    }

    public function setColor($nuevoColor)
    {
        $this->color = $nuevoColor;
    }
    
}


$carroSuzuki = new Carro();
$carroSuzuki->marca = "suzuki";
$carroSuzuki->color = "negro";
//$carroSuzuki->modelo = "alto";
$carroSuzuki->annoFabricacion = "2012";

echo $carroSuzuki->getInformacion();

echo "<br>";
/*
$carroJeep= new Carro('Jeep', 'rojo', 'wrangler', "2023");
echo $carroJeep->getInformacion();
echo "<br>";
$carroJeep->setColor("verde");
echo $carroJeep->getInformacion();*/