<!DOCTYPE html>
<html>
<head>
	<title>Conditionals</title>
</head>
<body>
<?php
	$edad = 15;
	if($edad >= 18){
		echo "<p>Welcome</p>";
	}
	else if($edad == 15){
		echo "<p>You rock!</p>";
	}
	else{
		echo "<p>Access denied because of your age: $edad</p>";
	}
?>
</body>
</html>