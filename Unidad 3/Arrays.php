<!DOCTYPE html>
<html>
<head>
	<title>PHP Arrays</title>
</head>
<body>
<?php
	//Constantes
    define("TASA_CAMBIO", 535);

	echo "<p>Some arrays</p>";

	$array = [1, 2, 3, 4];
	$array1[] = "Lunes";
	$array1[] = "Martes";
	$array1[] = "Miercoles";
	$array2 = array("Ene", "Feb", "Mar", "Abr", "May", "Jun");   
	$array1[] = "Lunes";
	$array1[] = "Martes";
	$array1[] = "Miercoles";
	print "<ul>";
	foreach ($array as $key => $value) {
		print "<li>$key</li>";
	}
	print "</ul>";
	print "<ol>";
	foreach ($array1 as $key => $value) {
		print "<li>$value</li>";
	}
	print "</ol>";
	print "<ul>";
	foreach ($array2 as $mes) {
		print "<li>$mes</li>";
	}
	print "</ul>";
	print("<p>Cantidad1 ".count($array)."</p>");
	print("<p>Cantidad2 ".count($array1)."</p>");
	print("<p>Cantidad3 ".count($array2)."</p>");

	/*funciones de los arreglos revisar php.net.*/
	//sort
	sort($array2);

	foreach ($array2 as $mes) {
		print "<li>$mes</li>";
	}

	//Merge
	
	$mesesDias = array_merge($array1, $array2);

	foreach ($mesesDias as $mes) {
		print "<li>$mes</li>";
	}

	//Push
	$numElementsArray = array_push($array, "element1", "element2");

	//Tambien sirve
	//array_push($array, "element3", "element2");

	foreach ($array as $ele) {
		print "<li>$ele</li>";
	}

	print "<p>$numElementsArray</p>";

	//Eliminar unset
	$baja = $array[2];
	//Borra todo el array
	//unset($array);

	//Borra un elemento del array
	unset($array[2]);

	print("Elemento eliminado: $baja"); 

	try{
		foreach ($array as $ele) {
			print "<li>$ele</li>";
		}
	} catch(Exception $e){
		echo $e->getMessage();
	}

	foreach ($array2 as $ele) {
			print "<li>$ele</li>";
		}
	//Busqueda #t #f
	$find = "Ene";
	$success = in_array($find, $array2);

	if($success){
		print "<p>$find existe</p>";
	}
	else{
		print "<p>$find no existe</p>";
	}

	//sorting
	print("Regular sort");
	$frutas = array("Naranja1", "naranja2", "Naranja3", "naranja20", "Naranja100");
	sort($frutas);
	foreach ($frutas as $ele) {
			print "<li>$ele</li>";
	}
	print("<br>Natural sort");
	                     //flags
	sort($frutas, SORT_NATURAL | SORT_FLAG_CASE);
	foreach ($frutas as $ele) {
			print "<li>$ele</li>";
	}

	//Arreglos Asociativos
	$alumno = array(
				"nombre"=>"Danny",
				"apellido"=>"Leiton",
				"edad"=>25,
				"promedio"=>10
			);

	print "<p>El alumno se llama $alumno[nombre], $alumno[apellido], tiene $alumno[edad] anios</p> y un promedio de $alumno[promedio]";

	print("<ul>");
	foreach ($alumno as $key => $value) {
		print "<li>$key = $value</li>";
	}
	print("</ul>");
	//ordena por valor
	asort($alumno);
	print("<ul>");
	foreach ($alumno as $key => $value) {
		print "<li>$key = $value</li>";
	}
	print("</ul>");

	sort($alumno);
	print("<ul>");
	foreach ($alumno as $key => $value) {
		print "<li>$key = $value</li>";
	}
	print("</ul>");

?>
</body>
</html>