<?php
class accesos{
    private $acceso;
    private $modulo;

    public function getAcceso()
    {
        return $this->acceso;
    }

    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;

        return $this;
    }

    public function getModulo()
    {
        return $this->modulo;
    }

    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    public function consultar_modulo(){
        switch ($this->acceso) {
            case "mant-departa":
                $this->modulo = "departamentos";
                break;
            default:
                $this->modulo = "login";
                break;
        }
    }
}
?>