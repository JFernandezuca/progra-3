<?php
// Definición de la clase base Figura
class Figura {
    protected $base;
    protected $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

// Definición de la clase #2  derivada Rectangulo
// Uso de extends 
class Rectangulo extends Figura {
    public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
    }
}

// Creación de un objeto de la clase Rectangulo
$rectangulo = new Rectangulo(5, 3);

// Metodo heredado de figura
echo "Área del rectángulo: " . $rectangulo->calcularArea() . "<br>";

// Este metodo esta propiamente en la case rectangulo
echo "Perímetro del rectángulo: " . $rectangulo->calcularPerimetro();
?>
