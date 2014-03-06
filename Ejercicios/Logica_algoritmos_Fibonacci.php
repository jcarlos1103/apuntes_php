<?PHP

	// Imprimir en pantalla una sucesión de Fibonacci de hasta 10.000 números como máximo.  
	// La sucesión comienza con los números 0 y 1, y a partir de estos, «cada término es la suma de los dos anteriores».
	
	// Declaro los array con las posiciones que conocemos.
	$miarray[0] = 0;
	$miarray[1] = 1;
	$suma = 0;	// Inicializo la variable suma para ir asignando valores a las posiciones contiguas.
	$contador = 2;	// El contador lo inicializamos por 2.
	
	// Lo controlamos con un while porque queremos que cuando el valor de la suma llegue a 10000 salga.
	while ($suma < 10000){
		// Al array le voy asignando valores a cada posición siguiente (basta con dejarlo [] lo hace automaticamente),
		// para ello lo guardo en la variable suma.
		$miarray[] = $miarray[$contador-1] + $miarray[$contador-2];
		$suma = $miarray[$contador-1] + $miarray[$contador-2];
		$contador++;		
	}
	
	// Para imprimir en una determinada posición o índice sería como acontinuación.
	//print_r ($miarray[ "10" ]);
	
	// Para mostrar todo nuestro array.
	print_r ($miarray);
	echo"<br>";

?>