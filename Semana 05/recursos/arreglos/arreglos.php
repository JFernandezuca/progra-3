<?php
// Arreglo indexado
///               0            1         2      4
$frutas = array('manzana', 'naranja', 'uva' , 'pera');

// Acceso a elementos por índice
echo $frutas[0] . "<br>";  // manzana
echo $frutas[1] . "<br>";  // naranja
echo $frutas[2] . "<br>";  // uva
echo $frutas[5] . "<br>";  // error

echo "--------------------------------------------------------------------------------------------" . "<br>"
?>

<?php
// Arreglo asociativo
$persona = array(
    'nombre' => 'Juan',
    'edad' => 25,
    'ciudad' => 'Madrid'
  
);

// Acceso a elementos por clave
echo $persona['nombre'] . "<br>";  // Juan
echo $persona['edad'] . "<br>";    // 25
echo $persona['ciudad'] . "<br>";  // Madrid
echo $persona['pais'] . "<br>";  // error
?>
