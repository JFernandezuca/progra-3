<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="" name="form_cookies">
        <label>Digite su nombre</label>
        <input type="text" name="txt_nombre" />
        <br />
        <input type="submit" name="procesar" value="Procesar" />
    </form>
    <?php
    if(isset($_POST["procesar"])){
        if(!isset($_COOKIE["COOKIE_NOMBRE"])){
            setcookie('COOKIE_NOMBRE', $_POST["txt_nombre"], time() + 12000); // Se cambió mktime() por time()
        } else {
            // Mostrar el valor de la cookie
            echo "Bienvenido de nuevo, " . $_COOKIE["COOKIE_NOMBRE"];
        }   
    }
    ?>
</body>
</html>
