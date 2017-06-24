<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>FAQ - Pandora</title>
	<meta name="Pandora - Tienda Virtual" content="Pagina de Ropa">
	<meta name="author" content="Grupo5">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/propio.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<header>
	   <?php include("partials/header.php"); ?>

	</header>
	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h2 class="title"> Dudas Frecuentes</h2>
					<hr />
				</div>
			</div>			
		</div>
	</div>
		<!-- Comienzo de Preguntas y respuestas-->
	<div class="container">
		<div class="row main">
		<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<ol>
					<li><h4>Lorem ipsum dolor sit?</h4></li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui ofertasficia deserunt mollit anim id est laborum.</p>
					<li><h4>Lorem ipsum dolor sit?</h4></li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui ofertasficia deserunt mollit anim id est laborum.</p>
					<li><h4>Lorem ipsum dolor sit?</h4></li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui ofertasficia deserunt mollit anim id est laborum.</p>
					<li><h4>Lorem ipsum dolor sit?</h4></li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui ofertasficia deserunt mollit anim id est laborum.</p>
					<li><h4>Lorem ipsum dolor sit?</h4></li>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui ofertasficia deserunt mollit anim id est laborum.</p>
			</div>			
		</div>
	</div>
	<!-- FINAL DE PREGUNTRAS Y RESPUESTAS-->

	<footer>
	    <div class="panel-footer backgfooter">
	      <div class="row">
	        <div class="col-sm-4">
	          <ul>
	            <li class="title-li">Nosotros</li>
	            <li><a href="#" class="listfoo">Sobre Pandora</a></li>
	            <li><a href="#" class="listfoo">Política de Privacidad</a></li>
	            <li><a href="faq.php" class="listfoo">Dudas frecuentes</a></li>
	            <li><a href="#" class="listfoo">Atención al cliente</a></li>
	            <li><a href="#" class="listfoo">Términos y condiciones</a></li>
	          </ul>
	        </div>
	        <div class="col-sm-4">
	          <ul>
	            <li class="title-li">Info</li>
	            <li><a href="#" class="listfoo">Como comprar</a></li>
	            <li><a href="#" class="listfoo">Plazos de Entrega</a></li>
	            <li><a href="#" class="listfoo">Promociones Bancarias</a></li>
	            <li><a href="#" class="listfoo">Cambios y devoluciones</a></li>
	          </ul>
	        </div>
	        <div class="col-sm-4">
	          <p>Suscribite a nuestro <button type="button" class="btn btn-success"><a href="#" class="whtfont"> Newsletter</a></button></p>
	          <p>y descubrí nuestras ofertas y premios</p>
	        </div>
	      </div>
	  	</div>
  	</footer>
</body>
</html>
