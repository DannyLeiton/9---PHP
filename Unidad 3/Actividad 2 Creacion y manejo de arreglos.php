<!DOCTYPE html>
<html>
<head>
	<title>PHP Server Date</title>
</head>
<body>
<?php
	echo "<p>Random Server date!</p>";

	$days = array('1'=>'Mon',
				  '2'=>'Tue',
				  '3'=>'Wed',
				  '4'=>'Thu',
				  '5'=>'Fri');

	$months = array('1'=>'Jan',
				    '2'=>'Feb',
				    '3'=>'Mar',
				    '4'=>'Apr',
				    '5'=>'May',
				    '6'=>'Jun',
				    '7'=>'Jul',
				    '8'=>'Aug',
				    '9'=>'Sep',
				    '10'=>'Oct',
				    '11'=>'Nov',
				    '12'=>'Dic');

	$years = array('1'=>'2000',
				   '2'=>'2001',
				   '3'=>'2002',
				   '4'=>'2003',
				   '5'=>'2004',
				   '6'=>'2005',
				   '7'=>'2006',
				   '8'=>'2007',
				   '9'=>'2008',
				   '10'=>'2009');

	$day = rand(1, 31);

	$month = $months[array_rand($months, 1)];

	$year = $years[array_rand($years, 1)];

	print "<p>It's $month, $day, $year </p>";

?>
</body>
</html>