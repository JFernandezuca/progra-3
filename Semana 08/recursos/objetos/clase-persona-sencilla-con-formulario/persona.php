<?php
class persona{

    //Atributos;
    private $num_identificacion;
    private $nombre;
    private $apellidos;
    private $fecha_nacimiento;
    private $prueba;

    //Metodos
    public function set_num_identificacion($num_identificacion){
        $this->num_identificacion = $num_identificacion;
    }

    public function get_num_identificacion(){
        return $this->num_identificacion;
    }

    public function set_nombre($nombre){
        $this->nombre = $nombre;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function set_apellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function get_apellidos(){
        return $this->apellidos;
    }


    public function set_fecha_nacimiento($fec_nacimiento){
        $this->fecha_nacimiento = $fec_nacimiento;
    }

    public function get_fecha_nacimiento(){
        return $this->fecha_nacimiento;
    }

    public function saludo_php_POO(){
        return 'Hola '.$this->nombre.' soy PHP desde POO';
    }
}
?>