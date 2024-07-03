<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        <label>Usuario</label>
        <input type="text" name="txt_usuario">
        <br />
        <label>Contraseña</label>
        <input type="password" name="txt_password">
        <br />
        <input type="submit" name="btn_ingresar" value="Ingresar">
    </form>

    <p><b>Nota:</b> Ejemplo sin base de datos, usuario: Juan y password: 123</p>
    <?php
    if($error){
        echo $msj;
    }
    ?>
</body>
</html>