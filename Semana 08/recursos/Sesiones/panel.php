<?php
session_start();
echo "Hola, " . $_SESSION["USUARIO"] . "! <br>";
//var_dump($_SESSION);
if($_SESSION["PERFIL"] == 1){
    echo "Mostrar menú de administrador perfil 1";
}elseif($_SESSION["PERFIL"] == 2){
    echo "Mostra menu de usuario perfil 2";
}
?>