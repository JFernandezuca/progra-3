<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST" action="#">

        <label>Codigo</label>
       <input type="text" name="codigo" />
        <br>

        <label>Nombre universidad</label>
       <input type="text" name="nombre-universidad" />
       <br>

        <input type="submit" name="procesar" value="Agregar" />
    </form>

    <?php 

    if (isset($_POST['procesar'])) {
            // PHP_EOL SIGNIFICA EL FIN DE ESA LINEA
            $contenido = $_POST['codigo']. "/". $_POST['nombre-universidad'];


            $archivoDirectorio = "directorio.txt";
            $file = fopen($archivoDirectorio, "a"); // la a significa append o sea adjuntar.
            $registro = $contenido.PHP_EOL;
            fwrite($file, $registro);
            fclose($file);
    }
    ?>
    </table>
</body>

</html>