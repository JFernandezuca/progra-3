<?php
    $directorios = array(
        array('id' => 123, 'nombre' => 'Juan'),
        array('id' => 456, 'nombre' => 'Pedro'), 
		array('id' => 123, 'nombre' => 'Manuel'),
        array('id' => 456, 'nombre' => 'Maria')
    );

	// recoger un multi array
	foreach ($directorios as $directorio)
	{
		echo '<div>';
		echo 'Identidicardor: '.  $directorio["id"]. "  Nombre: " .   $directorio["nombre"];
		echo '</div>';
		echo  "<br>";
	}


    // Acceder a un array:  
	/*
		array(2) {
		["ide"]=>
		int(123)
		["nombre"]=>
		string(4) "Juan"
	  }
	*/
	$primerElemento = $directorios[0];
	var_dump($primerElemento);
	echo  "<br>";
    // Devuelve 456
    $ideSegundoElemento = $directorios[1]['id'];
	var_dump($ideSegundoElemento);
	echo  "<br>";
    // devuelve Juan
    $nombrePrimerElemento = $directorios[0]['nombre'];
	var_dump($nombrePrimerElemento);






