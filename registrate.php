<?php 
 //Codigo persistencia de datos 
$nombre = "";
$email = "";
$telefono = "";
$direccion = "";
$contraseña = "";

$nombre = (isset($_POST['nombre']) && strlen($_POST['nombre'])) ? $_POST['nombre'] : "Ingrese_su_nombre";
$email = (isset($_POST['email']) && strlen($_POST['email'])) ? $_POST['email'] : "Ingrese_su_email";
$telefono = (isset($_POST['telefono']) && strlen($_POST['telefono'])) ? $_POST['telefono'] : "Ingrese_su_telefono";
$direccion = (isset($_POST['direccion']) && strlen($_POST['direccion'])) ? $_POST['direccion'] : "Ingrese_su_direccion"

//Codigo para Foto upload

	$confirmacionUser = $_POST["name"];
		echo "Bienvenido " . $confirmacionUser . "<br><br>";
			//datos del arhivo
			$foto = $HTTP_POST_FILES['name'];
			$formatoFoto = $HTTP_POST_FILES['type'];
			$tamanoFoto = $HTTP_POST_FILES['size'];
			//comprobar las características de la imagen
				if (!((strpos($formatoFoto, "gif") || strpos($formatoFoto, "jpeg")) && ($tamanoFoto < 300000))) {
				echo "La imagen no se pudo guardar: <br><br><table><tr><td><li> Solo se pueden subir imagenes de tipo .gif o .jpg <br><li>La imagén no debe pesar más de 300Kb.</td></tr></table>";
					}else{
						if (move_uploaded_file($HTTP_POST_FILES['foto'], $foto))
							echo "Tu foto ha sido cargada exitosamente.";
						}else{
							echo "Tu foto no pudo guardarse.";
						} 
					}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Registrate - Pandora</title>
  <meta name="Tienda Virtual" content="Pagina de Ropa">
  <meta name="author" content="Grupo5">

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
					<a class="navbar-brand" href="index.html">NombreTiendaWeb</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
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
					<li><a href="registrate.html"><span class="glyphicon glyphicon-user"></span> Crear Cuenta</a></li>
					<li><a href="iniciarsesion.html"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li>
					<li>
						<div class="checkbox navbar-form fontwhite">
							<label><input type="checkbox"> Recordame</label>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>

<!-- FORMULARIO -->

	<div class="container">
		<div class="row main">
			<div class="panel-heading">
				<div class="panel-title text-center">
					<h2 class="title"> Crea tu cuenta</h2>
					<hr />
				</div>
			</div>			
		</div>
	</div>

	<div class="container">
		<div class="row">
		<!-- agregué method, action y id al tag fom -->
			<form enctype="multipart/form-data" method="post" action="http://localhost:8888/digitalHouseSprint1-master/foto" id="registrates">
				<div class="form-group">
				<!-- pasé mayusculas a minisculas todos los tags de name para que fuese más facil trabajar -->
					<label for ="Nombre">Nombre:</label>
					<input type="text" name="nombre" value="<?=$nombre?>" class=form-control id="name" required>	
				</div>
				  <div class="form-group">
    				<label for="email">Email:</label>
    				<input type="email" name="email" value="<?=$email?>" class="form-control" id="email" required>
  				</div>

				<div class="form-group">
					<label for ="telefono">Teléfono (opcional):</label>
					<input type="tel" name="telefono" value="<?=$telefono?>" class=form-control id="usr">
				</div>
				<div class="form-group">
					<label for ="dirección">Dirección:</label>
					<input type="text" name="direccion" value="<?=$direccion?>" class=form-control id="address-line1">
				</div>
				<div class="form-group">
					<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
					<label for ="foto">Subir foto de perfil:</label>
					<input name="foto" type="file" />
    				<input type="submit" value="Enviar foto" />
					
				</div>
				<div class="form-group">
					<label for ="Contraseña">Contraseña:</label>
					<input type="password" name="contraseña" value="" class=form-control id="psw">
				</div>
				<div class="form-group">
					<label for ="Contraseña">Confirme su contraseña:</label>
					<input type="password" name="contraseña" value="" class=form-control id="psw-repeat">
				</div>
				<div class="form-group">
					<input type="submit" name="Registrate" value="Registrate" class="btn"> 
				</div>
				<div class="form-group">
					<input type="checkbox"> Recordame
				</div>
			</div>
			</form>
		</div>
		
	</div>

  <footer>
    <div class="panel-footer backgfooter">
      <div class="row">
        <div class="col-sm-4">
          <ul>
            <li class="title-li">Nosotros</li>
            <li><a href="#" class="listfoo">Sobre Pandora</a></li>
            <li><a href="#" class="listfoo">Política de Privacidad</a></li>
            <li><a href="faq.html" class="listfoo">Dudas Frecuentes</a></li>
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
