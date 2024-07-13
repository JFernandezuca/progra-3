<?php
require_once("conexion.php");

class departamentos{
    //atributos
    private $sql;
    private $bd;
    private $conn;
    private $stmt;
    //publicas
    public $department_id;
    public $department_name;
    public $location_id;
    public $manager_id;

    public function listarTodosDepartamentos(){
        try {
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            $this->sql = "SELECT * FROM DEPARTMENTS";
            $this->stmt = $this->conn->prepare($this->sql);
            $this->stmt->execute();
            $resultado= $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            $this->bd->cerrar_conexion();
            return  $resultado;
        } catch (PDOException $e) {
            return false;
        }
       
    }

    public function insertarDepartamento(){
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
    
    public function eliminarDepartamento(){
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

    public function consultarDepartamentoPorId(){
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

    public function actualizarDepartamento(){
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