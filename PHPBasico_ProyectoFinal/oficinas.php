<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Localizar Oficinas</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/aviso.css"  />
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
    <div id="co-titulo"><h1>Localizar Oficinas</h1></div>
    <div id="av-texto">
    	<script>
			function cargaXML(archivo){
				if(window.XMLHttpRequest){
					xhttp = new XMLHttpRequest();
				} else {
					xhttp = new ActiveXObject("Microsoft.XMLHTTP")
				}
				xhttp.open("GET",archivo,false);
				try{xhttp.responseType="msxml-document"}
				catch(err) {};
				xhttp.send("");
				return xhttp;
			}
			//
			var x = cargaXML("xml/oficinas.xml");
			var xml = x.responseXML;
			var path = "//oficina/*";
			//
			if(window.XMLHttpRequest){
				var oficinas = xml.evaluate(path, xml, null, XPathResult.ANY_TYPE, null);
				//
				var oficina = oficinas.iterateNext();
				while(oficina){
					//
					num = oficina.childNodes[0].nodeValue;
					oficina = oficinas.iterateNext();
					//
					calle = oficina.childNodes[0].nodeValue;
					oficina = oficinas.iterateNext();
					//
					ciudad = oficina.childNodes[0].nodeValue;
					oficina = oficinas.iterateNext();
					//
					estado = oficina.childNodes[0].nodeValue;
					oficina = oficinas.iterateNext();
					//
					telefono = oficina.childNodes[0].nodeValue;
					oficina = oficinas.iterateNext();
					//
					mapa = oficina.childNodes[0].nodeValue;
					oficina = oficinas.iterateNext();
					//
					opcion = num+" ("+calle+ciudad+" "+estado+") "+telefono;
					//
					document.write("<br>");
					document.write("Oficina: "+ciudad+", "+estado+"<br>");	
					document.write("Dirección: "+calle+"<br>");
					document.write("Teléfono: "+telefono+"<br>");
					document.write("<a href='mapa.html?num="+num+"'>Mapa</a><br>");
					document.write("<br><hr>");
				}
			} else {
				xml.setProperty("SelectionLanguage","XPath");
				libros = xml.selectNodes(path);
				for(i=0; i<libros.leght; i++){
					document.write(libros[i].childNodes[0].nodeValue);	
					document.write("<br>");
				}
			}
		</script>
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
