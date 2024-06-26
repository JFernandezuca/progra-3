<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <form method="POST" action="#">
        <label>Digite el número identificación</label>
        <input type="number" name="txt_identificacion" placelholder="Número identificación" />
        <br/>
        <label>Digite el nombre</label>
        <input type="text" name="txt_nombre" placelholder="Nombre" />
        <br/>   
        <label>Digite los apellidos</label>
        <input type="text" name="txt_apellidos" placelholder="Apellidos" />
        <br/>     
        <label>Fecha de nacimiento</label>
        <input type="date" name="fec_nacimiento" placelholder="Fecha de nacimiento" />
        <br/> 
        <input type="submit" name="btn_agregar" value="Ejecutar" />               
    </form>
    <?php
    if(isset($_POST["btn_agregar"])){
        
        
        #
        require_once('persona.php');
        //inicializo el objeto
        $persona = new persona();



         $persona->set_num_identificacion($_POST["txt_identificacion"]);
        //var_dump($objeto->get_num_identificacion());
        if($persona->get_num_identificacion() == ''){
            echo "El número de identificación no debe ser nulo";
            exit();
        }  

        
        $persona->set_nombre($_POST["txt_nombre"]);
        if($persona->get_nombre() == ''){
            echo "El nombre no debe ser nulo";
            exit();
        } 

        $persona->set_apellidos($_POST["txt_apellidos"]);
        if($persona->get_apellidos() == ''){
            echo "Los apellidos no deben ser nulos";
            exit();
        } 

        $persona->set_fecha_nacimiento($_POST["fec_nacimiento"]);
        if($persona->get_fecha_nacimiento() == ''){
            echo "La fecha no debe ser nula";
            exit();
        }
        
        $saludo = $persona->saludo_php_POO();
        echo $saludo;

    }

?>
</body>
</html>

