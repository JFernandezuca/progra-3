<?php
// Ejemplo con funcion
function sumar($num1, $num2) {
    return $num1 + $num2;
}

$resultado = sumar(5, 3);
echo "La suma usando función es: $resultado<br>"; // Esto imprimirá "La suma es: 8"



// Ejemplo sin funcion
$num1 = 5;
$num2 = 3;
$suma = $num1 + $num2;
echo "La suma sin función es: $suma"; // Esto imprimirá "La suma es: 8"
?>