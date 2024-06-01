<?php
// Ejemplo con ==
$a = 5; // entero
$b = "5"; // cadena de texto

// 2 iguales
if ($a == $b) {
    echo "Usando == : Los valores son iguales.<br>";
} else {
    echo "Usando == : Los valores no son iguales.<br>";
}

// Ejemplo con === (3 iguales)
if ($a === $b) {
    echo "Usando === : Los valores y tipos son iguales.<br>";
} else {
    echo "Usando === : Los valores o tipos no son iguales.<br>";
}
?>
