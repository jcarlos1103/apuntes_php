<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Repaso PHP</title>
</head>
<body>

<?PHP

	echo "------------------- OPERADORES -------------------";
	
	echo "<br>Operadores matem&aacute;ticos: + - / * % "; // Suma, resta, división, multiplicación
	echo "<br>Operadores de comparación (en PHP algunos van por duplicado o triplicado): < > <= >= <> != == === !== && || "; // menor, mayor, menor o igual, mayor o igual, distinto, distinto, igual, igual en dato y tipo, distinto en dato y tipo, Y, O
	echo "<br>Palabras reservadas: NULL, null, var, function, array, echo, print_r, return, require, include, require_once, include_once, "; // Valor vacio, valor vacio, variable, función, array
	// Imprimir en pantalla, imprimir array en pantalla, devolver, requerir ficheros, incluir ficheros, una vez, una vez (las diferencias se ampliarán en los manuales)
	echo "<br>Clases: public, private, protected, static, final, abstract, instanceof, this"; // método publico, privado, protegido, clase estática, final, abstracta, intancia que pertenece a, puntero de clase a si misma en ámbito propio (o elementos propios)
	echo "<br>Sobrecarga de operadores: ++ , -- , += , -= , *= , /= , .="; // Aumento 1, disminuyo 1, sumo resto multiplio o divido igualando valor, concateno valor
	echo "<br>Las matem&aacute;ticas son aplicables, es decir 2+2*2 es 6, no 8. (2+2)*2 es 8"; // Aumento 1, disminuyo 1, sumo resto multiplio o divido igualando valor, concateno valor
	
	echo "<br>------------------- VARIABLES -------------------";
	
	// Declaración de variables simples
	// Las variables en PHP son dinámicas/mutantes, adquieren el tipo del valor. Ej. $Variabl = 9 es testo, $Variabl = "9" ahora es texto, $Variable .= 9 ahora su valor es 99 
	$variableSinValor = NULL;
	$variableVacia = "";
	$variableNumerica = 9;
	$variableNumericaDec = 9.999;
	$variableNumericaNeg = -9;
	$variableTexto = "TEXTO";
	$variableuno = $variableTexto;
	
	echo "<br>------------------- STRINGS -------------------";
	
	$cadena = "Cadena de texto"; // Una cadena normal
	$cadenaLong = strlen($cadena); // Mide la cadena
	$cadenaRecortada = substr($cadena,0,5); // Recorta la cadena desde la posición cero y, opcionalmente, cuantos caracteres coge (5).
	// Existen muchas funciones de cadenas (concat, strrev...), en el manual podemos obtener detalles
	
	echo "<br>------------------- ARRAYS -------------------";
	$miArray = array();
	$miArrayConDatos = array("Angel","Pedro","Juan");
	$miArrayConDatoseIndiceNum = array(1=>"Angel", 2=>"Pedro", 3=>"Juan");
	$miArrayConDatoseIndiceAlf = array("A"=>"Angel", "B"=>"Pedro", "C"=>"Juan");
	$miArray2dimensiones = array(array("Angel"));
	$miArray2dimensionesOtranotacion[0][0] = "Angel";
	$miArrayMultidimensional[0][0][2][4][6] = "Angel";
	$arraymezclado['results'][0]['nombreFiscal'] = "ANGEL S.A.";
	$arrayConVariable = array($variableNumerica, $variableTexto);
	
	echo "<br>------------------- ESTRUCTURAS DE CONTROL -------------------";
	
	// IF ELSE con validación de texto
	$varSaludo = "Hola";
	if($varSaludo == "Hola")
		echo "<br>Hola";
	else
		echo "<br>Adios";
	
	// IF ELSE con validación de número	
	$varSaludo = 3;
	if($varSaludo == 3)
		echo "<br>El valor es 3";
	else
		echo "<br>El valor no es 3";
		
	// IF ELSE encadenados
	$varSaludo = 3;
	if($varSaludo == 3)
		echo "<br>El valor es 3";
	else
		if($varSaludo == 5)
			echo "<br>El valor es 5";
		else
			echo "<br>No es ni 3 ni 5";
	
	// IF ELSE con llaves
	$varSaludo = 3;
	if($varSaludo == 3){
		echo "<br>El valor es 3";
		echo "<br>Como hay dos o m&aacute;s líneas, debo incluirlas entre llaves";
	}
	
	// Bucle While
	$varSaludo = 3;
	while($varSaludo < 10){
		
		echo "<br>La variable ahora es: ".$varSaludo;
		$varSaludo++; // Si me eliminas, me convierto en un bucle infinito.	
	}
	
	// Bucle Do While
	$varSaludo = 3;
	do{
		// Ahora doy una vuelta mínimo
		echo "<br>La variable ahora es: ".$varSaludo;
		$varSaludo++; // Si me eliminas, me convierto en un bucle infinito.	
	}while($varSaludo < 10);
	
	/* Bucle For
 	   Aumenta solo de 1 en 1 y declara la variable */
	for($i=0;$i<10;$i++)
		{
		echo "<br>Soy la vuelta ".$i." de 10 ";	
		}
		
	// Bucle For
	// Aumenta solo de 3 en 3
	for($i=0;$i<10;$i+3)
		{
		echo "<br>Soy la vuelta ".$i." de 10 ";	
		}
		
	// Bucle Foreach 
	// Para arrays 
	$arrayGente = array("ANGEL","JUAN","PEDRO");
	foreach($arrayGente as $persona)
		{
		print_r($persona);
		}
		
	// Mezclamos conceptos (Strings, arrays IF ELSE y Bucles)
	$primeros = "<br>Soy de los primeros";
	$segundos = "<br>Soy de los segundos";
	
	for($i=0;$i<10;$i++)
		{
		if($i < 5)
			echo $primeros;
		else
			echo $segundos;	
		}
		
		
	echo "<br>------------------- FUNCIONES -------------------";
	
	function dimehola(){
		echo "Hola";	
	}
	dimehola();
	
	function dimeloquemepasescomoparametro($loquequieroquedigas){
		
		echo $loquequieroquedigas;
	}
	dimeloquemepasescomoparametro("Hola a todos");
	
	echo "<br>------------------- CLASES -------------------";
	// Clase simple con un método
	class perrito{
		
		public function dialgo(){
			
			echo "<br>GUAU!!";
			}
	}
	
	$perro = new perrito();
	$perro->dialgo();
	
	// Clase simple con un método que llama a otro (privado)
	class perrito{
		
		public function dialgo(){
			
			self::ladrar();
		}
		
		private function ladrar(){
			
			echo "<br>GUAUGUAU!!";	
		}
	}
	
	$perro = new perrito();
	$perro->dialgo();
	
	// Continuara...
?>

</body>
</html>