<?php
 
// argumentos $num1 y $num2
function sumar($num1, $num2) {
    // Cuerpo de la funcion, aca se realiza alguna operacion. 
    $resultado = $num1 + $num2;  
    return $resultado; // Este es el valor de retorno.
}


 // se llama la funcion y se envian 2 valores como parametro
$suma_resultado = sumar(5, 3);

 
echo "El resultado de la suma es: $suma_resultado"; // Esto imprimirá "El resultado de la suma es: 8"
 