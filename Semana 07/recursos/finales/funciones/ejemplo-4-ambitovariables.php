 <?php
// Definimos una función que utiliza una variable local
function miFuncion() {
    $mensaje = "Hola desde la función";
    echo $mensaje;
}

// Llamamos a la función
miFuncion();

// Tratamos de acceder a la variable $mensaje desde fuera de la función (esto generará un error)
echo $mensaje; // Esto generará un error: "Undefined variable: mensaje"
?>
 