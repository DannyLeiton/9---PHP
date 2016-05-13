<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Localizar las tiendas</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
<script src="js/jquery.js"></script>
<script>
$(document).ready(function(){
	$(".mapa").mouseover(function(e){
		var num = $(this).attr("data-num");
		//
		if(num=="01"){
			$('#cuadro').html("<img src='img/mapa01.png' height='200px'>Estamos frente de la Comercial Mexicana, entrando por la calle de Uruguay. Estacionamiento propio. Abierto las 24 hrs.");
		}
		if(num=="02"){
			$('#cuadro').html("<img src='img/mapa01.png' height='200px'>Enfrente de la escuela Copán, antes del puente. De 6AM a 12PM.");
		}
		if(num=="03"){
			$('#cuadro').html("<img src='img/mapa01.png' height='200px'>A un lado de la Minerva. La mejor birria del mundo. Abierto las 24 hrs.");
		}
		//
		//1) cuadro inicial
		$('#cuadro').css({'display':'block','opacity':0}).animate({opacity:1},200);
	});
	$(".mapa").mouseout(function(e){
		//2) Desaparece el cuadro
		$("#cuadro").animate({opacity:0},500).css({display:'none'});
	});
	$(".mapa").mousemove(function(e){
		//3) Recupera las coordenadas
		var x = e.pageX - 150;
		var y = e.pageY + 20;
		//4) Despliega el cuadro a left
		$("#cuadro").css("left",x+"px");
		//5) Despliega el cuadro a top
		$("#cuadro").css("top",y+"px");
	});
	
});
</script>
<style>
/***** Estilos de los tooltips ***/
#cuadro{
	width:400px;
	height:auto;
	border-radius:15px;
	-moz-border-radius:15px;
	-webkit-border-radius:15px;
	background-color:gray;
	text-align:justify;
	padding:15px;
	display:none;
	position:absolute;
	color:white;
	font-size:1em;	
}
#cuadro img{
	float:left;
	margin-right:10px;
}
</style>
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
            	<div class="texto">Buscar...</div>
                <div class="Button"><a HREF="#"></a></div>
            </div>
   	  </div>
	</div>
</header>

<section>
<!-------- 	CONTENT --------->
<article>
	<div id="co-caja">
    <div id="co-titulo"><h1>Localizar las tiendas</h1></div>
    <div id="av-texto">
        <script>
			if(window.XMLHttpRequest){
				//Navegador moderno
				xhttp = new XMLHttpRequest();
			} else {
				//IE 5-6
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			//Lee archivo 
			xhttp.open("GET","xml/tiendas02.xml",false);
			xhttp.send();
			xmlDoc = xhttp.responseXML;
			//
			var tiendas = xmlDoc.documentElement.childNodes;
			
			for(i=0; i<tiendas.length; i++){
				if(tiendas[i].nodeType==1){
				//
				tienda = tiendas[i].childNodes;
				//
				num = tienda[1].childNodes[0].nodeValue;
				calle = tienda[3].childNodes[0].nodeValue;
				ciudad = tienda[5].childNodes[0].nodeValue;
				estado = tienda[7].childNodes[0].nodeValue;
				telefono = tienda[9].childNodes[0].nodeValue;
				mapa = tienda[11].childNodes[0].nodeValue;
				//
				document.write("<br>");
				document.write("Tienda número: "+num+"<br>");	
				document.write("Dirección: "+calle+", "+ciudad+", "+estado+"<br>");
				document.write("Teléfono: "+telefono+"<br>");
				document.write("<a href='#' class='mapa' data-num='"+num+"'>Mapa</a><br>");
				document.write("<br><hr>");
				}
			}
			</script>
            <div id="cuadro"></div>
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
