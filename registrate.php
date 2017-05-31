<?php 
function pre($data){
    echo "<pre>".print_r($data)."</pre>";
}

$filename = 'usuarios.json';
$usuario = array();
function getUsuarios($filename) {
	if (file_exists($filename)) {
		return json_decode(file_get_contents($filename),true);
	}
	return [];
}

function existeUsuario($filename,$email) {
	if (file_exists($filename)) {
		$usuarios = getUsuarios($filename);
		foreach ($usuarios as $key => $usuario) {
			if ($usuario['email'] == $email) {
			return true;
			}
		}
	}
	return false;
}

function crearUsuario($filename,$usuario) {
	$usuarios = getUsuarios($filename);
	$usuario['id'] = count($usuarios) + 1;
	array_push($usuarios,$usuario);
	file_put_contents($filename,json_encode($usuarios));
	return $usuario;
}
// Iniciamos sessión
session_start();

$errores = [];

 //Codigo persistencia de datos 
$nombre = (isset($_POST['nombre']) && strlen($_POST['nombre'])) ? $_POST['nombre'] : 'Ingrese su nombre';
$email = (isset($_POST['email']) && strlen($_POST['email'])) ? $_POST['email'] : 'Ingrese su email';
$telefono = (isset($_POST['telefono']) && strlen($_POST['telefono'])) ? $_POST['telefono'] : 'Ingrese su telefono';
$direccion = (isset($_POST['direccion']) && strlen($_POST['direccion'])) ? $_POST['direccion'] : 'Ingrese su direccion';
$contrasenia = (isset($_POST['contrasenia']) && strlen($_POST['contrasenia'])) ? $_POST['contrasenia'] : '';
$contraseniaconfirm = (isset($_POST['contraseniaconfirm']) && strlen($_POST['contraseniaconfirm']) ) ? $_POST['contraseniaconfirm'] : '';


//Codigo para crear el json
if ($nombre && $email && $telefono && $direccion && $contrasenia && $contraseniaconfirm && ($contrasenia == $contraseniaconfirm)) {
  		
  		$contrasenia = password_hash($contrasenia,PASSWORD_DEFAULT);
        pre("El formulario de registro esta completo");

        if (!existeUsuario($filename,$email)) {
			$usuario = [
				'nombre'=>$nombre,
				'email'=>$email,
				'telefono'=>$telefono,
				'direccion'=>$direccion,
				'contrasenia'=>$contrasenia
			];

			$usuario = crearUsuario($filename,$usuario);
			header("Location: registrocorrecto.html");
			exit();
	    } else {
        	array_push($errores, "Error: El usuario ya existe");
    	}
 } else if (isset($_POST['submit']) && strlen($_POST['submit'])){
 	array_push($errores, "Se encuentran campos sin completar");
 }




/*Codigo para Foto upload

	$confirmacionUser = $_POST['name'];
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
*/
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

	 <h1><?php if (count($errores)) { echo join("<br>",$errores); } ?></h1>

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
					<li><a href="registrate.php"><span class="glyphicon glyphicon-user"></span> Crear Cuenta</a></li>
					<li><a href="iniciarsesion.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li>
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
					<h2 class="title"> Crea tu cuenta </h2>
					<hr />
				</div>
			</div>			
		</div>
	</div>

	<div class="container">
		<div class="row">
		<!-- agregué method, action y id al tag fom -->
			<form enctype="multipart/form-data" method="post" action="" id="register">
				<div class="form-group">
				<!-- pasé mayusculas a minisculas todos los tags de name para que fuese más facil trabajar -->
					<label for ="Nombre">Nombre:</label>
					<input type='text' name='nombre' value="<?=$nombre?>" class=form-control id='name' required>	
				</div>
				  <div class="form-group">
    				<label for='email'>Email:</label>
    				<input type='email' name='email' value="<?=$email?>" class="form-control" id='email' required>
  				</div>

				<div class="form-group">
					<label for ="telefono">Teléfono (opcional):</label>
					<input type='tel' name='telefono' value="<?=$telefono?>" class=form-control id='telefono'>
				</div>
				<div class="form-group">
					<label for ="dirección">Dirección:</label>
					<input type='text' name='direccion' value="<?=$direccion?>" class=form-control id='direccion'>
				</div>
				<!--div class="form-group">
					<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
					<label for ="foto">Subir foto de perfil:</label>
					<input name='foto' type="file" />
    				<input type="submit" value="Enviar foto" />
					
				</div-->
				<div class="form-group">
					<label for ="Contraseña">Contraseña:</label>
					<input type='password' name='contrasenia' value="<?=$contrasenia?>" class=form-control id='contrasenia'>
				</div>
				<div class="form-group">
					<label for ="Contraseña">Confirme su contraseña:</label>
					<input type="password" name='contraseniaconfirm' value="<?=$contraseniaconfirm?>" class=form-control id='contraseniaconfirm'>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Registrate" class="btn"> 
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
