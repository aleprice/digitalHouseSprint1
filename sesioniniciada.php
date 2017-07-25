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
		<div class="container Logo">
			<div class="row">
				<div class="col-sm-12">
					<img src="img/img_Logo/pandora.jpg"></div>
				</div>
			</div>
		</div>
		<nav class=" navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Pandora</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorías<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Vestidos</a></li>
							<li><a href="#">Calzados</a></li>
							<li><a href="#">Accesorio</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mujer<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Vestidos</a></li>
							<li><a href="#">Calzados</a></li>
							<li><a href="#">Accesorio</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hombre<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Vestidos</a></li>
							<li><a href="#">Calzados</a></li>
							<li><a href="#">Accesorio</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form navbar-right">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>
						</form>
					</li>
					<li><a href="registrate.php"><span class="glyphicon glyphicon-user"></span> Crear Cuenta</a></li>
					
					<?php 
							if (isset($_SESSION['user_login'])) {
								echo"<li>";
								echo"<a>";
								echo $_SESSION['user_login'];
								echo"</a>";
								echo "</li>";
							}else{
								echo"<li>";
								echo "<a href='iniciarsesion.php'><span class='glyphicon glyphicon-log-in'></span> Iniciar Sesión </a>";
								echo "</li>";
							}
					?> 

					<?php 
							if (isset($_SESSION['user_login'])) {
								echo"<li>";
								echo "<a href='logout.php' class='listfoo'>Deslogueate</a>";
								echo "</li>";
							}
					?> 
					<!-- <li><a href="iniciarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li> -->
					<!--
					<li>
						<div class="checkbox navbar-form fontwhite">
							<label><input type="checkbox"> Recordame</label>
						</div>
					</li>
					-->
				</ul>
			</div>
		</nav>
	</header>

<!-- CUERPO WEB -->
	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h2 class="tittle"> 
					<?php 
							if (isset($_SESSION['user_login'])) {
								echo "Hola,<br><br>";
								echo $_SESSION['user_login'];
								echo "<br><br>";
							}
					?> 
					</h2>
					<h2 class="title"> Iniciaste Sesion Correctamente. </h2>

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