 <?php
// Definimos una función que utiliza una variable local
function miFuncion() {
    $mensaje = "Hola desde la función";
    $mensaje2 = "hola";
    return $mensaje;
}

// Llamamos a la función
echo miFuncion();

// Tratamos de acceder a la variable $mensaje desde fuera de la función (esto generará un error)
echo $mensaje1; // Esto generará un error: "Undefined variable: mensaje"
?>
 