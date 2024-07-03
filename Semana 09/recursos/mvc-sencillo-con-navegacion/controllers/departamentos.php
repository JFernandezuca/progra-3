<?php
require_once("models/departamentos.php");

$aviso = false;
$mensaje = "";
$departmento = new departamentos();
 
$departamentos =  $departmento->getDepartamentos();
require_once("views/departamentos.php");
?>