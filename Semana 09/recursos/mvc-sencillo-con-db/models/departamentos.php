<?php
require_once("conexion.php");

class departamentos{
    //atributos
    private $sql;
    private $bd;
    private $conn;
    private $lista;
    private $stmt;
    private $department_id;
    private $department_name;
    private $location_id;
    private $manager_id;

    //metodo constructor
    public function __construct(){
        $this->listado_departamento();
    }

    //metodos encapsulamiento
    /**
     * Get the value of lista
     */ 
    public function getLista()
    {
        return $this->lista;
    }

/**
     * Get the value of department_id
     */ 
    public function getDepartment_id()
    {
        return $this->department_id;
    }

    /**
     * Set the value of department_id
     *
     * @return  self
     */ 
    public function setDepartment_id($department_id)
    {
        $this->department_id = $department_id;

        return $this;
    }

    /**
     * Get the value of department_name
     */ 
    public function getDepartment_name()
    {
        return $this->department_name;
    }

    /**
     * Set the value of department_name
     *
     * @return  self
     */ 
    public function setDepartment_name($department_name)
    {
        $this->department_name = $department_name;

        return $this;
    }

    /**
     * Get the value of location_id
     */ 
    public function getLocation_id()
    {
        return $this->location_id;
    }

    /**
     * Set the value of location_id
     *
     * @return  self
     */ 
    public function setLocation_id($location_id)
    {
        $this->location_id = $location_id;

        return $this;
    }

    /**
     * Get the value of manager_id
     */ 
    public function getManager_id()
    {
        return $this->manager_id;
    }

    /**
     * Set the value of manager_id
     *
     * @return  self
     */ 
    public function setManager_id($manager_id)
    {
        $this->manager_id = $manager_id;

        return $this;
    }    

    //metodos propios CRUD
    public function listado_departamento(){
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "SELECT * FROM DEPARTMENTS";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->execute();
            $this->lista = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->bd->cerrar_conexion();
        } catch (PDOException $e) {
            return false;
        }
       
    }

    public function insertar_departamento(){
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "INSERT INTO DEPARTMENTS (DEPARTMENT_ID, DEPARTMENT_NAME, MANAGER_ID, LOCATION_ID) VALUES (:department_id, :department_name, :manager_id, :location_id)";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->bindParam(":department_id", $this->department_id, PDO::PARAM_INT, 4);
            $this->stmt->bindParam(":department_name", $this->department_name, PDO::PARAM_STR, 30);
            $this->stmt->bindParam(":manager_id", $this->manager_id, PDO::PARAM_INT, 6);
            $this->stmt->bindParam(":location_id", $this->location_id, PDO::PARAM_INT, 4);
            $this->stmt->execute();
            $this->bd->cerrar_conexion();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    
    public function eliminar_departamento(){
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "DELETE FROM  DEPARTMENTS WHERE DEPARTMENT_ID = :department_id";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->bindParam(":department_id", $this->department_id, PDO::PARAM_INT, 4);
            $this->stmt->execute();
            $this->bd->cerrar_conexion();
            return true;
        } catch (PDOException $e) {
            return false;
        }  
    }

    public function consultar_departamento(){
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "SELECT * FROM DEPARTMENTS WHERE DEPARTMENT_ID = :department_id";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->bindParam(":department_id", $this->department_id, PDO::PARAM_INT, 4);
            $this->stmt->execute();
            $this->lista = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->bd->cerrar_conexion();
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizar_departamento(){
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "UPDATE DEPARTMENTS SET DEPARTMENT_NAME = :department_name, MANAGER_ID = :manager_id, LOCATION_ID = :location_id WHERE DEPARTMENT_ID = :department_id";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->bindParam(":department_id", $this->department_id, PDO::PARAM_INT, 4);
            $this->stmt->bindParam(":department_name", $this->department_name, PDO::PARAM_STR, 30);
            $this->stmt->bindParam(":manager_id", $this->manager_id, PDO::PARAM_INT, 6);
            $this->stmt->bindParam(":location_id", $this->location_id, PDO::PARAM_INT, 4);
            $this->stmt->execute();
            $this->bd->cerrar_conexion();
            return true;
        } catch (PDOException $e) {
            return false;
        }    
    }
}
?>