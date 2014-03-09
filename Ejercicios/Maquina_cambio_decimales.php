<?php
	
	$total_decimal[] = 0.15;
	$cont = 1;
	

	$m_decimal[] = 0.50;
	$m_decimal[] = 0.20;
	$m_decimal[] = 0.10;
	$m_decimal[] = 0.05;
	$m_decimal[] = 0.02;
	$m_decimal[] = 0.01;

	$num_decimal = count($m_decimal);

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
	print_r (array_count_values($array_decimal));
	echo"<\pre>";
?>
