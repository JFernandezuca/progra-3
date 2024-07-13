<?php
require_once("models/login.php");

// La variable mensaje se usa en caso que se debea de enviar algo a la vista.
$mensaje ="";
if(isset($_POST["btn_ingresar"])){
    //consulta por el usuario en la base de datos
    //validaciones del lado del backend
    
    $login = new usuario();
    $login->usuario = $_POST["txt_usuario"];
    $login->contrasena = $_POST["txt_password"];
    
    if( $login->usuario == ""  ||  $login->contrasena == "")
    {
        $mensaje = "Usuario y/o contraseña vacias.";
    }
    else
    {
        if(!empty($login->login() > 0)){
            $_SESSION["NOMBRE_USUARIO"] = $_POST["txt_usuario"];
            header('Location: index.php?modulo=listado-departamentos');
        }else{
            $mensaje = "Usuario y/o contraseña incorrecto";
        }
    }



}

require_once("views/login.php");
?>