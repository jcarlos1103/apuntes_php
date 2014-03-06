<?PHP
	// Ejercicio 3
	// De una cadena de texto voltearla.
	$cadena = "Bienvenido";
	echo strrev($cadena);
	echo"<br>";
	
	// Ejercicio 4
	// Contar las apariciones de la letra “a” en una cadena dada. Por ejemplo, “El cliente ha facturado 1200€”
	
	$texto = "El cliente ha facturado 1200€";
	echo substr_count($texto, 'a');	// Función que cuenta las apariciones que le indiquemos de una variable
	echo"<br>";
	
	
	// Ejercicio 5
	// Ejercicio que une dos cadenas.
	
	$cadena1 = "Hola ";
	$cadena2 = "Angel";
	echo $cadena1 . $cadena2;
	echo"<br>";
	
	
	// Ejercicio 6
	// Sustituir la primera letra por mayúsculas de una cadena.
	
	$cadena3 = "juan carlos";
	echo ucwords($cadena3);	// Ésta función convierte la primera letra de cada palabra en mayuscula.
?>