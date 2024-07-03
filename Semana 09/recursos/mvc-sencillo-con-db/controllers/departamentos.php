<?php
require_once("models/departamentos.php");

$aviso = false;
$mensaje = "";
$departmento = new departamentos();

if(isset($_POST["btn_eliminar"])){
    //validaciones
    //seteo de valores
    $departmento->setDepartment_id($_POST["department_id"]);

    //ejecutar el metodo
    $departmento->eliminar_departamento();
    $departmento->listado_departamento();

    //actualizar la lista
}

require_once("views/departamentos.php");
?>