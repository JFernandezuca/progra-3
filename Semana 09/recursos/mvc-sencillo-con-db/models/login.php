<?php

require_once("conexion.php");
class usuario{
    private $sql;
    private $conn;
    private $bd;
    private $stmt;

    // Propiedades publicas
    public $usuario;
    public $contrasena;

    public function login(){
        try {
            // Crear conexión a la base de datos
            $this->bd = new conexion();
            $this->conn = $this->bd->crear_conexion();
            
            // Preparar la consulta SQL
            $this->sql = "SELECT COUNT(*) FROM usuarios WHERE usuario = :v1 AND clave = :v2";
            $this->stmt = $this->conn->prepare($this->sql);
            
            // Asignar parámetros
            $this->stmt->bindParam(':v1', $this->usuario, PDO::PARAM_INT, 12);
            $this->stmt->bindParam(':v2', $this->contrasena, PDO::PARAM_STR, 150);
            
            // Ejecutar la consulta
            $this->stmt->execute();
            
            // Obtener el resultado
            $count = $this->stmt->fetchColumn();
            
            // Cerrar la conexión
            $this->bd->cerrar_conexion();
            
            // Retornar true si se encuentra al menos un usuario, de lo contrario false
            return $count > 0;
        } catch (PDOException $e) {
            // Manejar la excepción, opcionalmente registrar el error
            $this->bd->cerrar_conexion();
            return false;
        }
    }
}
?>