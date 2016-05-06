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
*/	$letra123_myVar = '';
/*Notacion hungara array meses*/
$aMonths = [1, 2, 3, 4, 5];
//print($aMonths[2]);
//print('<br>');
/*Print y echo hacen lo mismo*/
//echo $aMonths[3];
//print('<br>');
/*Tipos de datos primitivos:
string "" ''
int 12   -52
double 100.50
bools true false
*/
$name = 'Carlo';
$last = "Magno";
$age = 30;
$year = "2016";
$income = 11525.55;
$debt = -5000;
$single = true;
/*print $name.$last;
print "<br>Complete name is: $name $last Junior<br>";
print("<br>Complete name is: \"$name $last Junior\"<br>");
echo ("<br>Complete name is: \"$$name $$last Junior\"<br>");
//Add number + string = number => hace conversion de string a number
print $age + $year;
print('<br>');
//Minus number - string = number => hace conversion de string a number
print $age - $year;
print('<br>');
//Multiply number * string = number => hace conversion de string a number
print $age * $year;
print('<br>');
//Divide number / string = number => hace conversion de string a number
print $age / $year;
print('<br>');
//Modulus number % string = number => hace conversion de string a number
print $age % $year;
print('<br>');
print 4 + 3 * 5;
print('<br>');
print (4 + 3) * 5;
print('<br>');
print $age += 5;
print('<br>');
print $age += 5;
print('<br>');
print $age++;
print('<br>');
print ++$age;
print('<br>');*/

//Variables dinamicas
$df = 22000000;
$guadalajara = 4000000;
$monterrey = 1400000;
$ciudad = 'df';

echo "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} hab</p>";

$ciudad = 'guadalajara';

echo "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} hab</p>";

$ciudad = 'monterrey';

echo "<p>La poblacion de la ciudad $ciudad es de ${$ciudad} hab</p>";
//Liberar memoria borrando una var
//unset($debt);
print "$debt USD <br>"; 
//Constantes
define("TASA_CAMBIO", 535);

print("Your debt in colones is: ".($debt*TASA_CAMBIO)." CRC");

?>
</body>
</html>