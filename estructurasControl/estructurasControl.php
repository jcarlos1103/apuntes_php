<?PHP
/* ESTRUCTURAS DE CONTROL
	Todo script PHP está construido en base a una serie de sentencias. 
	Una sentencia puede ser una asignación, una llamada de función, un ciclo, una sentencia condicional o 
	incluso una sentencia que no hace nada (una sentencia vacía). 
	Las sentencias generalmente finalizan con un punto y coma. 
	Adicionalmente, las sentencias pueden agruparse en un conjunto de sentencias, encapsulándolas entre corchetes. 
	Un grupo de sentencias es una sentencia por sí misma también. Los diferentes tipos de sentencias son descritos en este capítulo. 
*/

/* IF - ELSE 
	El constructor if es una de las características más importantes de muchos lenguajes, incluido PHP. 
	Permite la ejecución condicional de fragmentos de código. PHP dispone de una estructura if que es similar a la de C:
	
		if (expr)
		  sentencia
	
	Como se describe en la sección sobre expresiones , la expresión es evaluada a su valor booleano. 
	Si la expresión se evalúa como TRUE, PHP ejecutará la sentencia y si se evalúa como FALSE la ignorará. 
	
	El siguiente ejemplo mostraría a es mayor que b si $a es mayor que $b: 
*/
	/* EJEMPLO 1 */
	if ($a > $b) {
	  echo "a es mayor que b";
	}

/*
	A menudo se desea tener más de una sentencia para ser ejecutada condicionalmente. 
	Por supuesto, no hay necesidad de envolver cada sentencia con una cláusula if. 
	En cambio, se pueden agrupar varias sentencias en un grupo de sentencias. 
	Por ejemplo, este código mostraría a es mayor que b si $a es mayor que $b y entonces asignaría el valor de $a a $b: 
*/
	/* EJEMPLO 2 */
	if ($a > $b) {
	  echo "a es mayor que b";
	  $b = $a;
	}
	
/*
	Las sentencias if pueden anidarse dentro de otra sentencias if infinitamente, 
	lo cual provee completa flexibilidad para la ejecución condicional de diferentes partes del programa. 
	Con frecuencia se desea ejecutar una sentencia si una determinada condición se cumple y una sentencia 
	diferente si la condición no se cumple. Esto es para lo que sirve else. 
	El else extiende una sentencia if para ejecutar una sentencia en caso que la expresión en la sentencia if se evalúe como FALSE. 
	Por ejemplo, el siguiente código deberá mostrar a es mayor que b si $a es mayor que $b y a NO es mayor que b en el caso contrario: 
*/
	/* EJEMPLO 3 */
	if ($a > $b) {
	  echo "a es mayor que b";
	} else {
	  echo "a NO es mayor que b";
	}

/* 
	El uso de elseif, como su nombre lo sugiere, es una combinación de if y else. 
	Del mismo modo que else, extiende una sentencia if para ejecutar una sentencia diferente en caso que la expresión if original 
	se evalúe como FALSE. Sin embargo, a diferencia de else, esa expresión alternativa sólo se ejecutará si la expresión condicional 
	del elseif se evalúa como TRUE. Por ejemplo, el siguiente código debe mostrar a es mayor que b, a es igual que b o a es menor que b: 
*/
	/* EJEMPLO 4 */
	if ($a > $b) {
		echo "a es mayor que b";
	} elseif ($a == $b) {
		echo "a es igual que b";
	} else {
		echo "a es menor que b";
	}

/* 
	Puede haber varios elseif dentro de la misma sentencia if. La primera expresión elseif (si hay alguna) que se evalúe como TRUE sería ejecutada. 
	En PHP también se puede escribir 'else if' (en dos palabras) y el comportamiento sería idéntico al de 'elseif' (en una sola palabra). 
	El significado sintáctico es ligeramente diferente (si se está familiarizado con C, este es el mismo comportamiento) pero la conclusión es que 
	ambos resultarían tener exactamente el mismo comportamiento.

	La sentencia elseif es ejecutada solamente si la expresión if precedente y cualquiera de las expresiones elseif precedentes son evaluadas como FALSE, 
	y la expresión elseif actual se evalúa como TRUE. 
	
	Tenga en cuenta que elseif y else if serán considerados exactamente iguales sólamente cuando se utilizan corchetes como en el ejemplo anterior. 
	Al utilizar los dos puntos para definir las condiciones if/elseif, no debe separarse else if en dos palabras o PHP fallará con un error del interprete. 
*/
	/* EJEMPLO 5 */
	/* Método incorrecto: */
	if($a > $b):
		echo $a." es mayor que ".$b;
	else if($a == $b): // No compilará, lo marca como error
		echo "La línea anterior provoca un error del interprete.";
	endif;
	
	
	/* Método correcto: */
	if($a > $b):
		echo $a." es mayor que ".$b;
	elseif($a == $b): // Tenga en cuenta la combinación de las palabras.
		echo $a." igual ".$b;
	else:
		echo $a." no es ni mayor que ni igual a ".$b;
	endif;


/* SWITCH
	La sentencia switch es similar a una serie de sentencias IF en la misma expresión. 
	En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, 
	y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch. 
	Cabe señalar que a diferencia de algunos otros lenguajes, la sentencia continue se aplica a switch y actúa de manera similar a break. 
	Si se tiene un switch dentro de un bucle y se desea continuar a la siguiente iteración de del ciclo exterior, se utiliza continue. 
	
	Los dos ejemplos siguientes son dos formas diferentes de escribir lo mismo, uno con una serie de sentencias if y elseif, y el 
	otro usando la sentencia switch
*/
	/* EJEMPLO 1: IF Anidados*/
	if ($i == 0) {
		echo "i es igual a 0";
	} elseif ($i == 1) {
		echo "i es igual a 1";
	} elseif ($i == 2) {
		echo "i es igual a 2";
	}
	
	switch ($i) {
		case 0:
			echo "i es igual a 0";
			break;
		case 1:
			echo "i es igual a 1";
			break;
		case 2:
			echo "i es igual a 2";
			break;
	}
	
	/* EJEMPLO 2: SWITCH */
	switch ($i) {
    case "manzana":
        echo "i es una manzana";
        break;
    case "barra":
        echo "i es una barra";
        break;
    case "pastel":
        echo "i es un pastel";
        break;
	}

/*
	Es importante entender cómo la sentencia switch es ejecutada con el fin de evitar errores. 
	La sentencia switch ejecuta línea por línea (en realidad, sentencia por sentencia). 
	Al principio, ningún código es ejecutado. Sólo cuando una sentencia case es encontrada con un valor que coincide 
	con el valor de la sentencia switch, PHP comienza a ejecutar la sentencias. PHP continúa ejecutando las sentencias hasta 
	el final del bloque switch, o hasta la primera vez que vea una sentencia break. 
	Si no se escribe una sentencia break al final de la lista de sentencias de un caso, 
	PHP seguirá ejecutando las sentencias del caso siguiente. 
	Por ejemplo: 
*/
	/* EJEMPLO 3 */
	switch ($i) {
    case 0:
        echo "i es igual a 0";
    case 1:
        echo "i es igual a 1";
    case 2:
        echo "i es igual a 2";
	}
	
/*
	Aquí, si $i es igual a 0, PHP ejecutaría todas las sentencias echo! Si $i es igual a 1, PHP ejecutaría las últimas dos sentencias echo. 
	Se obtendría el comportamiento esperado (se mostraría 'i es igual a 2') sólo si $i es igual a 2. 
	Por lo tanto, es importante no olvidar las sentencias break (aunque es posible que se desee evitar proporcionarlas a propósito bajo determinadas circunstancias).

	En una sentencia switch, la condición es evaluada sólo una vez y el resultado es comparado con cada una de las sentencias case. 
	En una sentencia elseif, la condición es evaluada otra vez. 
	Si la condición es más complicada que una simple comparación y/o está en un bucle estrecho, un switch puede ser más rápido.
	
	La lista de sentencias para un caso también puede estar vacía, lo cual simplemente pasa el control a la lista de sentencias para el siguiente caso. 
*/
	/* EJEMPLO 4 */
	switch ($i) {
		case 0:
		case 1:
		case 2:
			echo "i es menor que 3 pero no negativo";
			break;
		case 3:
			echo "i es 3";
	}
	
/*
	Un caso especial es el default. Este caso coincide con cualquier cosa que no se haya correspondido por los otros casos. Por ejemplo: 
*/
	/* EJEMPLO 5 */
	switch ($i) {
    case 0:
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
    default:
       echo "i no es igual a 0, 1 ni 2";
	}
	
/*
	La expresión case puede ser cualquier expresión que se evalúa como un tipo simple, es decir, 
	entero o números de punto flotante y strings. 
	Los arrays u objetos no se pueden utilizar aquí a menos que sean desreferenciados a un tipo simple. 
*/
	/* EJEMPLO 6 */
	switch ($i):
		case 0:
			echo "i es igual a 0";
			break;
		case 1:
			echo "i es igual a 1";
			break;
		case 2:
			echo "i es igual a 2";
			break;
		default:
			echo "i no es igual a 0, 1 ni 2";
	endswitch;

/*
	Es posible utilizar un punto y coma en lugar de dos puntos después de un caso como: 
*/
	/* EJEMPLO 7 */
	switch($beer)
	{
		case 'tuborg';
		case 'carlsberg';
		case 'heineken';
			echo 'Buena elección';
		break;
		default;
			echo 'Por favor haga una nueva selección...';
		break;
	}
	
/* REQUIRE - INCLUDE - REQUIRE_ONCE - INCLUDE_ONCE
	Estas estructuras de control están pensadas para empotrar código fuente de unos ficheros concretos en el fichero en curso.
	Esto es muy util a la hora de organizar y modularizar el código, pues permite no tener que escribir todo el código en un único fichero.
	Aunque las 4 estructuras se definen y comportan en líneas generales igual, tienen discrepancias a tener en cuenta:
		- require -> incluye un fichero cada vez que es llamado y, en caso de error, devuelve un error fatal y para la ejecución.
		- include -> incluye un fichero cada vez que es llamado como el anterior pero, en caso de error, devuelve solo una advertencia y no para la ejecución.
		- require_once -> Hace exactamente lo mismo que require, pero solo es cargado en memoria del servidor 1 vez y se mantiene. Provoca un mayor consumo de recursos al mantenerse,
		por lo que sólo deben incluirse así ficheros claves muy usados.
		- include_once -> Hace exactamente lo mismo que include, pero solo es cargado en memoria del servidor 1 vez y se mantiene. Provoca un mayor consumo de recursos al mantenerse,
		por lo que sólo deben incluirse así ficheros claves muy usados.
*/
	/* EJEMPLO 1 */
	require("funcionesIncluir.php");
	include("funcionesIncluir.php");
	require_once("funcionesIncluir.php");
	include_once("funcionesIncluir.php");
	
	// Esta variable está en el fichero llamado
	echo $incluidarequerida;
?>