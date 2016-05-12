<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Valida</title>
</head>

<body>
<?php
$nombre = $_GET["nombre"];
if($nombre==""){
	print "<p>Error: no escribiste tu nombre</p>";
} else {
	print "<p>Bienvenido, $nombre, a nuestra página</p>";
}
$clave = $_GET["clave"];
if($clave==""){
	print "<p>Error: no escribiste tu clave de acceso</p>";
} else {
	if($clave=="007"){
		print "<p>Tu nueva misión, fue enviada por mail...</p>";	
	} else {
		print "<p>Lo sentimos, no tienes ninguna misión asignada</p>";
	}
}
$direccion = $_GET["direccion"];
if($direccion==""){
	$direccion = "Conocida";
} 
print "<p>Tu dirección es: $direccion</p>";
$nacionalidad = $_GET["nacionalidad"];
$estado = $_GET["estado"];
print "<p>Tu nacionalida es: $nacionalidad</p>";
print "<p>Tu estado civil es: $estado</p>";
//Valores multiples
if(isset($_GET["pasatiempos"])){
	$pasatiempos = $_GET["pasatiempos"];
	$numPasatiempos = count($pasatiempos);
	print "<p>El número de pasatiempos que tienes: $numPasatiempos</p>";
	print "<ol>";
	foreach($pasatiempos as $pasatiempo){
		print "<li>$pasatiempo</li>";
	}
	print "</ol>";
} else {
	print "<p>Error: Necesitamos que nos indiques al menos uno de tus pasa tiempos</p>";
}
if(isset($_GET["idiomas"])){
	$idiomas = $_GET["idiomas"];
	//
	$numIdiomas = count($idiomas);
	print "<p>El número de idiomas que hablas es: $numIdiomas</p>";
	print "<ol>";
	foreach($idiomas as $idioma){
		print "<li>$idioma</li>";
	}
	print "</ol>";
} else {
	print "<p>¿A caso no hablas ningun idioma?</p>";
}
?>
</body>
</html>