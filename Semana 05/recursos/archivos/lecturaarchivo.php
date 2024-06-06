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
        $contactos = fopen($archivoDirectorio, "r"); // read - leer

        if ($contactos) {
            while (!feof($contactos)) {  // feof pregunta si NO ES la ultima linea del archivo.
                $contacto = fgets($contactos);
                
                if ($contacto === false) break; // Break if fgets returns false
               // trim remueve espacios en blanco en el string.
                    

                $contenido = explode(",", trim($contacto)); 
                // 1,TEC los divide / y los mete en un arreglo
                // 1
                // TEC

                if (count($contenido) >= 2) {
                    echo "id: ".  $contenido[0] . "<br>";  // Agregar
                    echo  "universidad: ". $contenido[1] . "<br>";  // ww
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
