<!DOCTYPE html>
<html>
<head>
	<title>While</title>
</head>
<body>
<?php
	$numero = 121;
	$binario = "";
	//echo $_POST['value'];
	do{
		$d = $numero%2;
		$binario = $d.$binario; 
		//Calcular nuevo valor de numero
		$numero = intval($numero/2);
	}while($numero >= 2);
	
	print"<p>$binario</p>";
?>
</body>
</html>