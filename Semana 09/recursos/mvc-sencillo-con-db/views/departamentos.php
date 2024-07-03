<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Departamentos</h1>
    <a href="index.php?modulo=mant_departamentos">Agregar departamento</a>
    <table border="1">
        <tr>
            <th>DEPARTMENT ID</th>Q
            <th>DEPARTMENT NAME</th>       
            <th>LOCATION ID</th>Q
            <th>MANAGER ID</th>          
            <th>Opciones</th>        
        </tr>
        <?php
        foreach($departmento->getLista() as $dep){
        ?>
        <tr>
            <td><?=$dep["DEPARTMENT_ID"]?></td>
            <td><?=$dep["DEPARTMENT_NAME"]?></td>
            <td><?=$dep["LOCATION_ID"]?></td>
            <td><?=$dep["MANAGER_ID"]?></td>   
            <td>
                <form method="POST" action ="index.php?modulo=mant_departamentos">
                    <input type="hidden" name="department_id" value="<?=$dep["DEPARTMENT_ID"]?>" />
                    <input type="submit" name="btn_editar" value="Editar" />
                </form>
                <form method="POST" action="">
                    <input type="hidden" name="department_id" value="<?=$dep["DEPARTMENT_ID"]?>" />
                    <input type="submit" name="btn_eliminar" value="Eliminar" />
                </form>
                
            </td>                                 
        </tr>
        <?php    
        }
        ?>
    </table>
    <?php
    if($aviso){
        echo $mensaje;
    }
    ?>
</body>
</html>