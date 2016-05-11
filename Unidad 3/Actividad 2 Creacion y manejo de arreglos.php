<!DOCTYPE html>
<html>
<head>
	<title>PHP Arrays</title>
</head>
<body>
<?php
	//Constantes
    define("TASA_CAMBIO", 535);
    print("la tasa de cambio es ".TASA_CAMBIO);

	echo "<p>Welcome Losers!</p>";

	//Arreglos Asociativos
	$couples = array("Dante Y Raquel", 
					 "Dario Y Rosa");

	print "<p>Couple $couples[0], $couples[1]</p>";

	print("<ul> Couples");
	foreach ($couples as $key => $value) {
		print "<li>$key = $value</li>";
	}
	print("</ul>");

?>
</body>
</html>