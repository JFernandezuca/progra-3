<?php

// Definición de la clase Vehiculo
class Carro {
    // Propiedades de la clase
    public $marca;
    public $modelo;
    public $color;
    public $annoFabricacion;

    // Método constructor
   public function __construct($marca, $modelo, $color, $anioFabricacion) {
        $this->marca = strtoupper($marca);
        $this->modelo = $modelo;
        $this->color = $color;
        $this->annoFabricacion = $anioFabricacion;
    }

    // Método para obtener la información del vehículo
    public function getInformacion() {
        return "<b>Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Color: " . $this->color . ", Año de Fabricación: " . $this->annoFabricacion. "</b>";
    }

    // Método para cambiar el color del vehículo
    public function setColor($nuevoColor) {
        $this->color = $nuevoColor . " 23";
    }
}

