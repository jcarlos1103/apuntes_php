<?PHP

/* BUCLES
	Los bucles son estructuras de datos ciclicas que realizan acciones mientras se cumpla una condición. 
	El principal punto a tener en cuenta es que pueden crearse bucles sin fin o infinitos si la condición nunca se cumple.
	Su estructura y funcionamiento es identico a otros lenguajes de programación como C, Java entre otros
*/

/* BUCLE FOR 
	Los bucles for son los más complejos en PHP. Se comportan como sus homólogos en C. La sintaxis de un bucle for es:
		
		for (expr1; expr2; expr3)
			sentencia
	
	La primera expresión (expr1) es evaluada (ejecutada) una vez incondicionalmente al comienzo del bucle.
	En el comienzo de cada iteración, se evalúa expr2. Si se evalúa como TRUE, el bucle continúa y se ejecutan la/sy sentencia/s anidada/s. 
	Si se evalúa como FALSE, finaliza la ejecución del bucle.
	Al final de cada iteración, se evalúa (ejecuta) expr3.
	
	Cada una de las expresiones puede estar vacía o contener múltiples expresiones separadas por comas. 
	En expr2, todas las expresiones separadas por una coma son evaluadas, pero el resultado se toma de la última parte. 
	Que expr2 esté vacía significa que el bucle debería ser corrido indefinidamente (PHP implícitamente lo considera como TRUE, como en C). 
	Esto puede no ser tan inútil como se pudiera pensar, ya que muchas veces se debe terminar el bucle 
	usando una sentencia condicional break en lugar de utilizar la expresión verdadera del for.
	
	Considere los siguientes ejemplos. Todos ellos muestran los números del 1 al 10: 
*/
	/* EJEMPLOS 1 */
	/* ejemplo 1 */
	for ($i = 1; $i <= 10; $i++) {
		echo $i;
	}
	
	/* ejemplo 2 */
	for ($i = 1; ; $i++) {
		if ($i > 10) {
			break;
		}
		echo $i;
	}
	
	/* ejemplo 3 */
	$i = 1;
	for (; ; ) {
		if ($i > 10) {
			break;
		}
		echo $i;
		$i++;
	}
	
	/* ejemplo 4 */
	for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
	
/*  
	Por supuesto, el primer ejemplo parece ser el mejor (o quizás el cuarto), pero se puede observar que la posibilidad de usar expresiones 
	vacías en los bucles for resulta útil en muchas ocasiones. PHP también admite la sintaxis alternativa de los dos puntos para bucles for.
	
		for (expr1; expr2; expr3):
			sentencia
			...
		endfor;
	
	Es una cosa común a muchos usuarios iterar por medio de arrays como en el siguiente ejemplo. 
*/
	/* EJEMPLOS 2
	* Este es un array con algunos datos que se quieren modificar
	* cuando se recorra el bucle for.
	*/
	$personas = array(
		array('nombre' => 'Angel', 'valor' => 856412),
		array('nombre' => 'Pedro', 'valor' => 215863)
	);
	
	for($i = 0; $i < count($personas); ++$i) {
		$personas[$i]['valor'] = mt_rand(000000, 999999);
}
/*
	El código anterior puede ser lento, debido a que el tamaño del array se capta en cada iteración. 
	Dado que el tamaño nunca cambia, el bucle ser fácilmente optimizado mediante el uso de una variable 
	intermedia para almacenar el tamaño en lugar de llamar repetidamente a count(): 
*/
	/* EJEMPLOS 3 */
	$personas = array(
		array('nombre' => 'Angel', 'valor' => 856412),
		array('nombre' => 'Pedro', 'valor' => 215863)
	);
	
	for($i = 0, $size = count($personas); $i < $size; ++$i) {
		$personas[$i]['valor'] = mt_rand(000000, 999999);
	}


/* BUCLE FOREACH
	El constructor foreach proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, 
	y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada. Existen dos sintaxis:
	
		foreach (expresión_array as $valor)
			sentencias
		foreach (expresión_array as $clave => $valor)
			sentencias
	
	La primera forma recorre el array dado por expresión_array. 
	En cada iteración, el valor del elemento actual se asigna a $valor y el puntero interno del array avanza una posición 
	(así en la próxima iteración se estará observando el siguiente elemento).
	La segunda forma además asigna la clave del elemento actual a la variable $clave en cada iteración. 
	
	Cuando foreach inicia su ejecución, el puntero interno del array se pone automáticamente en el primer elemento del array. 
	Esto significa que no es necesario llamar la función reset() antes de un bucle foreach.
	Ya que foreach depende el puntero de array interno, cambiar éste dentro del bucle puede conducir a un comportamiento inesperado. 
	
	Para poder modificar directamente los elementos del array dentro de bucle, se ha de anteponer & a $valor. 
	En este caso el valor será asignado por referencia. 
*/
	/* EJEMPLO 1 */
	$array = array(1, 2, 3, 4);
	foreach ($array as &$valor) {
		$valor = $valor * 2;
	}
	// $array ahora es array(2, 4, 6, 8)
	unset($valor); // rompe la referencia con el último elemento

/*
	Referenciar $valor sólo es posible si el array iterado puede ser referenciado (es decir, si es una variable). 
	El siguiente código no funcionará: 
*/
	/* EJEMPLO 2 */
	foreach(array(1, 2, 3, 4) as &$valor) { // Lo marca como error
    $valor = $valor * 2;
	}
	
/*
	Podemos obtener el mismo resultado con otras funciones y estructuras de bucles.
	Se puede haber notado que las siguientes construcciones son funcionalmente idénticas: 
*/
	/* EJEMPLO 3 */
	$array = array("uno", "dos", "tres");
	reset($array);
	while (list(, $valor) = each($array)) {
		echo "Valor: $valor<br />\n";
	}
	
	foreach ($array as $valor) {
		echo "Valor: $valor<br />\n";
	}

/*
	Las siguientes construcciones también son funcionalmente idénticas: 
*/
	/* EJEMPLO 4 */
	$array = array("uno", "dos", "tres");
	reset($array);
	while (list($clave, $valor) = each($array)) {
		echo "Clave: $clave; Valor: $valor<br />\n";
	}
	
	foreach ($array as $clave => $valor) {
		echo "Clave: $clave; Valor: $valor<br />\n";
	}
/*
	Ejemplos variados del uso de FOREACH
*/	
	/* Ejemplo 1 de foreach: sólo el valor */
	
	$a = array(1, 2, 3, 17);
	
	foreach ($a as $v) {
		echo "Valor actual de \$a: $v.\n";
	}
	
	/* Ejemplo 2 de foreach: valor (con su notación de acceso manual impreso con fines ilustrativos) */
	
	$a = array(1, 2, 3, 17);
	
	$i = 0; /* sólo para efectos ilustrativos */
	
	foreach ($a as $v) {
		echo "\$a[$i] => $v.\n";
		$i++;
	}
	
	/* Ejemplo 3 de foreach: clave y valor */
	
	$a = array(
		"uno" => 1,
		"dos" => 2,
		"tres" => 3,
		"diecisiete" => 17
	);
	
	foreach ($a as $k => $v) {
		echo "\$a[$k] => $v.\n";
	}
	
	/* Ejemplo 4 de foreach: arrays multidimensionales */
	$a = array();
	$a[0][0] = "a";
	$a[0][1] = "b";
	$a[1][0] = "y";
	$a[1][1] = "z";
	
	foreach ($a as $v1) {
		foreach ($v1 as $v2) {
			echo "$v2\n";
		}
	}
	
	/* Ejemplo 5 de foreach: arrays dinámicos */
	
	foreach (array(1, 2, 3, 4, 5) as $v) {
		echo "$v\n";
	}
	
/* BUCLE WHILE
	Los bucles while son el tipo más sencillo de bucle en PHP. 
	Se comportan igual que su contrapartida en C. La forma básica de una sentencia while es:
	
		while (expr)
			sentencia
	
	El significado de una sentencia while es simple. Le dice a PHP que ejecute las sentencias anidadas, 
	tanto como la expresión while se evalúe como TRUE. 
	El valor de la expresión es verificado cada vez al inicio del bucle, por lo que incluso si este valor cambia 
	durante la ejecución de las sentencias anidadas, la ejecución no se detendrá hasta el final de la iteración 
	(cada vez que PHP ejecuta las sentencias contenidas en el bucle es una iteración). 
	A veces, si la expresión while se evalúa como FALSE desde el principio, las sentencias anidadas no se ejecutarán ni siquiera una vez.
	Al igual que con la sentencia if, se pueden agrupar varias instrucciones dentro del mismo bucle while 
	rodeando un grupo de sentencias con corchetes, o utilizando la sintaxis alternativa:
	
		while (expr):
			sentencias
			...
		endwhile;
	
	Los siguientes ejemplos son idénticos y ambos presentan los números del 1 al 10: 
*/	
	/* EJEMPLOS */
	
	/* ejemplo 1 */
	$i = 1;
	while ($i <= 10) {
		echo $i++;  /* el valor presentado sería
					   $i antes del incremento
					   (post-incremento) */
	}
	
	/* ejemplo 2 */
	$i = 1;
	while ($i <= 10):
		echo $i;
		$i++;
	endwhile;
	
/* BUCLE DO WHILE	
	Los bucles do-while son muy similares a los bucles while, excepto que la expresión verdadera es verificada 
	al final de cada iteración en lugar que al principio.
	La diferencia principal con los bucles while es que está garantizado que corra la primera iteración de un 
	bucle do-while (la expresión verdadera sólo es verificada al final de la iteración), mientras que no necesariamente 
	va a correr con un bucle while regular (la expresión verdadera es verificada al principio de cada iteración, 
	si se evalúa como FALSE justo desde el comienzo, la ejecución del bucle terminaría inmediatamente).
	
	Hay una sola sintaxis para bucles do-while: 
*/
	/* EJEMPLO 1 */
	$i = 0;
	do {
		echo $i;
	} while ($i > 0);
	
/*
	El bucle de arriba se ejecutaría exactamente una sola vez, ya que después de la primera iteración, cuando la expresión verdadera es 
	verificada, se evalúa como FALSE ($i no es mayor que 0) y termina la ejecución del bucle.
	Los usuarios avanzados de C pueden estar familiarizados con un uso distinto del bucle do-while, para permitir parar la ejecución en 
	medio de los bloques de código, mediante el encapsulado con do-while (0), y utilizando la sentencia break. 
	El siguiente fragmento de código demuestra esto: 
*/
	/* EJEMPLO 2 */
	do {
		if ($i < 5) {
			echo "i no es lo suficientemente grande";
			break;
		}
		$i *= $factor;
		if ($i < $minimum_limit) {
			break;
		}
	   echo "i está bien";
	
		/* procesar i */
	
	} while (0);
?>