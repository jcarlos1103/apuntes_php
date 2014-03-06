<?PHP
	// Programar de manera simple una máquina de cambio (se entiende que en euros). 
	// Esta siempre debe dar como resultado el conjunto de billetes y monedas más alto.
	
	// Cantidad a cambiar.
	$total = 1000;
	
	// Inicio el valor del cambio.
	$b500 = 500;
	$b100 = 100;
	$b50 = 50;
	$b20 = 20;
	$b10 = 10;
	$b5 = 5;
	$resto = 0;
	
	$contador = 500;	// El contador lo inicializo en el billete mas grando por el que puede ser dividido.
	
	while ($total != 1){
		if ($total % $contador == 0){
			echo $contador;
						/*
				//echo $contador.",".$total;
				
				if ($contador == $b500){
					$resto = $total - $b500;
					echo $resto;
					//echo "tenemos".$total." billetes de ".$b500;
					
				} elseif($contador == $b100){
					$resto = $total / $contador;
					echo "tenemos".$total." billetes de ".$b100;
					
				} elseif($contador == $b50){
					$resto = $total / $contador;
					echo "tenemos".$total." billetes de ".$b50;
					
				} elseif($contador == $b20){
					$resto = $total / $contador;
					echo "tenemos".$total." billetes de ".$b20;
					
				} elseif($contador == $b10){
					$resto = $total / $contador;
					echo "tenemos".$total." billetes de ".$b10;
					
				} elseif($contador == $b5){
					$resto = $total / $contador;
					echo "tenemos".$total." billetes de ".$b5;
					
				}else {
					echo"vaya mierda";
				}*/
			
		
	
		}else{
		$contador--;
		}
	}

	/*
	for ($i = 100; $i <= $cambio; $i--){
		$cambio = $total / $i;
		
	}
	echo $cambio;
	/*if ($cambio % $b50 == 0){
		
	echo"es exacto";
	}else{
	echo"no es exacto";
	}*/
?>