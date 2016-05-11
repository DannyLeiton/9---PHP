<!DOCTYPE html>
<html>
<head>
	<title>For</title>
</head>
<body>
<?php
	//For con 2 indices
	for($i = 10, $j = 15; $i>0; $i--, $j-=.4231){
		print("<p>Valor $i y valor de $j</p>");
	}

	// Break y Continue
	print('<p>Break</p>');
	$element = 10;
	for($i; $i<$element;$i++){
		if($i == 7){
			print('<p>break</p>');
			break;
		}
		print("<p>Indice: $i</p>");
	}

	print('<p>Continue</p>');
	for($j=0; $j<$element; $j++){
		if($j%2==1){
			continue;
		}
		print("<p>Indice: $j</p>");
	}
?>
</body>
</html>