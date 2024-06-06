<?php
    $directorios = array(

        array('id' => 123, 'nombre' => 'Juan'), ///  0 
        array('id' => 456, 'nombre' => 'Pedro'), /// 1 
		array('id' => 123, 'nombre' => 'Manuel'), // 2 
        array('id' => 456, 'nombre' => 'Maria') //   3
   
	
	);

	// recoger un multi array

	/// 
	  // Acceder a un array:  
	foreach ($directorios as $directorio)
	{
		///  array('id' => 123, 'nombre' => 'Juan')
	/*	echo '<div>';
		echo 'Id: '.  $directorio["id"]. "  Nombre 2: " .   $directorio["nombre"];
		echo '</div>';
		echo  "<br>";*/
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
	//var_dump($primerElemento);
	


	echo  "<br>";
    // Devuelve 456
	// Commo acceder al id del segundo arreglo?
    $ideSegundoElemento = $directorios[1]['id'];
	//var_dump($ideSegundoElemento);
	
	//var_dump($directorios[1]['id']);
	
	
 
 
	
	//echo  "<br>";

	var_dump($directorios[0]["nombre"]);

	// echo($directorios[0]["nombre"]);

    // devuelve Juan
    //$nombrePrimerElemento = $directorios[0]['nombre'];
	//var_dump($nombrePrimerElemento);





