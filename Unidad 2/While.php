<!DOCTYPE html>
<html>
<head>
	<title>While</title>
</head>
<body>
<?php
	$dia = 5;
	while($dia >= 0){
		print"<p>$dia</p>";
		$dia--;
	}
	print "<p>fin</p>";

	$contador = 0;
	while($contador<10){
		print("<p>El valor de contador es $contador</p>");
		$contador++;
	}
	print "<p>fin</p>";
?>
</body>
</html>