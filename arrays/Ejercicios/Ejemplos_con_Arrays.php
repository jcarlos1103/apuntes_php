<?PHP
	
	echo "Creamos un array de manera muy simple: ";
	// Creamos un array de la forma mas simple.
	$array = array("Pais", "Comunidad", "Ciudad", "Barrio", "Calle");
	print_r($array);	// Mostramos el array.
	echo"<br>"; //para que haga un salto de línea
	
	// Elimina los elementos pero el array lo deja intacto.
	echo "Elimina los elementos pero el array lo dejará intacto = ";
	foreach ($array as $i => $value) {
		unset($array[$i]);
	}
	print_r($array);
	echo"<br>";
	
	echo "Agregamos otro nuevo elemento al array: ";
	// Agregamos un nuevo elemento al array.
	$array[] = "Edificio";
	print_r($array);
	echo"<br>";
	
	echo "Incorporamos un nuevo elemento al array: ";
	// Agregamos un nuevo elemento al array.
	$array = array_values($array);	// Para re-indexar ?? creo que reordena las posiciones.
	$array[] = "Piso";
	print_r($array);
	echo"<br><br>";
	
	echo "Ahora trataremos de recorrer todas las posiciones del array, para ello 
	crearemos otra vez el array inicial con todos los indices.";
	
	// Creamos otra vez todos los arrays como al principio.
	$array = array("Pais", "Comunidad", "Ciudad", "Barrio", "Calle", "Edificio", "Piso");
	//Como no queremos mostrarlo por pantalla lo eliminamos.
	//print_r($array);	// Mostramos el array.
	echo"<br>"; 
	
	
	$count = count($array); // Contamos los arrays que tenemos.
	
	// Por medio de éste bucle iremos recorriendo los arrays.
	for ($i = 0; $i < $count; $i++) {
		echo "\nRevisando la posicion $i: \n";
		//echo "Mal: " . $array['$i'] . "\n";
		echo "Correcto = " . $array[$i] . "<br>";
		//echo "Mal: {$array['$i']}\n";
		//echo "Bien: {$array[$i]}\n";
	}
	
	// Elimina los elementos pero el array lo deja intacto.
	foreach ($array as $i => $value) {
		unset($array[$i]);
	}
	
	
	// Ahora lo que haré será guardar datos en esos arrays.
	// Por ejemplo uno en cada uno.
	echo"Muestro todo lo que tengo en el array con print_r($array);";
	$array = array('Pais' => 'Espana','Comunidad' => 'Castilla-LaMancha', 'Ciudad' => 'Albacete', 
	'Barrio' => 'El Pilar', 'Calle' => 'Granada', 'Edificio' => '5', 'Piso' => '3');
	print_r($array);	// Muetro lo que hay en el array.
	
	echo"<br>";
	print $array['Pais']; // Imprimo el dato guardado en la posición País  y Comunidad
	echo"<br>";
	print $array['Comunidad'];
	echo"<br>";
	
	echo "ARRAY MULTIDIMENSIONALES";
	echo"<br>";
	echo"<br>";
	// Crearé un array multidimensional.
	$europa = array ( 
				  "paises"  => array ( "a" => "Alemania ",
                                       "b" => "Belgica ",
									   "d" => "Dinamarca ",
									   "e" => "Espana "
                                     ),
                  "posiciones"   => array ( 1 => "primero",
                                       		2 => "segundo",
                                            3 => "tercero",
											4 => "cuarto"
                                	 )
                );	
	// Ahora solicitaré posiciones para ver que nos va mostrando.
	
	print $europa ["paises"]["d"];
	print $europa ["posiciones"][1];
	
	
?>















