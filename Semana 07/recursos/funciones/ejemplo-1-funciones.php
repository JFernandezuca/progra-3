<?php

// Ejemplo sin funcion
//$num1 = 5;
//$num2 = 3;
//$suma = $num1 + $num2;
//echo "La suma sin función es: $suma"; // Esto imprimirá "La suma es: 8"



// Ejemplo con funcion
function sumar($num1, $num2) { // argumentros de entrada
     $resultado =$num1 + $num2; // cuerpo de la funcion
     return $resultado; // resultado
}

function imprimirHola(){
    echo "hola desde funcion";
}

$resultado = sumar(5, 3);
echo "La suma usando función es: $resultado<br>"; // Esto imprimirá "La suma es: 8"

$resultado = sumar(3, 1);
echo "La suma usando función es: $resultado<br>"; // Esto imprimirá "La suma es: 8"



$resultado = sumar(23, 50);
echo "La suma usando función es: $resultado<br>"; // Esto imprimirá "La suma es: 8"

imprimirHola();


?>