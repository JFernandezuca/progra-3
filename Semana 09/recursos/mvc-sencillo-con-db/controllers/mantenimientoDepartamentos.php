<?php
require_once("models/departamentos.php");

$titulo = "Insertar";
$btn_name = "btn_ingresar";
$btn_title = "Insertar";
$mensaje = "";

if(isset($_POST["btn_ingresar"]) || isset($_POST["btn_actualizar"])){
    //Validar los datos de lado del backend -> 
    //inicializar la clase
    $departamento = new departamentos();

    //setear los valores
    $departamento->department_id = $_POST["txt_departmentn_id"];
    $departamento->department_name = $_POST["txt_department_name"];
    $departamento->location_id = $_POST["txt_location_id"];
    $departamento->manager_id = $_POST["txt_manager_id"];
    
    //ejecutar el metodo de insercción
    if(isset($_POST["btn_ingresar"])){
        if($departamento->insertarDepartamento()){
            $mensaje = "La informacion fue almacenada satisfactoriamente";
        }else{
            $mensaje = "Hubo un error durante la inserccion";
        }
    }elseif (isset($_POST["btn_actualizar"])) {
        if($departamento->actualizarDepartamento()){
            $mensaje = "La informacion fue actualizada satisfactoriamente";
        }else{
            $mensaje = "Hubo un error durante la actualizacion";
        }        
    }


}
// buton de editar que esta en la columna opciones de la tabla que lista que los departamentos.
if(isset($_POST["btn_editar"])){
    $departamento = new departamentos();
    //validaciones
    //seteo de valores 
    $departamento->department_id = $_POST["department_id"];
    //ejecutar el metodo
    $departamento->consultarDepartamentoPorId();
    $respuesta = $departamento->listarTodosDepartamentos();
    require_once("views/actualizar-departamento.php");
    return;
}
require_once("views/ingresar-departamentos.php");


?>