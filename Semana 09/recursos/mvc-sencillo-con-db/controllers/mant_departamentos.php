<?php
require_once("models/departamentos.php");

$titulo = "Insertar";
$btn_name = "btn_ingresar";
$btn_title = "Insertar";
$aviso = false;
$mensaje = "";
$disabled = "";

if(isset($_POST["btn_ingresar"]) || isset($_POST["btn_actualizar"])){
    //Validar los datos de lado del backend -> 
    //inicializar la clase
    $departamento = new departamentos();

    //setear los valores
    $departamento->setDepartment_id($_POST["txt_departmentn_id"]);
    $departamento->setDepartment_name($_POST["txt_department_name"]);
    $departamento->setLocation_id($_POST["txt_location_id"]);
    $departamento->setManager_id($_POST["txt_manager_id"]);
    
    //ejecutar el metodo de insercción
    if(isset($_POST["btn_ingresar"])){
        if($departamento->insertar_departamento()){
            $aviso = true;
            $mensaje = "La informacion fue almacenada satisfactoriamente";
        }else{
            $avison = true;
            $mensaje = "Hubo un error durante la inserccion";
        }
    }else{
        if($departamento->actualizar_departamento()){
            $aviso = true;
            $mensaje = "La informacion fue actualizada satisfactoriamente";
        }else{
            $avison = true;
            $mensaje = "Hubo un error durante la actualizacion";
        }        
    }

}

if(isset($_POST["btn_editar"])){
    $departamento = new departamentos();
    //validaciones
    //seteo de valores 
    $departamento->setDepartment_id($_POST["department_id"]);
    //ejecutar el metodo
    $departamento->consultar_departamento();
    $respuesta = $departamento->getLista();
    $titulo = "Actualizar";
    $btn_name = "btn_actualizar";
    $btn_title = "Actualizar";
    $disabled = "readonly";
}

require_once("views/mant_departamentos.php");
?>