<?php

require_once("conexion.php");
class login{
    private $sql;
    private $conn;
    private $bd;
    private $stmt;
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
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "SELECT * FROM users WHERE NUM_IDENTIFICACION = :v1 AND DSC_PASSWORD = :v2";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->bindParam(':v1', $this->usuario, PDO::PARAM_INT, 12);
            $this->stmt->bindParam(':v2', $this->contrasena, PDO::PARAM_STR, 150);
            $this->stmt->execute();
            $this->resul = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->bd->cerrar_conexion();
        } catch (PDOException $e) {
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