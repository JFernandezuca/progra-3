<?php
class login{
    private $usuario;
    private $contrasena;
    private $resul;

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    public function ingresar(){

        if($this->usuario == "juan" && $this->contrasena == "123")
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the value of resul
     */ 
    public function getResul()
    {
        return $this->resul;
    }
}
?>