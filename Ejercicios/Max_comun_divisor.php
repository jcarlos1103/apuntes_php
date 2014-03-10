<?php
// Max Comun divisor de dos o más números enteros es: al mayor número que los divide 
// sin dejar resto.  Por ejemplo, el mcd de 42 y 56 es 14. 
// Lo primero que realizo es la descomposición en factores primos de los número para así
// poder obtener el minimo comun multiplo.

$numero1 = 123456;
$v_num1[] = 0;

$contador = 2;

while ($contador <= $numero1) {
	for($i = 0; $i < 10; $i++){

		if (($numero1 % $contador) == 0) {
			
			$v_num1[$i] = $i;
			$numero1 = $numero1/$i;
			continue;
		}
	}
	$contador++;
}
print_r($v_num1);

?>