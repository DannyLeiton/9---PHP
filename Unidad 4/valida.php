<?php
$error = $_GET["paginaError"];
$bandera = false;
if($error==""){
	$badera = true;
}
$nombre = $_GET["nombre"];
if($nombre==""){
	$badera = true;
}
$clave = $_GET["clave"];
if($clave==""){
	$badera = true;
}
$direccion = $_GET["direccion"];
if($direccion==""){
	$direccion = "Conocida";
} 
$nacionalidad = $_GET["nacionalidad"];
$estado = $_GET["estado"];
if(isset($_GET["pasatiempos"])==false){
	$badera = true;
}
if(isset($_GET["idiomas"])==false){
	$badera = true;
}
if($bandera){
	header("location:correcto.php");
	exit;
} else {
	header("location:$error.php");
	exit;
}
?>