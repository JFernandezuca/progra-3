<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="" name="form_login">
        <label>Usuario</label>
        <input type="text" name="txt_usuario" placeholder="Usuario"  />
        <br />
        <label>Contrase&ntilde;a</label>
        <input type="password" name="txt_password" placeholder="Contrase&ntilde;a" />
        <br />
        <input type="submit" name="ingresar" value="Ingresar" />
    </form>
    <?php
    if(isset($_POST["ingresar"])){
        //asignar datos
        $usuario = $_POST["txt_usuario"];
        $password = $_POST["txt_password"];
        //validar
        if($usuario == ''){
            echo 'Debe digitar el usuario';
            exit;
        }

        if($password == ''){
            echo 'Debe digitar el password';
            exit;
        }




        //consultar a base de datos / consulta el archivo
        $usuario_quemado = 'usuario';
        $password_quemado = '123';



        if($usuario == $usuario_quemado && $password == $password_quemado){
            session_start();
            $_SESSION["USUARIO"] = $usuario;
            $_SESSION["PASSWORD"] = $password;
            //$_SESSION["PERFIL"] = 1; //Administrador
            $_SESSION["PERFIL"] = 2; //Usuario
            echo "usuario valido... redireccionando";
            echo "<script>setTimeout(\"location.href='panel.php'\")</script>";
        }else{
            echo 'Usuario y/o contraseña incorrecto';
        }
        //rediccionar al usuario
    }
    ?>
</body>
</html>