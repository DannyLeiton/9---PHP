<!DOCTYPE html>
<html>
<head>
	<title>Leccion 1 Sentencias condicionales</title>
</head>
<body>
<?php
	$espanol = "Bienvenido";
	$ingles = "Welcome";
	$aleman = "Willkommen";
	$idioma = "aleman";
	
	echo "<p>El idioma seleccionado es $idioma, por lo tanto el saludo es: ${$idioma}</p>";
	
	switch ($idioma) {
		case 'espanol':
			print($espanol);
			break;
		case 'ingles':
			print($ingles);
			break;
		default:
			print($aleman);
			break;
	}

	print('<br>');

	$edad = 50;

	if($edad < 18){
		print "Todavía no preña";
	}
	else if($edad >= 18 && $edad < 50){
		print "YP";
	}
	else{
		print "Ya no preña";
	}
?>
</body>
</html>