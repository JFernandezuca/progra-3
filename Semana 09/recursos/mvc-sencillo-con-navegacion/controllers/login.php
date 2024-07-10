<?php
require_once("models/login.php");

$error = false;
if(isset($_POST["btn_ingresar"])){
    //consulta por el usuario en la base de datos
    //validaciones del lado del backend
    
    $msj = "";
    $login = new login();
    $login->setUsuario($_POST["txt_usuario"]);
    $login->setContrasena($_POST["txt_password"]);
    //echo $_POST["txt_usuario"];
    //echo $login->getUsuario();


    if(empty($login->getUsuario())){
        $error =true;
        $msj = "El usuario no puede ser vacio";
    }
    else
    {
        if( $login->ingresar()){
            $_SESSION["NOMBRE_USUARIO"] = $_POST["txt_usuario"];
            header('Location: index.php?modulo=mant_departamentos');
        }else{
            $error = true;
            $msj = "Usuario y/o contraseña incorrecto2";
        }
    }

}

p
?>