<?php
//todo viaja por el index, mas adelante se va convertir en un enrutador de la URL
//se incluye el archivo prueba ubicado en el directorio de controladores
//require_once("controllers/prueba.php");
session_start();
if(!isset($_SESSION["NOMBRE_USUARIO"])){
    require_once("controllers/login.php");
}else{

  /*  require_once("models/accesos.php");
    $acceso = new accesos();

    if (isset($_GET["modulo"])) {
        
        $acceso->setAcceso($_GET["modulo"]);
           
    } else {
        $acceso->setAcceso("");
    }

    $acceso->consultar_modulo();
    require_once("controllers/".$acceso->getModulo().".php");*/


    if(isset($_GET["modulo"])){
       
        $modulo = $_GET["modulo"];

     switch ($modulo) {
           case "mant-departa":
            //   $this->modulo = "departamentos";
               break;
           default:
           /// $this->modulo = "login";
               break;
       }
   }
   



}

 

?>