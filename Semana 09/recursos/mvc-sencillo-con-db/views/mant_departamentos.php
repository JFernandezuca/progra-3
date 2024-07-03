<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$titulo?> Departamentos</h1>
    <a href="index.php?modulo=listado-departamentos">Listado</a>
        <form method="POST" action="#">
            <label>Department ID</label>
            <input type="text" name="txt_departmentn_id" placeholder="Department ID" value="<?=(!empty($respuesta[0]["DEPARTMENT_ID"])) ? $respuesta[0]["DEPARTMENT_ID"] : ""?>" <?=$disabled?>/>
            <br />
            <label>Department Name</label>
            <input type="text" name="txt_department_name" placeholder="Department Name" value="<?=(!empty($respuesta[0]["DEPARTMENT_NAME"])) ? $respuesta[0]["DEPARTMENT_NAME"] : ""?>"/>
            <br />            
            <label>Location ID</label>
            <input type="text" name="txt_location_id" placeholder="Location ID" value="<?=(!empty($respuesta[0]["LOCATION_ID"])) ? $respuesta[0]["LOCATION_ID"] : ""?>"/>
            <br />            
            <label>Manager ID</label>                                    
            <input type="text" name="txt_manager_id" placeholder="Manager ID" value="<?=(!empty($respuesta[0]["MANAGER_ID"])) ? $respuesta[0]["MANAGER_ID"] : ""?>"/>
            <br />  
            <input type="submit" name="<?=$btn_name?>" value="<?=$btn_title?>" />          
        </form>
        <?php
        if($aviso){
            echo $mensaje;
        }
        ?>
</body>
</html>