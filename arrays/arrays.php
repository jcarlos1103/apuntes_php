<?PHP
/* ARRAYS
	Un array en PHP es realmente un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. 
	Este tipo es optimizado para varios usos diferentes; puede ser usado como:
		- una matriz real.
		- una lista (vector).
		- una tabla asociativa (una implementación de un mapa). 
		- diccionario. 
		- colección. 
		- pila. 
		- cola.
		- ..//.. 
	Los valores de un array pueden ser otros arrays, árboles y también son posibles arrays multidimensionales.
	Un array puede ser creado usando el constructor del lenguaje array(). Éste toma un cierto número de parejas clave => valor como argumentos.

		array(
		clave  => valor,
		clave2 => valor2,
		clave3 => valor3,
		...
		)

	La coma después del elemento del array es opcional y se puede omitir. 
	Esto normalmente se hace para arrays de una sola línea, esto es, es preferible array(1, 2) que array(1, 2, ). 
	Por otra parte, para arrays multilínea,la coma final se usa comnúnmente, ya que permite la adición sencilla de nuevos elementos al final. 
*/
	/* EJEMPLO 1 */
	$array = array(
		"foo" => "bar",
		"bar" => "foo",
	);

/*
La clave puede ser un integer o un string. El valor puede ser de cualquier tipo.
Además, los siguientes moldeados de tipo en la clave producirá:

    - Strings que contienen integers válidos serán moldeados a el tipo integer. P.e.j. la clave "8" en realidad será almacenada como 8. 
	  Por otro lado "08" no será convertido, ya que no es un número integer decimal válido.
    - Floats también serán moldeados en integers, lo que significa que la parte fraccionaria se elimina. 
	  P.e.j. la clave 8.7 en realidad será almacenada como 8.
    - Bools son moldeados a integers, también, p.e.j. la clave true en realidad será almacenada como 1 y la clave false como 0.
    - Null será moldeado a un string vacío, p.e.j. la clave null en realidad será almacenada como "".
    - Arrays y objects no pueden ser usados como claves. Si lo hace, dará lugar a una advertencia: Illegal offset type.

Si varios elementos en la declaración del array usan la misma clave, sólo la última será usada y los demás son sobrescritos. 
*/
	/* EJEMPLO 2*/
	$array = array(
		1    => "a",
		"1"  => "b",
		1.5  => "c",
		true => "d",
	);
	var_dump($array);

/*
	Como todas las claves en el ejemplo anterior se convierten en 1, los valores serán sobrescritos en cada nuevo elemento y el último valor asignado "d" es el único que queda.
	Los arrays PHP pueden contener claves integer y string al mismo tiempo ya que PHP no distingue entre arrays indexados y asociativos. 
*/
	/* EJEMPLO 3 */
	$array = array(
    	"foo" => "bar",
		"bar" => "foo",
		100   => -100,
		-100  => 100,
	);
	var_dump($array);
	
/*
	La clave es opcional. Si no se especifica, PHP usará el incremento de la clave integer más grande utilizada anteriormente. 
*/
	/* EJEMPLO 4 */
	$array = array("ANGEL", "CIFUENTES", "torres", "LoGiC");
	var_dump($array);
	// echo $array[1]; // Devuelve CIFUENTES
	
/*
	Es posible especificar la clave sólo para algunos de los elementos y dejar por fuera a los demás: 
*/
	/* EJEMPLO 5*/
	$array = array(
			 "a",
			 "b",
		6 => "c",
			 "d",
	);
	var_dump($array);
	// Seria como 1=>"a", 2=>"b", 6=>"c" y 7=>"d"
	
/* 
	Los elementos de array se pueden acceder utilizando la sintaxis array[key]. 
*/
	/* EJEMPLO 6 */
	$array = array(
		"foo" => "bar",
		42    => 24,
		"multi" => array(
			 "dimensional" => array(
				 "array" => "foo"
			 )
		)
	);
	// Llamadas a valores
	var_dump($array["foo"]);
	var_dump($array[42]);
	var_dump($array["multi"]["dimensional"]["array"]); //Podemos tener 4,5,6,n dimensiones en informática.

/*
	Un array existente puede ser modificado al definir valores explícitamente en éste.
	Esto se realiza mediante la asignación de valores al array, especificando la clave en corchetes. 
	La clave también se puede omitir, resultando en un par de corchetes vacíos ([]).
	
		$arr[clave] = valor;
		$arr[] = valor;
		// clave puede ser un integer o string
		// valor puede ser cualquier valor de cualquier tipo
	
	Si $arr aún no existe, se creará, así que esto es también una forma alternativa de crear un array. 
	Sin embargo, esta práctica es desaconsejada ya que si $arr ya contiene algún valor (p.ej. un string de una variable de petición), 
	entonces este valor estará en su lugar y [] puede significar realmente el operador de acceso a cadenas. 
	Siempre es mejor inicializar variables mediante una asignación directa.
	Para cambiar un valor determinado, se debe asignar un nuevo valor a ese elemento con su clave. 
	Para quitar un par clave/valor, se debe llamar la función unset() en éste. 
*/
	/* EJEMPLO 7 */
	$arr = array(5 => 1, 12 => 2);
	$arr[] = 56;    // Esto es lo mismo que $arr[13] = 56;
					// en este punto de el script
					
	$arr["x"] = 42; // Esto agrega un nuevo elemento a
					// el array con la clave "x"	
					
	unset($arr[5]); // Esto elimina el elemento del array
	unset($arr);    // Esto elimina el array completo

/*
	Como se mencionó anteriormente, si no se especifica una clave, se toma el máximo de los índices integer existentes, 
	y la nueva clave será ese valor máximo más 1 (aunque al menos 0). 
	Si todavía no existen índices integer, la clave será 0 (cero).
	Tenga en cuenta que la clave integer máxima utilizada para éste no es necesario que actualmente exista en el array. 
	Ésta sólo debe haber existido en el array en algún momento desde la última vez que el array fué re-indexado. 
*/
	/* EJEMPLO 8*/
	// Crear un array simple.
	$array = array(1, 2, 3, 4, 5);
	print_r($array);
	
	// Ahora elimina cada elemento, pero deja el mismo array intacto:
	foreach ($array as $i => $value) {
		unset($array[$i]);
	}
	print_r($array);
	
	// Agregar un elemento (note que la nueva clave es 5, en lugar de 0).
	$array[] = 6;
	print_r($array);
	
	// Re-indexar:
	$array = array_values($array);
	$array[] = 7;
	print_r($array);

/*
	Siempre deben usarse comillas alrededor de un índice de array tipo string literal. 
	Por ejemplo, $foo['bar'] es correcto, mientras que $foo[bar] no lo es. ¿Pero por qué? 
	Es común encontrar este tipo de sintaxis en scripts viejos: 
	
	$foo[bar] = 'No hacer esto';
	echo $foo[bar];
	// etc

	Esto está mal, pero funciona. La razón es que este código tiene una constante indefinida (bar) en lugar de un string ('bar' - observe las comillas). 
	Puede que en el futuro PHP defina constantes que, desafortunadamente para tales tipo de código, tengan el mismo nombre. 
	Funciona porque PHP automáticamente convierte un string puro (un string sin comillas que no corresponde con ningún símbolo conocido) 
	en un string que contiene el string puro. 
	Por ejemplo, si no se ha definido una constante llamada bar, entonces PHP reemplazará su valor por el string 'bar' y usará éste último. 
	Esto no quiere decir que siempre haya que usar comillas en la clave. 
	No use comillas con claves que sean constantes o variables, ya que en tal caso PHP no podrá interpretar sus valores. 
*/
	/* EJEMPLO 9*/
	error_reporting(E_ALL);
	ini_set('display_errors', true);
	ini_set('html_errors', false);
	// Array simple:
	$array = array(1, 2);
	$count = count($array);
	for ($i = 0; $i < $count; $i++) {
		echo "\nRevisando $i: \n";
		echo "Mal: " . $array['$i'] . "\n";
		echo "Bien: " . $array[$i] . "\n";
		echo "Mal: {$array['$i']}\n";
		echo "Bien: {$array[$i]}\n";
	}

	/* EJEMPLO 10 */
	// Mostrar todos los errores
	error_reporting(E_ALL);
	
	$arr = array('fruta' => 'manzana', 'vegetal' => 'zanahoria');
	
	// Correcto
	print $arr['fruta'];  	// manzana
	print $arr['vegetal']; 	// zanahoria
	
	// Incorrecto. Esto funciona pero también genera un error de PHP de
	// nivel E_NOTICE ya que no hay definida una constante llamada fruta
	//
	// Notice: Use of undefined constant fruta - assumed 'fruta' in...
	print $arr[fruta];    // manzana
	
	// Esto define una constante para demostrar lo que pasa. El valor 'vegetal'
	// es asignado a una constante llamada fruta.
	define('fruta', 'vegetal');
	
	// Note la diferencia ahora
	print $arr['fruta'];  // manzana
	print $arr[fruta];    // zanahoria
	
	// Lo siguiente está bien ya que se encuentra al interior de una cadena. Las constantes no son procesadas al 
	// interior de cadenas, así que no se produce un error E_NOTICE aquí
	print "Hola $arr[fruta]";      // Hola manzana
	
	// Con una excepción, los corchetes que rodean las matrices al
	// interior de cadenas permiten el uso de constantes
	print "Hola {$arr[fruta]}";    // Hola zanahoria
	print "Hola {$arr['fruta']}";  // Hola manzana
	
	// Esto no funciona, resulta en un error de intérprete como:
	// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
	// Esto por supuesto se aplica también al uso de superglobales en cadenas
	print "Hola $arr['fruta']";
	print "Hola $_GET['foo']";
	
	// La concatenación es otra opción
	print "Hola " . $arr['fruta']; // Hola manzana
	
	/* EJEMPLO 11: 	Uso de array() */

	// Array como mapa de propiedades
	$map = array( 'version'    => 4,
				  'OS'         => 'Linux',
				  'lang'       => 'english',
				  'short_tags' => true
				);
				
	// Keys estrictamente numéricas
	$array = array( 7,
					8,
					0,
					156,
					-10
				  );
	// esto es lo mismo que array(0 => 7, 1 => 8, ...)
	
	$switching = array(         10, // key = 0
						5    =>  6,
						3    =>  7,
						'a'  =>  4,
								11, // key = 6 (el índice entero máximo era 5)
						'8'  =>  2, // key = 8 (integer!)
						'02' => 77, // key = '02'
						0    => 12  // el valor 10 será reemplazado por 12
					  );
					  
	// array vacío
	$empty = array();  
	
	/* EJEMPLO 12: Colección */
	$colores = array('rojo', 'azul', 'verde', 'amarillo');

	foreach ($colores as $color) {
		echo "¿Le gusta el $color?\n";
	}

	/* EJEMPLO 13: Índice con base 1 */
	$primerTrimestre  = array(1 => 'Enero', 'Febrero', 'Marzo');
	print_r($primerTrimestre);
	
	/* EJEMPLO 14: Arrays recursivos y multi-dimensionales */
	$frutas = array ( 
				  "frutas"  => array ( "a" => "naranja",
                                       "b" => "plátano",
                                       "c" => "manzana"
                                     ),
                  "numeros" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "posiciones"   => array (      "primero",
                                       		5 => "segundo",
                                            	 "tercero"
                                	 )
                );

	// Algunos ejemplos que hacen referencia a los valores del array anterior
	echo $frutas["posiciones"][5];    // Devuelve "segundo"
	echo $frutas["frutas"]["a"]; 	  // Devuelve "naranja"
	unset($frutas["posiciones"][0]);  // Devuelve "primero"
	
	// Crear una nueva array multi-dimensional (podemos anidar tanto como queramos)
	$direccion["ciudad"]["barrio"]["calle"]["edificio"]["piso"]["puerta"] = "Mi casa";
	
	/* EJEMPLO 15: Copia y asignación */
	// La asignación de arrays siempre involucra la copia de valores. 
	// Use el operador de referencia para copiar un array por referencia. 
	$arr1 = array(2, 3);
	$arr2 = $arr1;
	$arr2[] = 4; // $arr2 ha cambiado,
				 // $arr1 sigue siendo array(2, 3)
				
	$arr3 = &$arr1;
	$arr3[] = 4; // ahora $arr1 y $arr3 son iguales

/* FUNCIONES DE ARRAYS - Escribirlas en nuestro Editor PHP para ver las entradas y salidas de datos
    array_change_key_case — Cambia a mayúsculas o minúsculas todas las claves en un array
    array_chunk — Divide un array en fragmentos
    array_column — Devuelve los valores de una única columna del array de entrada
    array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
    array_count_values — Cuenta todos los valores de un array
    array_diff_assoc — Calcula la diferencia entre arrays con un chequeo adicional de índices
    array_diff_key — Calcula la diferencia entre arrays usando las keys para la comparación
    array_diff_uassoc — Calcula la diferencia entre arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada suministrada por el usuario
    array_diff_ukey — Calcula la diferencia entre arrays usando una función de devolución de llamada en las keys para comparación
    array_diff — Calcula la diferencia entre arrays
    array_fill_keys — Llena un array con valores, especificando las keys
    array_fill — Llena un array con valores
    array_filter — Filtra elementos de un array usando una función de devolución de llamada
    array_flip — Intercambia todas las keys con sus valores asociados en un array
    array_intersect_assoc — Calcula la intersección de arrays con un chequeo adicional de índices
    array_intersect_key — Calcula la intersección de arrays usando las keys para la comparación
    array_intersect_uassoc — Calcula la intersección de arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada
    array_intersect_ukey — Calcula la intersección de arrays usando una función de devolución de llamada en las keys para la comparación
    array_intersect — Calcula la intersección de arrays
    array_key_exists — Verifica si el índice o clave dada existe en el array
    array_keys — Devuelve todas las claves de un array o un subconjunto de claves de un array
    array_map — Aplica la llamada de retorno especificada a los elementos de cada array
    array_merge_recursive — Une dos o más arrays recursivamente
    array_merge — Combina dos o más arrays
    array_multisort — Ordena múltiples arrays, o arrays multi-dimensionales
    array_pad — Rellena un array a la longitud especificada con un valor
    array_pop — Extrae el último elemento del final del array
    array_product — Calcula el producto de los valores de un array
    array_push — Inserta uno o más elementos al final de un array
    array_rand — Selecciona una o más entradas aleatorias de un array
    array_reduce — Reduce iterativamente una matriz a un solo valor usando una función llamada de retorno
    array_replace_recursive — Reemplaza los elementos de los arrays pasados al primer array de forma recursiva
    array_replace — Reemplaza los elementos de los arrays pasados en el primer array
    array_reverse — Devuelve un array con los elementos en orden inverso
    array_search — Busca un valor determinado en un array y devuelve la clave correspondiente en caso de éxito
    array_shift — Quita un elemento del principio del array
    array_slice — Extrae una parte de un array
    array_splice — Elimina una porción del array y la reemplaza con algo
    array_sum — Calcula la suma de los valores en un array
    array_udiff_assoc — Computa la diferencia entre arrays con una comprobación de indices adicional, compara la información mediante una función de llamada de retorno
    array_udiff_uassoc — Computa la diferencia entre arrays con una verificación de índices adicional, compara la información y los índices mediante una función de llamada de retorno
    array_udiff — Computa la diferencia entre arrays, usando una llamada de retorno para la comparación de datos
    array_uintersect_assoc — Computa la intersección de arrays con una comprobación de índices adicional, compara la información mediante una función de llamada de retorno
    array_uintersect_uassoc — Computa la intersección de arrays con una comprobación de índices adicional, compara la información y los índices mediante funciones de llamada de retorno
    array_uintersect — Computa una intersección de arrays, compara la información mediante una función de llamada de retorno
    array_unique — Elimina valores duplicados de un array
    array_unshift — Añadir al inicio de un array uno a más elementos
    array_values — Devuelve todos los valores de un array
    array_walk_recursive — Aplicar una función de usuario recursivamente a cada miembro de un array
    array_walk — Aplicar una función de usuario a cada miembro de un array
    array — Crea un array
    arsort — Ordena un array en orden inverso y mantiene la asociación de índices
    asort — Ordena un array y mantiene la asociación de índices
    compact — Crear un array que contiene variables y sus valores
    count — Cuenta todos los elementos de un array o en un objeto
    current — Devuelve el elemento actual en un array
    each — Devolver el par clave/valor actual de un array y avanzar el cursor del array
    end — Establece el puntero intero de un array a su último elemento
    extract — Importar variables a la tabla de símbolos actual desde un array
    in_array — Comprueba si un valor existe en un array usando comparación flexible
    key_exists — Alias de array_key_exists
    key — Obtiene una clave de un array
    krsort — Ordena un array por clave en orden inverso
    ksort — Ordena un array por clave
    list — Asigna variables como si fuera un array
    natcasesort — Ordenar un array usando un algoritmo de "orden natural" insensible a mayúsculas-minúsculas
    natsort — Ordena un array usando un algoritmo de "orden natural"
    next — Avanza el puntero interno de un array
    pos — Alias de current
    prev — Rebobina el puntero interno del array
    range — Crear un array que contiene un rango de elementos
    reset — Establece el puntero interno de un array a su primer elemento
    rsort — Ordena un array en orden inverso
    shuffle — Mezcla un array
    sizeof — Alias de count
    sort — Ordena un array
    uasort — Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices
    uksort — Ordena un array según sus claves usando una función de comparación definida por el usuario
    usort — Ordena un array según sus valores usando una función de comparación definida por el usuario
*/
	array_search("a",$frutas["frutas"]); //Busca si hay "a"
	ksort($arr); // Ordena por la Key
	count($arr1); // Cuenta los elementos del array

?>