<?php
// Definimos una variable global
$mensaje_global = "Hola desde la variable global";

// Definimos una función que intenta acceder a la variable global
function miFuncion() {
    global $mensaje_global; // Hacemos referencia a la variable global dentro de la función
    echo $mensaje_global;
}

// Llamamos a la función
miFuncion();

// Accedemos directamente a la variable global desde fuera de la función
echo $mensaje_global;
?>
