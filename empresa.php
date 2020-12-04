<!DOCTYPE html>
     <?php
     session_start();
     if (@!$_SESSION['usuario']) {
          echo '<script>alert("Inicia Sesion Para ver la pagina")</script> ';
          header("Location:inicio.php");
     }
     ?>
<html>
<head>
	<title>Lavanderia Alex</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/lavanderia.css">
     <script src="jquery-3.1.0.min.js"></script>
     <script src="main.js"></script>
</head>
<body>
	<header id="titulo">
			<img id="logo" src="Logo.png">
			<h1>Lavanderia Alex<h1>
		    <h2 id="horario">Numero Telefonico: 2548362 </h2>
    	    <h2> Horario de atencion <br>8 a 16 hrs|L-S</h2>
    </header>
		<nav>
     	<ul id="menu">
     		<li><a href="lavanderia.php">Inicio</a></li>
     		<li><a href="empresa.php">Empresa</a></li>
     		<li><a href="lavado.php">Lavanderia</a></li>
     		<li><a href="plan.php">Planchado</a></li>
     		<li><a href="medioambiente.php">Medio Ambiente</a></li>
               <li><a href="servicio.php">Contratar</a></li>
     		<li><a href="contacto.php">Contacto</a></li>
     	</ul>
     </nav>
     <section id="contenido">
     	<div id="con">
     	<header><h2>Quienes Somos</h2></header>
          <p>El principal objetivo de Lavandería Alex es la satisfacción del cliente al recibir sus prendas de ropa totalmente limpias, sin rastros de manchas ni restos de cualquier origen y planchados correctamente.</p>
          <p>El éxito de nuestra empresa reside en nuestra máxima, ofrecer un servicio de calidad al cliente, gracias a nuestra amplia experiencia y la alta capacidad de servicio de nuestras instalaciones.<br>
          </p>
          <p>La política de Lavandería Alex es clara: ofrecer un trato pulcro y personalizado en cada servicio, ya que entendemos que cada cliente tiene unas necesidades específicas y merece un servicio a medida. Por eso nuestra disponibilidad es total, ofreciendo un servicio de 10 horas.</p>
          <h2>Misión</h2>
     	<p>Somos lavandería Alex que responde al requerimiento de nuestros clientes, proporcionándoles soluciones efectivas y oportunas a la exigencia y medida de sus necesidades, ofreciendo nuestros productos, con calidad y eficiencia.</p>
          <h2>Visión</h2>
          <p>Liderar el mercado respondiendo efectivamente por la calidad de nuestros productos, asociados al compromiso con nuestros clientes, destacando por un servicio ágil, moderno, puntual y eficiente.</p>
          <h2>Valores</h2>
          <ul>
               <li>Compromiso</li>
               <li>Fiabilidad</li>
               <li>Calidad</li>
               <li>Servicio y orientación al cliente</li>
               <li>Mejora Continua</li>
               <li>Proteger al medio ambiente</li>
               <li>Respeto</li>
               <li>Honestidad</li>
          </ul>
     	</div>
     	<aside id="columna">
               <img  style="width: 50px;height: 50px;" src="login.png">
               <ul>
                <li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
                 <li><a href="desconectar.php"> Cerrar Sesión </a></li>               
                </ul>
     		<h3 align="center">Lavanderia Alex</h3>
     		
     		<img src="laundry.jpg">
     		<ul><h4>Servicios</h4>
     			<li>Lavado</li>
     			<li>Planchado</li>
               </ul>
               <p align="center">Estamos ubicados en la calle <br> Monterrey #305 Colonia ferrrocarrilera</p>
               <div id="googleMap"  align="center" style="width:285px;height:200px;"></div>

               <script>
               function myMap() {
               var mapProp= {
                 center:new google.maps.LatLng(22.157867,-100.961517),
                 zoom:20,
               };
               var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
               
               marker = new google.maps.Marker({
               map: map,
               position: new google.maps.LatLng(22.157867,-100.961517)
               });
          }
               </script>

               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASUnJbav_uLhcP9TPd95vJLX_jUERGmzM&callback=myMap"></script>
     		
     	</aside>
     </section>
     <footer>
     	<p>¿Desea recibir más información o un presupuesto? 2548362</p>
     	<p>Redes Sociales</p>
     	<a href="http://www.facebook.com"><img style="width: 50px;height: 50px" class="redesSociales" src="facebook.png" /></a>
        <a href="http://www.twitter.com"><img style="width: 50px;height: 50px" class="redesSociales" src="twitter.png" /></a>
     </footer>
</body>
</html>