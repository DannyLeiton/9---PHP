<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mensaje de compra</title>
<link rel="stylesheet" type="text/css" href="css/Style.css"  />
<link rel="stylesheet" type="text/css" href="css/carrito.css"  />
<script src="js/funciones.js" type="text/javascript"></script>
<script>
window.onload = function(){
	var envia = document.getElementById("continuar");
	envia.onclick = function(){
		location.href = "index.html";
	}
}
</script>
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

<!-------- 	CONTENT --------->
<section>
    <div id="ca-content">
   	  <div id="ca-mensaje">
      <p>Gracias por su compra, su registro es el XXXXXXXXXX</p>
      <p><script> document.write(fechaHoy()); </script></p>
      <button id="continuar">Continuar >></button>
      </div>
       <div id="ca-datos">
       <p>Métodos de pago: Pay Pal</p>
       <p>Nombre: xxxxxx xxxxxx xxxxxxx xxxxxxxx</p>
       <p>Empresa: xxxxxx xxxxxx xxxxxxx xxxxxxxx</p>
       <p>Dirección: xxxxxx xxxxxx xxxxxxx xxxxxxxx</p>
       <p>Código Postal: xxxxxx </p>
       </div>  
      <div id="ca-detalle">
        <table width="100%">
        	<tr>
            	<th width="100">Producto</th>
                <th width="568">Descripción</th>
                <th width="87">Precio</th>
                <th width="58">Cant.</th>
                <th width="99">Subtotal</th>
                <th width="64">Borrar</th>
            </tr>
            <tr>
            	<td height="161">
                <img src="img/producto.png" width="105" height="143" alt="Atenea">
                </td>
                <td>
                <p class="ca-descripcion">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </td>
                <td class="ca-precio">$9,999.00</td>
                <td class="ca-cant">1</td>
                <td class="ca-subtotal">$9,999.00</td>
                <td class="ca-cant">Borrar</td>
            </tr>
        </table>
        <hr>
        <table width="100%">
        	<tr>
        	  <td></td>
        	  <td width="113" class="ca-precio">Subtotal:</td>
        	  <td class="ca-precio"> $9,999.00</td>
      	  </tr>
        	<tr>
        	  <td></td>
        	  <td class="ca-precio">Descuento:</td>
        	  <td class="ca-precio">$0.00</td>
      	  </tr>
        	<tr>
        	  <td></td>
        	  <td class="ca-precio">Costo de envío:</td>
        	  <td class="ca-precio"> $0.00</td>
      	  </tr>
          <tr>
        	  <td></td>
        	  <td class="ca-precio">Gran total:</td>
        	  <td class="ca-precio"> $9,999.00</td>
      	  </tr>
          <tr>
            	<th width="781" class="ca-precio"><button>Seguir comprando</button></th>
                <th class="ca-precio"><button>Actualizar carrito</button></th>
                <th width="90" class="ca-cant"><button>Pagar</button></th>
            </tr>
        </table>
      </div>      
  </div>
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
