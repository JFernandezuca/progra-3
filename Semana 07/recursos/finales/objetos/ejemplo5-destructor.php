<?php
class Carro {
    private $marca;
    private $modelo;

    // Constructor de la clase Carro
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Destructor de la clase Carro
    public function __destruct() {
        echo "El carro {$this->marca} {$this->modelo} ha sido destruido.<br>";
    }

    // Método para obtener la información del carro
    public function getInfo() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}

// Crear una nueva instancia de la clase Carro
$miCarro = new Carro("Toyota", "Corolla");

// Obtener información del carro
echo $miCarro->getInfo();

// La instancia de la clase se destruirá automáticamente al finalizar el script
?>
