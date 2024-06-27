<?php
// Declaración de variable global
$globalVar = 10;

function sumar($a, $b) {
    // Acceso a variable global desde una función
    global $globalVar;
    $resultado = $a + $b + $globalVar;
    return $resultado;
}

// Llamada a la función
echo sumar(5, 3);  // Resultado esperado: 18

// Modificación directa de variable global desde fuera de la función
$globalVar = 20;

// Llamada nuevamente a la función sin pasar $globalVar como argumento
echo sumar(5, 3);  // Resultado esperado: 28
?>
