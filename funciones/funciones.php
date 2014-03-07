<?PHP

/* FUNCIONES
	Las funciones son porciones de código aisladas que pueden ser invocadas por otros elementos de la aplicación.
	Esto permite encapsular y reutilizar acciones concretas sin necesidad de duplicarlas por todo el código cada
	vez que las necesitemos.
	Una función puede recibir una serie de parametros opcionales, que serán usados por la misma y devolver una serie de valores
	a su invocador.
	Una práctica muy común en programación es almacenar funciones globales en ficheros (herramientas.php) e incluirlos donde más
	se necesiten para utilizar sus funciones. 
	Cualquier código PHP válido puede aparecer dentro de una función, incluso otras funciones y definiciones de clases.
	Los nombres de las funciones siguen las mismas reglas que otras etiquetas de PHP. 
	Un nombre de función válido comienza con una letra o guión bajo, seguido de cualquier número de letras, números, o guiones bajos. 
	Como expresión regular se expresaría así: [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*. 
*/
	/* EJEMPLO 1*/
	function ejemplo($arg_1, $arg_2, /* ..., */ $arg_n)
	{
		$valordevuelto = "Función de ejemplo.\n";
		return $valordevuelto;
	}
	
	$loquemedevuelve = ejemplo(1,2,3);
	
	
/*
	Las funciones no necesitan ser definidas antes de que se referencien, 
	excepto cuando una función está condicionalmente definida como se muestra en los dos ejemplos de abajo.
	Cuando una función está definida de una forma condicional como en los dos ejemplos mostrados, 
	sus definiciones deben ser procesadas antes de ser llamadas. 
*/
	/* EJEMPLO 2*/
		$haceralgo = true;
	
		/* No podemos llamar a foo() desde aquí
		   ya que no existe aún,
		   pero podemos llamar a bar() */
	
		bar();
		
		if ($haceralgo) {
		  function foo()
		  {
			echo "No existo hasta que la ejecución del programa llegue hasta mí.\n";
		  }
		}
		
		/* Ahora podemos llamar de forma segura a foo()
		   ya que $haceralgo se evaluó como verdadero */
		
		if ($haceralgo) foo();
		
		function bar()
		{
		  echo "Existo desde el momento inmediato que comenzó el programa.\n";
		}
	
	
	/* EJEMPLO 3 */
		function foo()
		{
		  function bar()
		  {
			echo "No existo hasta que se llame a foo().\n";
		  }
		}
		
		/* No podemos llamar aún a bar()
		   ya que no existe. */
		
		foo();
		
		/* Ahora podemos llamar a bar(),
		   el procesamiento de foo()
		   la ha hecho accesible. */
		
		bar();

/*
	Todas las funciones y las clases de PHP tienen ámbito global - pueden ser llamadas fuera de una función incluso si fueron definidas dentro, y viceversa.
	PHP no soporta la sobrecarga de funciones, ni es posible 'desdefinir' ni redefinir funciones previamente declaradas. 
	Los nombres de las fuciones son insensibles a mayúsculas-minúsculas, por lo que es una buena idea llamar a las funciones tal y como aparecen en sus declaraciones. 
	El número variable de argumentos y los argumentos predeterminados están soportados por las funciones. 
	Vea también las referencias de funciones para func_num_args(), func_get_arg(), y func_get_args() para más información.
	En PHP es posible llamar a funciones recursivas. 
	Sin embargo, evite las llamadas a funciones/métodos recursivos con más de 100-200 niveles de recursividad ya que 
	pueden agotar la pila y causar la terminación del script actual. 
*/
	/* EJEMPLO 4: FUNCIONES RECURSIVAS */
	function recursividad($a)
	{
		if ($a < 20) {
			echo "$a\n";
			recursividad($a + 1);
		}
	}
	
/* 
	La información puede ser pasada a las funciones mediante la lista de argumentos, la cual es una lista de expresiones delimitadas por comas. 
	Los argumentos son evaluados de izquierda a derecha.
	PHP soporta argumentos pasados por valor (por defecto), pasados por referencia, y valores de argumentos predeterminados. 
	Las Listas de argumentos de longitud variable también están soportadas. 
*/
	/* EJEMPLO 5: PARAMETROS EN FUNCIONES */
	$entrada = array(5,8);
	function tomar_array($entrada)
	{
		echo "$entrada[0] + $entrada[1] = ".$entrada[0]+$entrada[1]; // Da 13
	}
	
/*
	Por defecto, los argumentos de las funciones son pasados por valor (por lo que si el valor del 
	argumento dentro de la función se cambia, no se cambia fuera de la función). 
	Para permitir a una función modificar sus argumentos, éstos deben pasarse por referencia.
	Para hacer que un argumento a una función sea siempre pasado por referencia hay que poner 
	delante del nombre del argumento el signo 'ampersand' (&) en la definición de la función: 
*/
	/* EJEMPLO 6: PARAMETROS POR REFERENCIA */
	function añadir_algo(&$cadena)
	{
		$cadena .= 'y algo más.';
	}
	$cad = 'Esto es una cadena, ';
	añadir_algo($cad);
	echo $cad;    // imprime 'Esto es una cadena, y algo más.'
	
/* 
	Una función puede definir valores predeterminados al estilo C++ para argumentos escalares como sigue: 
*/
	/* EJEMPLO 7: PARAMETROS PREDETERMINADOS */
	function hacercafé($tipo = "capuchino")
	{
		return "Hacer una taza de $tipo.\n";
	}
	echo hacercafé();
	echo hacercafé(null);
	echo hacercafé("espresso");
	
/*
	PHP también permite el uso de arrays y del tipo especial NULL como valores predeterminados, por ejemplo: 
*/
	/* EJEMPLO 8: PARAMETROS NULL Y ARRAY */
	function hacercafé($tipos = array("capuchino"), $fabricanteCafé = NULL)
	{
		$aparato = is_null($fabricanteCafé) ? "las manos" : $fabricanteCafé;
		return "Hacer una taza de ".join(", ", $tipos)." con $aparato.\n";
	}
	echo hacercafé();
	echo hacercafé(array("capuchino", "lavazza"), "una tetera");

/*
	El valor predeterminado debe ser una expresión constante, no (por ejemplo) una variable, un miembro de una clase o una llamada a una función.
	Observe que cuando se usan argumentos predeterminados, cualquiera de ellos debería estar a la derecha de los argumentos no predeterminados; 
	si no, las cosas no funcionarán como se esperaba. Considere el siguiente trozo de código: 
*/
	/* EJEMPLO 9: USOS INCORRECTOS / ERRONEOS */
	// ERRONEO
	function haceryogur($tipo = "acidófilo", $sabor)
	{
		return "Hacer un tazón de yogur $tipo de $sabor.\n";
	}
	
	echo haceryogur("frambuesa");   // no funcionará como se esperaba
	
	// CORRECTO
	function haceryogur($sabor, $tipo = "acidófilo")
	{
		return "Hacer un tazón de yogur $tipo de $sabor.\n";
	}
	
	echo haceryogur("frambuesa");   // funciona como se esperaba
	
/*
	PHP tiene soporte para listas de argumentos de longitud variable en funciones definidas por el usuario. 
	Esto realmente es bastante fácil si se usan las funciones func_num_args(), func_get_arg(), y func_get_args().
	No se necesita una sintaxis especial, y la lista de argumentos aún puede ser proporcionada 
	explícitamente con definiciones de funciones, y se comportará con normalidad. 
*/

?>