<!DOCTYPE html>
<html>

<head>
    <title>Mi Página</title>
</head>

<body>




    <?php

 /* 
 
 La diferencia entre echo y print:
        echo no devuelve nada mientras que print devuelve 1 (es decir, puede ser utilizada en expresiones)
        echo puede recibir múltiples parámetros, print sólo 1
        echo es ligeramente más rápida
 */
    echo "Hola, mundo de PHP", "hola progra3" , "prueba";

    print "<br>";
    print "Hola mundo de PHP";
    print "<br>";
    $cadena = array("hola", "mundo");
    print_r($cadena);
    print "<br>";
    // depurar, usado por los desarrrolladores.
    $cadena = array("hola", "mundo");

    var_dump($cadena);

    ?>
</body>

</html>