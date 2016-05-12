<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>funciones</title>
</head>

<body>
<?php
function saludo($nombre){
	global $mensaje; //alcance global de la variable
	$cadena = "<p>Hola, $nombre, $mensaje</p>";	
	return $cadena;
}
$mensaje = "¿cómo estas hoy?";
print "1) ".saludo("James Bond");
print "2) ".saludo("Capitan Salchi");
print "3) ".saludo("Superwachi");
?>
</body>
</html>