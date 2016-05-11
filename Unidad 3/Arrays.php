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

	//

?>
</body>
</html>