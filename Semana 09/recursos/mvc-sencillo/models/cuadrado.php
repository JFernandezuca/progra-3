<?php
class cuadrado {
    private $ancho;
    private $largo;



    public function setAncho($ancho) {
        return $this->ancho = $ancho;
    }

    public function setLargo($largo) {
        return $this->largo = $largo;
    }


    public function getArea() {
        return $this->ancho * $this->largo ;
    }

    public function getPerimetro() {
        return 2 * ($this->ancho + $this->largo);
    }
}
?>
