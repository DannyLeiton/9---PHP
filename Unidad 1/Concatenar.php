<!DOCTYPE html>
<html>
<head>
	<title>Variables</title>
</head>
<body>
<p>Geldreich WillKommen</p>
<?php
/*64+ chars para variables
Inicia con $
No funny chars
nospace
caseSensitive
*/
	$letra123_myVar = '';

/*Notacion hungara array meses*/
$aMonths = [1, 2, 3, 4, 5];
print($aMonths[2]);
print('<br>');
/*Print y echo hacen lo mismo*/
echo $aMonths[3];
print('<br>');
/*Tipos de datos primitivos:
string "" ''
int 12   -52
double 100.50
bools true false
*/
$name = 'Carlo';
$last = "Magno";
$age = 30;
$income = 11525.55;
$debt = -5000;
$single = true;

print $name.$last;

print "<br>Complete name is: $name $last Junior<br>";

print("<br>Complete name is: \"$name $last Junior\"<br>");

echo ("<br>Complete name is: \"$$name $$last Junior\"<br>");


?>
</body>
</html>