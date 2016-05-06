<!DOCTYPE html>
<html>
<head>
	<title>Logic Ops</title>
</head>
<body>
<?php
	$edad = 15;
	/*if($edad >= 18 || $edad == 15){
		echo "<p>Welcome</p>";
	} //Me parece q no hay diferencia entre & &&, || |
	else*/ if($edad == "15" & $edad === "15"){
		echo "<p>You rock!</p>";
	}
	else{
		echo "<p>Access denied because of your age: $edad</p>";
	}

	if($edad == 15){
		echo "<p>But your age is not a string -.-'</p>";
	}

	if($edad !== "15"){
		echo "<p>Chunche approved</p>";
	}
?>
</body>
</html>