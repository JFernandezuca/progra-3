<?php


// Arreglo indexado
$frutas = array('manzana', 'naranja', 'uva');

// Recorrido del arreglo usando foreach
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}


// Recorrer arreglos dentro de arreglos.
$directorios = array(
    array('id' => 123, 'nombre' => 'Juan'),
    array('id' => 456, 'nombre' => 'Pedro'), 
    array('id' => 123, 'nombre' => 'Manuel'),
    array('id' => 456, 'nombre' => 'Maria')
);


foreach ($directorios as $directorio)
{
    echo '<div>';
    echo 'Identidicardor: '.  $directorio["id"]. "  Nombre: " .   $directorio["nombre"];
    echo '</div>';
    echo  "<br>";
}


?>
