<!DOCTYPE html>
<html>
<head>
    <title>Calculate Square Area and Perimeter</title>
</head>
<body>
    <h2>Calculate Square Area and Perimeter</h2>
    <form action="" method="post">
        Ancho: <input type="text" name="ancho"><br>
        Height: <input type="text" name="largo"><br>
        <input type="submit" value="Calculate" name="btn_calcular_cuadrado">
    </form>

    <?php

        if(isset($area) && isset($perimetro) )
        {

            var_dump($area);
            echo "<h3>Results:</h3>";
            echo "Area: $area <br>";
            echo "Perimetro: $perimetro";

        }

 
    ?>
</body>
</html>
