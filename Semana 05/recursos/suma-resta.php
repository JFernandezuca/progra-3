<!DOCTYPE html>
<html lang="es">
<body>

<div class="container">
    <h2>Calculadora Básica</h2>
    <form method="post">
        <input type="number" name="numero1" placeholder="Número 1" required>
        <input type="number" name="numero2" placeholder="Número 2" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = ($numero2 != 0) ? $numero1 / $numero2 : "No se puede dividir por cero";

        echo "<div class='result'>";
        echo "<p><strong>Suma:</strong> $suma</p>";
        echo "<p><strong>Resta:</strong> $resta</p>";
        echo "<p><strong>Multiplicación:</strong> $multiplicacion</p>";
        echo "<p><strong>División:</strong> $division</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
