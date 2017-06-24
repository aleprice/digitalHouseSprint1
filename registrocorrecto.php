<?php 

session_start();


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registrate - Pandora</title>
  <meta name="Pandora - Tienda Virtual" content="Pagina de Ropa">
  <meta name="author" content="Grupo5">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/propio.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<!-- HEADER -->
	<header>
		<?php include("partials/header.php"); ?>

	</header>

<!-- CUERPO WEB -->
	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h2 class="title"> Gracias, Te registraste correctamente. </h2>
					<h2 class="title"> Vuelve a la Home para Iniciar Sesion. </h2>
					<hr />
				</div>
			</div>			
		</div>
	</div>


<!-- CUERPO WEB -->


  <footer>
    <div class="panel-footer backgfooter">
      <div class="row">
        <div class="col-sm-4">
          <ul>
            <li class="title-li">Nosotros</li>
            <li><a href="#" class="listfoo">Sobre Pandora</a></li>
            <li><a href="#" class="listfoo">Política de Privacidad</a></li>
            <li><a href="faq.php" class="listfoo">Dudas Frecuentes</a></li>
            <li><a href="#" class="listfoo">Atención al Cliente</a></li>
            <li><a href="#" class="listfoo">Términos y Condiciones</a></li>
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
