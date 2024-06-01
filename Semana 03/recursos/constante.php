<?php

// Declarar una constante llamada PI
define("PI", 3.14159);
define("RUTA_ARCHIVO_TEXT", "C:/HTTPOS");
define("IVA", "0.14");

// Utilizar la constante en cálculos
$radio = 5;
$area_circulo = PI * $radio * $radio;

// Imprimir el resultado
echo "El área del círculo es: $area_circulo";

 
?>
