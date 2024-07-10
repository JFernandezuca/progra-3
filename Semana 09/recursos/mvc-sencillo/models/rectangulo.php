<?php
class Rectangulo {
    private $ancho;
    private $alto;

    // Constructor para inicializar las dimensiones del rectángulo
    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    // Método para calcular el área del rectángulo
    public function calcularArea() {
        return $this->ancho * $this->alto;
    }

    // Método para calcular el perímetro del rectángulo
    public function calcularPerimetro() {
        return 2 * ($this->ancho + $this->alto);
    }
}


?>
