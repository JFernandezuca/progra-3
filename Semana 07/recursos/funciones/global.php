<?php
// Definimos una variable global
$mensaje_global = "id-usuario123";

// Definimos una función que intenta acceder a la variable global

function obtenerIdUsuario()
{
    return "id-usuario123";
}

function miFuncion() {
    obtenerIdUsuario();
   
    global $mensaje_global; // Hacemos referencia a la variable global dentro de la función
    echo $mensaje_global;
}


function miFuncion2() {
    obtenerIdUsuario(); // Hacemos referencia a la variable global dentro de la función
    echo $mensaje_global;
}

// Llamamos a la función
miFuncion();

// Accedemos directamente a la variable global desde fuera de la función
echo $mensaje_global;
?>
