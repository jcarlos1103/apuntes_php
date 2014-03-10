<?PHP
$valor = 90;
$numeros["0"] = "cero";
$numeros["1"] = "uno";
$numeros["2"] = "dos";
$numeros["3"] = "tres";
$numeros["4"] = "cuatro";
$numeros["5"] = "cinco";
$numeros["6"] = "seis";
$numeros["7"] = "siete";
$numeros["8"] = "ocho";
$numeros["9"] = "nueve";
$numeros["10"] = "diez";
$numeros["11"] = "once";
$numeros["12"] = "doce";
$numeros["13"] = "trece";
$numeros["14"] = "catorce";
$numeros["15"] = "quince";

$numeros["20"] = "veinte";
$numeros["30"] = "treinta";
$numeros["40"] = "cuarenta";
$numeros["50"] = "cincuenta";
$numeros["60"] = "sesenta";
$numeros["70"] = "setenta";
$numeros["80"] = "ochenta";
$numeros["90"] = "noventa";
$numeros["100"] = "cien";

$contador = 1;

$decenas = 0;
$unidades = 0;

// Voy a comenzar hasta 99 porque en caso de que me funcione ya sería mas facil de ampliar.
while ($contador < 2) {

	if($valor > 15 && $valor < 99){

		$decenas = (int)($valor/10)*10;
		
		
	}

	if ($valor > 0 && $valor < 15){

		$unidades = $valor - ((int)($valor/10)*10);
		
	}


	switch ($valor) {

	case '0':
		echo ($numeros["0"]);
		break;

	case '1':
		echo ($numeros["1"]);
		break;

	case '2':
		echo ($numeros["2"]);
		break;

	case '3':
		echo ($numeros["3"]);
		break;

	case '4':
		echo ($numeros["4"]);
		break;

	case '5':
		echo ($numeros["5"]);
		break;

	case '6':
		echo ($numeros["6"]);
		break;

	case '7':
		echo ($numeros["7"]);
		break;

	case '8':
		echo ($numeros["8"]);
		break;

	case '9':
		echo ($numeros["9"]);
		break;

	case '10':
		echo ($numeros["10"]);
		break;

	case '11':
		echo ($numeros["11"]);
		break;

	case '12':
		echo ($numeros["12"]);
		break;

	case '13':
		echo ($numeros["13"]);
		break;

	case '14':
		echo ($numeros["14"]);
		break;

	case '15':
		echo ($numeros["15"]);
		break;

	case '20':
		echo ($numeros["20"]);
		break;

	case '30':
		echo ($numeros["30"]);
		break;

	case '40':
		echo ($numeros["40"]);
		break;

	case '50':
		echo ($numeros["50"]);
		break;

	case '60':
		echo ($numeros["60"]);
		break;

	case '70':
		echo ($numeros["70"]);
		break;

	case '80':
		echo ($numeros["80"]);
		break;

	case '90':
		echo ($numeros["90"]);
		break;

	case '100':
		echo ($numeros["100"]);
		break;
	
	default:
		echo "numero incorrecto";
		break;
	}
	$contador++;
}

echo $valor;
echo $decenas;
echo $unidades;
	
?>