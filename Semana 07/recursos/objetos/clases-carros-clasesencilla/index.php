<?php

#Descomentar var dump
# Crear constructor para mostrar su uso
#require_once("./clases/carro.php");
require_once("./clases/carro.php");



$carroSuzuki  = new Carro("SuZuKI", "alto", "azul", "2011");
$carroSuzuki->annoFabricacion = "2021";


echo $carroSuzuki->getInformacion();
var_dump($carroSuzuki);



$carroJeep  = new Carro();






