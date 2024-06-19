<?php 
// Destructor de la clase Archivo
    public function __destruct() {
        if ($this->archivo) {
            fclose($this->archivo);
            echo "El archivo ha sido cerrado correctamente.";
        }
    }