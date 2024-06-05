<!DOCTYPE html>
<html lang="en">

<head>
    <title>Validación de formulario</title>
</head>

<body>
    <?php
     if (isset($_POST["procesar"])) {
        $input1 = trim($_POST["input1"]);
        $input2 = trim($_POST["input2"]);

        if (empty($input1)) {
            echo "Debe digitar el Campo 1.";
            exit();
        }

        if (empty($input2)) {
            echo "Debe digitar el Campo 2.";
            exit();
        }

        // Si llegamos aquí, significa que ambos campos están llenos.
        echo "Formulario enviado correctamente.";
    }
  
    ?>

    <form method="POST" action="">
        <label for="input1">Campo 1:</label><br>
        <input type="text" id="input1" name="input1"><br><br>
        <label for="input2">Campo 2:</label><br>
        <input type="text" id="input2" name="input2"><br><br>
        <input type="submit" name="procesar" value="Enviar">
    </form>
</body>

</html>
