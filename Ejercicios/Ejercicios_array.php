<?PHP
	// Ejercicio 1
	// Creamos un array de una dimension con cuatro nombres de persona. 
	$persona = array("Juan", "Antonio", "Luis", "Pedro");
	print_r($persona);	// Mostramos el array.
	echo"<br>";
?>

<?PHP	
	// Ejercicio 2
	// Alberganmos los nombres anteriores con un índice n1, n2...
	$persona = array('n1' => 'Juan','n2' => 'Antonio', 'n3' => 'Luis', 'n4' => 'Pedro');
	
	// echo "<PRE>";	// Colocando ésto mostramos el array como un esquema.
	print_r($persona);
	// echo "<\PRE>";
	echo"<br>";
?>

<?PHP
	// Ejercicio 3
	// Dada la cadena del estilo “Esto-es-una-cadena”, separar por guiones y convertir en array. Uso de Explode
	
	$texto = "A partir de maniana comenzaremos una hora antes";	// Creamos un texto en una variable.
	
	// Con el uso de explode le indicamos como captar la palabra para una 
	// nueva posicion en el array, en nuestro caso con un espacio y la variable que queramos descomponer.
	$palabras = explode(" ", $texto);	
	
	$total = count($palabras);	// Utilizo la palabra reservada para contar los elementos que tiene el array.
	$cont=0;	// inicializo el contador.
	
	// Con un bucle while intentaré recorrer todo el array, con el fin de que cuando llegue al final salga.
	while ($cont < $total){
		echo  $palabras[$cont]."-"; // Imprimo la posición que me indica el contador.
		$cont++;
	}
?>