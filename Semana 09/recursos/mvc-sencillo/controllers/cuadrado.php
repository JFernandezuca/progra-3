<?php
require_once("models/cuadrado.php");



if(isset($_POST["btn_calcular_cuadrado"])){

    
    $largo = $_POST["largo"];
    $ancho = $_POST["ancho"];

    $cuadrado = new cuadrado();

    //validaciones
    //seteo de valores


    $cuadrado->setAncho($ancho);
    $cuadrado->setLargo($largo);

    $area = $cuadrado->getArea() ;
    $perimetro = $cuadrado->getPerimetro();

   


}

require_once("views/cuadrado.php");
?>