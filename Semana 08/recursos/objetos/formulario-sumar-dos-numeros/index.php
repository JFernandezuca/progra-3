<!DOCTYPE html>
<html>
<head>
    <title>Sumar dos números</title>
</head>
<body>
    <h2>Sumar dos números</h2>
    <form method="POST">
        <label for="number1">Número 1:</label>
        <input type="number" id="number1" name="number1" required><br><br>
        <label for="number2">Número 2:</label>
        <input type="number" id="number2" name="number2" required><br><br>
        <input type="submit" name="btn-sumar" value="Sumar">
    </form>

    <?php
    if(isset($_POST["btn-sumar"])){
       
        include_once("sumCalculator.php");
       $num1 = $_POST["number1"];
       $num2 = $_POST["number2"];

       $sumCalulator = new SumCalculator($num1, $num2);
        $resultado = $sumCalulator->getSum();

        echo $resultado;
    }
    ?>
</body>
</html>
