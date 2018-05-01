
<?php
	$destino="fabaguilar205@gmail.com";
	$telefono=$_POST["telefono"];
	$mensaje=$_POST["mensaje"];
	
	$contenido = "Telefono: " . $telefono . "\nMensaje: " . $mensaje . " ";
	mail($destino, "Contacto", utf8_decode($contenido));
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, initial_scale=1, maximun-scale=1, minimum-scale=1">
<title>Nobasys | Contacto</title>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '592664b0c7e1f2261630056765a7d18484e8e8d9';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
	<link rel="stylesheet" type="text/css" href="../css/reset.css" media="all" />
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/estilos.css">
           
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!--<script src="js/main.js"></script>-->
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116954886-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116954886-1');
</script>
  		
</head>
<body>	
	<header>
    	<div class="contenedor">
    		<div class="logo">
        		<img src="../images/NobaSysFinalColor2.png" alt="logo"/>
        	</div>
        	<input type="checkbox" id="icon-menu">
            <label class="icon-menu" for="icon-menu"></label>

            <nav class="menu">
            	<ul>
            		<li><a href="../index.html">Inicio</a></li>
                	<li class="submenu"><a href="#">Servicios Informáticos<span class="icon-down-open"></span></a>
                <ul>
                	<li><a href="../html/desarrollo-de-software.html">Desarrollo de software</a></li>
                    <li><a href="../html/mantenimiento-informatico.html">Mantenimiento informático</a></li>
                    <!--<li><a href="diseño_grafico.html">Diseño gráfico</a></li>-->
                    <li><a href="../html/consultoria-informatica.html">Consultoría informática</a></li>
                    
                    <!--<li><a href="moviles_multi.html">Móviles y multimedia</a></li>               -->
                </ul>
                </li>
                
                <li><a href="#">Desarrollo Web<span class="icon-down-open"></span></a>                
                	<ul>
                		<li><a href="../html/desarrollo-web.html">Desarrollo Web</a></li>
                    	<li><a href="../html/diseño-de-paginas-web.html">Diseño de páginas Web</a></li>
                        <li><a href="http://www.preciospaginasweb.nobasys.com">Precios Páginas Web</a></li>
                    	<li><a href="../html/aplicaciones-a-medida.html">Aplicaciones a medida</a></li>
                    <!--<li><a href="desarrollo_proyectos.html">Desarrollo de proyectos</a></li>-->
                    	<li><a href="../html/creacion-de-portales-web.html">Creación de Portales Web</a></li>
                    	<!--<li><a href="gestor_contenidos.html">Gestor de contenidos(CMS)</a></li>-->
                                   
                	</ul>
              	</li>
                
                <li><a href="#">Marketing<span class="icon-down-open"></span></a>
                
                <ul>
                	<li><a href="../html/marketing-online.html">Marketing online</a></li>
                	<li><a href="../html/posicionamiento-seo.html">Posicionamiento SEO</a></li>
                    
                    <li><a href="../html/gestion-en-redes-sociales.html">Gestión en Redes sociales</a></li>
                    <li><a href="../html/mailing-electronico.html">Mailing electrónico</a></li>   
                </ul>
              	</li>
                
                <li><a href="../html/trabajos.html">Trabajos</a></li>
                <li><a href="../html/contacto.html">Contacto</a></li>
                
				</ul>
            </nav>
        </div>           
    </header>
    <main>
    	<section id="banner">
            <img src="../images/img-gracias.jpg">                    
        </section>
        
        <section id="bienvenidos-dis-web">
        	<h1>DESARROLLO DE SOFTWARE Y PÁGINAS WEB</h1>
            <h3>¡Solicita un presupuesto ahora!</h3>
            <form action="../html/presupuesto_online.html">
    			<input type="submit" value="Presupuesto Online" id="boton"/>
			</form>
            <p></p>            
        </section>
          
        <section id="gracias">
			<h1>GRACIAS POR CONFIAR EN NOSOTROS</h1> <!--ojo-->
    		<p id="comunica">Un asesor de <strong>Nobasys</strong>, se comunicará lo más pronto posible con usted. Horario de llamadas lunes a viernes de 9:00 a 17:30</p>
    	</section>
                	        
        <section id="title">
        	<div>
            <label id="servicios-ini"><strong>NUESTROS SERVICIOS</strong></label>
            </div>
        </section>
        
        <section id="servicios">
        <h2>comienza servicios</h2><!--ojo display:none only evitar warning w3c-->
            <hr id="alineate5"/>   
                <div class="contenedor">
                    <div class="info-servicios">
                       <section id="desasoft4">
                       <h2>comienza slider</h2><!--ojo display:none only evitar warning w3c-->
                       <h3>Servicios</h3>	
                        <ul>
                        <li><a class= "text" href="../html/desarrollo-de-software.html">Desarrollo de software</a></li>
                <li><a class= "text" href="../html/mantenimiento-informatico.html">Mantenimiento informático</a></li>
                <!--<a class= "text" href="diseño_grafico.html">Diseño gráfico</a>-->
                <li><a class= "text" href="../html/consultoria-informatica.html">Consultoría informática</a></li>
                		</ul>
                        </section>
                   </div>
                   
                   <div class="info-servicios">
                       <section id="desasoft5">
                       <h2>comienza slider</h2><!--ojo display:none only evitar warning w3c-->
                    	<h3>Desarrollo</h3>	
                        <ul>
                        <li><a class= "text" href="../html/desarrollo-web.html">Desarrollo Web</a></li>
                <li><a class= "text" href="../html/diseño-de-paginas-web.html">Diseño de páginas Web</a></li>
                <li><a class= "text" href="http://www.preciospaginasweb.nobasys.com">Precios Páginas Web</a></li>
                <li><a class= "text" href="../html/aplicaciones-a-medida.html">Aplicaciones a medida</a></li>
                <!--<a href="desarrollo_proyectos.html">Desarrollo de proyectos</a>-->
                <li><a class= "text" href="../html/creacion-de-portales-web.html">Creación de Portales Web</a></li>
                <!--<a href="gestor_cont.html">Gestor de contenidos(CMS)</a>-->
                		</ul>
                    	</section>
                   </div>
                   
                   <div class="info-servicios">
                       <section id="desasoft6">
                       <h2>comienza slider</h2><!--ojo display:none only evitar warning w3c-->
                    	<h3>Marketing</h3>	
                        <ul>
                        <li><a class= "text" href="../html/marketing-online.html">Marketing online</a></li>
                <li><a class= "text" href="../html/posicionamiento-seo.html">Posicionamiento SEO</a></li>
                <li><a class= "text" href="../html/gestion-en-redes-sociales.html">Gestión en Redes sociales</a></li>
                <li><a class= "text" href="../html/mailing-electronico.html">Mailing electrónico</a></li>
                		</ul>
                    	</section>
                   </div>
                   
                   <div class="info-servicios">
                       <section id="desasoft7">
                       <h2>comienza slider</h2><!--ojo display:none only evitar warning w3c-->
                    	<h3>Contacto</h3>	
                        <ul>
                        <li><a  class="icon-phone" id = "text" >+593(2)2861-418</a></li>
                <li><a  class="icon-mobile" id = "text" >+593(9)8834-7509</a></li>
                <li><a  class="icon-wpforms"  id = "text2" href="../html/contacto.html">Formulario de contacto</a></li>
                <li><a  class="icon-blogger" id="text2"  href="http://nobasys.com/blog/">Visita nuestro Block</a></li>
                		</ul>
                    	</section>
                   </div>
                        
                </div>                                                        
            </section>
    </main>
    
    <footer>
         <div class="contenedor-foot">
                <a class="copy"><strong>Copyright © 2015-2018 - </strong></a>
                <a class="copy" href="../index.html">Desarrollo de software y Páginas Web</a>
                <a class="copy"><strong> | Nobasys</strong> | Quito, Valle de los Chillos - Ecuador</a>
              <div class="sociales">
                    <a class="icon-facebook" href="https://www.facebook.com/nobasys/" ></a>
                    <a class="icon-twitter" href="https://twitter.com/Software20501"></a>
                    <!--<a class="icon-instagram" href="#"></a>-->
                    <a class="icon-googleplus-rect" href="https://plus.google.com/u/0/114876278167956211892"></a>
        	 </div>
        </div>
    </footer>
  	
</body>
</html>
