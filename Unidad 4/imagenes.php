<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Imagenes de los dioses griegos</title>
</head>

<body>
<?php
$dios = $_GET["dios"];
$path = "imagenes/";
$dioses = array("","afrodita", "atenea", "hades", "poseidon", "zeus");
$archivo = $path.$dioses[$dios].".jpg";
?>
<img src="<?php print $archivo; ?>" /><p><?php print $dioses[$dios]; ?></p>
</body>
</html>