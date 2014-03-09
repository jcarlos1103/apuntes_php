<?PHP
	// Programar de manera simple una máquina de cambio (se entiende que en euros). 
	// Esta siempre debe dar como resultado el conjunto de billetes y monedas más alto.
	
	// Cantidad a cambiar.
	$total[] = 1259.20;	// la guardo en un array para poder ir cambiando el valor.
	$contador = 1;	// Contador para el primer while
	
	
	// Guardo en un array los posibles valores por los cuales se puede dividir.
	
	$moneda[] = 500;
	$moneda[] = 200;
	$moneda[] = 100;
	$moneda[] = 50;
	$moneda[] = 20;
	$moneda[] = 10;
	$moneda[] = 5;
	$moneda[] = 1;

	// Para contar las posiciones que tenemos en el array monedas. El cambio existente.
	$n_mon = count($moneda);
		

	$array_entero[] = 0;	// Array donde guardaré los datos del cambio.
	unset($array_entero[0]);	// Para eliminar la posición 0, ya que está vacia por iniciarla y la necesito para
											// poder almacenar el primer valor, y no que éste se almacene en el segundo.

		
	// Datos que mostraremos por pantalla fijos, antes de ejecutar ningun bucle.
	echo "Cantidad a cambiar: ".$total["0"]." Euros.";
	echo "<br>";
	echo "El cambio es: ";
	echo "<br>";

	while ($total[$contador-1] > 0.99 ){

			// Utilizo un for para controlar las posiciones o valores del array monedas.
			for($i = 0; $i < $n_mon; $i++){

				// Si el valor es mayor que el valor de la mayor moneda, entronces resto y guardo el valor
				// en el array cambio y actualizo el resto en una nueva posicion del total.
				if($total[$contador-1] > $moneda[$i]){

					$total[] = $total[$contador-1] - $moneda[$i];
					$array_entero[] = $moneda[$i];

					break;	// Necesito que el programa salte para que el contador comience desde cero otra vez.
				}

				// Con este condicional, descubrimos que cantidad es == a la guardada en el $moneda[], recorriendo éste.
				if($total[$contador-1] == $moneda[$i]){

					$total[] = $total[$contador-1] - $moneda[$i];
					$array_entero[] = $moneda[$i];

					break;
				}
			}
			$contador++;
		
		}

	/*
	* Para la parte decimal, he creado un nuevo array con la función que devuelve el último valor guardado en ésta
	* y así poder continuar con éste otro array "decimal". Al cual le asigno como valor inicial el último del otro array.
	*/
	
	
	$cont = 1;
	
	$m_decimal[] = 0.50;
	$m_decimal[] = 0.20;
	$m_decimal[] = 0.10;
	$m_decimal[] = 0.05;
	$m_decimal[] = 0.02;
	$m_decimal[] = 0.01;

	$num_decimal = count($m_decimal);

	// Asigno valor al nuevo array para que en caso de no ejecutarse el primer while, éste tenga valor.	
	$total_decimal[] = array_pop($total);

	$array_decimal[] = 0;
	unset ($array_decimal[0]);

	while($total_decimal[$cont-1] != 0 ){

		for($j = 0; $j < $num_decimal; $j++){

			if($total_decimal[$cont-1] > $m_decimal[$j]){

				$total_decimal[] = $total_decimal[$cont-1] - $m_decimal[$j];
				$array_decimal[] = $m_decimal[$j];

				break;

			}


			if($total_decimal[$cont-1] == $m_decimal[$j]){

				$total_decimal[] = $total_decimal[$cont-1] - $m_decimal[$j];
				$array_decimal[] = $m_decimal[$j];


				break;
			}
		}
		$cont++;
	}

	echo"<pre>";
	print_r (array_count_values($array_entero));
	print_r ($array_decimal);
	echo"<\pre>";

?>
