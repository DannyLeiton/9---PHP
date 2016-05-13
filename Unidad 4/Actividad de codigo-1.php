<?php
$nombre = $_POST["nombre"];
if($nombre==""){
	print "<p>Error: no escribiste tu nombre</p>";
} else {
	print "<p>Bienvenido, $nombre, a nuestra página</p>";
}
$apellidos = $_POST["apellidos"];
if($apellidos==""){
	print "<p>Error: no escribiste tus apellidos</p>";
} else {
	print "<p>Bienvenido, $nombre $apellidos, a nuestra página</p>";
}
$edad = $_POST["edad"];
if($edad==""){
	print "<p>Error: Digita tu edad</p>";
} else {
	print "<p>Tu edad es: $edad</p>";
}
?>