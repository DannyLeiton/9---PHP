<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Actividad C09-U04-02</title>
<?php
function fecha($dia, $mes, $anio){
	$meses_array = array ( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	$dias_array = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	return "<p>Hoy es ".$dias_array[$dia]." 13 de ".$meses_array[$mes]." de ".$anio."</p>";
}
function saludo($nombre, $apellidos, $edad, $idioma){
	$cadena = "";
	if($idioma=="español"){
			$cadena = $espanol;
		}
		if($ingles=="inglés"){
			$cadena = $ingles;
		}
		if($frances=="francés"){
			$cadena = $frances;
		}
		//Nombre
		$cadena .=  ", ".$nombres." ".$apellidos;
		//Edad
		if($edad<50){
			$cadena .=  ", esperamos que esta página te sea de gran utilidad";
		} else {
			$cadena .=  ", tenemos una sección especial para ti";
		}
		switch($dia){
			case "lunes":
				$cadena .= "Este lunes tenemos un descuento de 20% en todos los productos.";
				break;
			case "martes":
				$cadena .= "Este martes, ni te cases ni te embarques.";
				break;
			case "miércoles":
				$cadena .= "Este miércoles, aprovecha nuestro 2x1.";
				break;
			case "jueves":
				$cadena .= "Este jueves te regalamos uno de nuestros libros de superación personal.";
				break;
			case "viernes":
				$cadena .= "Dia de fiesta.";
				break;
			case "sábado":
				$cadena .= "Todos a la playa.";
				break;
			case "domingo":
				$cadena .= "Hoy es día de descanso.";
				break;	
		}
	return $cadena;	
}
function parejas($parejas_array){
	print "<ul>";
	for($i=0; $i<count($parejas_array); $i++){
		print "<li>".$parejas_array[$i]."</li>";
	}
	print "</ul>";	
}
$perejas_array = array();
$meses_array = array ( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
$dias_array = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
array_push($perejas_array, "Vilma");
array_push($perejas_array, "Betty");
array_push($perejas_array, "Marge Bouvier");
array_push($perejas_array, "Wendy");
array_push($perejas_array, "Blanca Nieves");
array_push($perejas_array, "Caperucita Roja");
unset($parejas_array[2]);
sort($parejas_array);
$dia = 5;
$mes = 1;
$idioma = "español";
$espanol = "Buenos días";
$ingles = "Good morning";
$frances = "Bonjour";
$edad = $_POST["edad"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
if($edad<18){
	print "Lo sentimos, no puedes tener acceso a esta página";
} else {
	print fecha($dia, $mes, "2015");
	//Saludos
	print saludo($nombre, $apellidos, $edad, $idioma);
	//Imprime parejas
	parejas($parejas_array);
}
?>
</head>

<body>
</body>
</html>