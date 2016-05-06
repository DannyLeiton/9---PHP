<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
<?php
	$dia = 5;
	switch($dia){
		case 1:
			$mensaje = "Good Mondays";
			break;
		case 2:
			$mensaje = "Sweet Tuesdays";
			break;
		case 3:
			$mensaje = "Well Wednesdays";
			break;
		case 4:
			$mensaje = "Party Thursdays";
			break;
		case 5:
			$mensaje = "Wild Fridays";
			break;
		case 6:
		case 7:
			$mensaje = "Weekend, party!";
			break;
	}
	print "<p>$mensaje</p>";
?>
</body>
</html>