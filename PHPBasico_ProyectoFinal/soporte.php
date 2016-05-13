<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Soporte técnico</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<?php
$texto = array();
array_push($texto,"<h3>URANO</h3>");
array_push($texto,"<p>En la mitología clásica, Urano es el dios primordial del cielo. En la mitología griega era personificado como hijo y esposo de Gea, la Madre Tierra. Ambos fueron ancestros de la mayoría de los dioses griegos, pero ningún culto dirigido directamente a Urano sobrevivió hasta la época clásica,1 y el dios no aparece entre los temas comunes de la cerámica griega antigua. Sin embargo, la Tierra, el Cielo y Estigia podían unirse en una solemne invocación en la épica homérica.</p>");
array_push($texto,"<h3>GEA</h3>");
array_push($texto,"<p>La Teogonía de Hesíodo cuenta cómo, tras el Caos, surgió Gea «la de amplio pecho», la eterna fundación de los dioses del Olimpo. De su propio ser, «sin mediar el grato comercio», trajo a Urano, el cielo estrellado, su igual, para cubrirla a ella y a las colinas, y también a Ponto, la infructuosa profundidad del mar. Pero tras esto, como cuenta Hesíodo:</p>");
array_push($texto,"<h3>CRONOS</h3>");
array_push($texto,"<p>En la mitología griega, Crono o Cronos era el líder y —en algunos mitos— el más joven de la primera generación de Titanes, descendientes divinos de Gea, la tierra, y Urano, el cielo. Crono derrocó a su padre y gobernó durante la mitológica edad dorada, hasta que fue derrocado por sus propios hijos, Zeus, Hades y Poseidón, y encerrado en el Tártaro o enviado a gobernar el paraíso de los Campos Elíseos.</p>");
array_push($texto,"<h3>REA</h3>");
array_push($texto,"<p>En la mitología griega, la titánide Rea era hija de Urano y Gea, hermana y esposa de Crono, y madre con éste de Deméter, Hades, Hera, Hestia, Poseidón y Zeus. Estaba fuertemente asociada a Cibeles, tanto que en obras de arte solía ser representada en un carro tirado por dos leones, y no siempre era posible distinguirlas. En la mitología romana, fue la Magna Mater deorum Idaea y se la identificaba con Ops. Según Hesíodo fue nodriza de Dioniso. En la Antología Palatina se la menciona como nodriza de fieras y leones.</p>");
//1. Verificar la variable "buscar" con el método POST
if(isset($_POST['buscar'])){
	//2. Vaciar el contenido a la variable $buscar
	$buscar = $_POST['buscar'];
	//3. Verificar si la cadena $buscar no está vacía
	if($buscar != ""){
		//4. Llamar a la función buscaPalabras()
        buscaPalabras($buscar);
    }
}	
//5. La función buscaPalabras tiene como parámetro $busca
function buscaPalabras($busca){
	//6. Hacer global el arreglo $texto
	global $texto;
	//7. Hacer un ciclo de 0 al número de elementos del arreglo $texto
	foreach($texto as $text){
		//8. Variable "enunciado"
		$enunciado = strtolower($text);
		//9. Variable busca
		$busca = strtolower($busca);
		//10. Busca la variable "busca" en el "enunciado"
		if(strstr($enunciado, $busca)){
			//11. Si no lo encuentra, marca el elemento del arreglo
            $text = "***";
        }
    }
}
?>
</head>

<body>
<header>
  <div class="encabezado">
		<div class="encabezado01">
        	<ul class="menu01" >
                <li><a href="callCenter.php">Call Center</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
		</div>
   		<div class="encabezado02">
			<div class="companias">
                <img class="imagen" src="img/compania01.png" width="183" height="30" alt="compañia 1" />
                <img class="imagen" src="img/compania02.png" width="72" height="30" alt="compañia 2" />
                <a href="ofertas.php" class="texto">OFERTAS ESPECIALES</a>
           	</div>  
            <div class="bolsa">
                <div class="titulo">Compras</div>
                <div class="imagen">
                	<div class="numero">0</div>
                    <div class="texto">Finalizar Compra</div>
               </div>
           	</div>
            <div class="telefonica"></div> 
    	</div>
	<div class="encabezado03">
    		<div class="Menu">
                <ul class="Menu" >
                    <li><a href="pintura.php">Pinturas</a></li>
                    <li><a href="pintura.php">Alfarería</a></li>
                    <li><a href="pintura.php">Esculturas</a></li>
                    <li><a href="pintura.php">Viajes a Grecia</a></li>
                </ul>
            </div>
            <div class="Search">
            	<div class="texto">
                Buscar...
                </div>
                <div class="Button"><a HREF="#"></a></div>
            </div>
   	  </div>
	</div>
</header>

<section>
<!-------- 	CONTENT --------->
<article>
	<div id="co-caja">
    <div id="co-titulo"><h1>Soporte técnico</h1></div>
    <div id="av-texto">
    <br>
    <p>Busca en nuestra base de conocimientos:</p>
    	<form action="soporte.php" method="post">
        <input name="buscar" id="buscar" placeholder="Buscar..." type="text">
        <input type="submit" value="Buscar">
        </form>
        <?php
		for($i=0; $i<count($texto); $i++){
			if($texto[$i]!="***"){
				print $texto[$i];
			}
		}
		?>
        
  	</div>
  </div>
</article>
</section>
<!-------- FOOTER ------------>
<footer>
	<div class="pie">
        <div class="pie01">
            <div class="columna">
            	<div class="columnaTitulo">Siguenos</div>
                <ul class="Menu" >
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Foursquere</a></li>
                    <li><a href="#">Google+</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Quienes somos</div>
                <ul class="Menu" >
                    <li><a href="empresa.php">Nuestra Empresa</a></li>
                    <li><a href="equipo.php">Equipo de Trabajo</a></li>
                    <li><a href="socios.php">Paises Socios</a></li>
                    <li><a href="afiliadas.php">Empresas Afiliadas</a></li>
                    <li><a href="aviso.php">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Servicios</div>
                <ul class="Menu" >
                    <li><a href="soporte.php">Soporte</a></li>
                    <li><a href="informacion.php">Información</a></li>
                    <li><a href="politicas.php">Politicas Devolución</a></li>
                    <li><a href="fqa.php">FQA</a></li>
                    <li><a href="contacto.php">Envíanos un mail</a></li>
                </ul>
            </div>
            <div class="columna">
            	<div class="columnaTitulo">Localizar</div>
                <ul class="Menu" >
                    <li><a href="tiendas.php">Localizar tiendas</a></li>
                    <li><a href="oficinas.php">Localizar oficinas</a></li>
                    <li><a href="callCenter.php">Localizar Call Center</a></li>
                </ul>
            </div>
             <div class="columna">
            	<img src="img/logo.png" width="153" height="52" alt="logo"  align="right"/> </div>
      		</div>
        <div class="pie02">
        </div>
	 </div>
</footer>
</body>
</html>
