<?php

#LLama al modelo.
require_once("models/departamentos.php");
$mensaje = "";


$departmento = new departamentos();

if(isset($_POST["btn_eliminar"])){
    //validaciones
    //seteo de valores
    $departmento->department_id = $_POST["department_id"];
    //ejecutar el metodo
    $departmento->eliminarDepartamento();
    $mensaje = "El departamento fue eliminado correctamente.";
}


// Carga la lista de departamentos
$departamentos = $departmento->listarTodosDepartamentos();
require_once("views/listado-departamentos.php");
?>