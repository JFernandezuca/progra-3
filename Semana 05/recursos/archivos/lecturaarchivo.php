<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form method="POST" action="#">

        <input type="submit" name="procesar" value="Click para leer" />
    </form>

    <?php 
    if (isset($_POST['procesar'])) {
        $archivoDirectorio = "directorio.txt";
        $contactos = fopen($archivoDirectorio, "r");

        if ($contactos) {
            while (!feof($contactos)) {
                $contacto = fgets($contactos);
                if ($contacto === false) break; // Break if fgets returns false
                $contenido = explode("/", trim($contacto));
                if (count($contenido) >= 2) {
                    echo $contenido[0] . "<br>";  // Agregar
                    echo $contenido[1] . "<br>";  // ww
                }
            }
            fclose($contactos); // Close the file
        } else {
            echo "Error al abrir el archivo.";
        }
    }
    ?>
</body>

</html>
