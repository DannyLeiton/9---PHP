<!DOCTYPE html>
<html>
<head>
	<title>Conditional Operator</title>
</head>
<body>
<?php
	$monto = 1003;
	$tipoCambio = 535;
	$total = ($tipoCambio>0)? $monto * $tipoCambio : $monto;
	$cadena = ($tipoCambio>0)? ", tipo de cambio $tipoCambio " : "";
	print "$monto $total.$cadena";
?>
</body>
</html>