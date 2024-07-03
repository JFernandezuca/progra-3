<?php
class accesos{
    private $acceso;
    private $modulo;

    /**
     * Get the value of acceso
     */ 
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Set the value of acceso
     *
     * @return  self
     */ 
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get the value of modulo
     */ 
    public function getModulo()
    {
        return $this->modulo;
    }

    /**
     * Set the value of modulo
     *
     * @return  self
     */ 
    public function setModulo($modulo)
    {
        $this->modulo = $modulo;

        return $this;
    }

    public function consultar_modulo(){

        var_dump($this->acceso);
        switch ($this->acceso) {
            case "listado-departamentos":
                $this->modulo = "departamentos";
                break;

            case "mant_departamentos":
                $this->modulo = "mant_departamentos";
                break;
            default:
                $this->modulo = "login";
                break;
        }
    }
}
?>