<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Departamentos</h1>
    <a href="index.php?modulo=mantenimientoDepartamentos">Agregar departamento</a>
    <table>
        <tr>
            <th>DEPARTMENT ID</th>
            <th>DEPARTMENT NAME</th>       
            <th>LOCATION ID</th>
            <th>MANAGER ID</th>          
            <th>Opciones</th>        
        </tr>
        <?php
        foreach($departmento->listarTodosDepartamentos() as $dep){
        ?>
        <tr>
            <td><?=$dep["DEPARTMENT_ID"]?></td>
            <td><?=$dep["DEPARTMENT_NAME"]?></td>
            <td><?=$dep["LOCATION_ID"]?></td>
            <td><?=$dep["MANAGER_ID"]?></td>   
            <td>
                <form method="POST" action ="index.php?modulo=mantenimientoDepartamentos">
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
        <?php 
            echo '<p>'. $mensaje. '</p>';
        ?>
    </table>
</body>
</html>