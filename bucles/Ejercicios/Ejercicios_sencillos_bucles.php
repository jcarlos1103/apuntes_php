<?PHP
	// FOR Hacemos que el bucle se ejecute 10 veces su interior.
	for($i = 0; $i < 10; $i++){
	echo $i;
	}
	
	// WHILE Hacemos el mismo ejercicio que con el for, que se ejecute 10 veces.
	$contador = 0;
	while($contador < 10){
	echo $contador;
	$contador++; // para que no produzca un bucle infinito.
	}
	
	// DO-WHILE Realizará lo mismo que anteriormente.
	$contador = 0;
	do{
	echo $contador++;
	}while($contador < 10);
?>