<?php
//todo viaja por el index, mas adelante se va convertir en un enrutador de la URL
//se incluye el archivo prueba ubicado en el directorio de controladores
//require_once("controllers/prueba.php");
session_start();
if(!isset($_SESSION["NOMBRE_USUARIO"])){
    require_once("controllers/login.php");
}else{
    if(isset($_GET["modulo"])){
        $modulo = $_GET["modulo"];

     switch ($modulo) {

        case "listado-departamentos":
            require_once("controllers/departamentos.php");
            break;
        case "mantenimientoDepartamentos":
            require_once("controllers/mantenimientoDepartamentos.php");
            break;
        default:
        require_once("controllers/login.php");
            break;
       }
   }
}

 

?>