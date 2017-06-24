<?php 
function pre($data){
    echo "<pre>".print_r($data)."</pre>";
}

session_start();
if (isset($_SESSION['user_login'])) {
	header("location: index.php");
}

$filename = 'usuarios.json';
$usuario = [];
if (file_exists($filename) && file_get_contents($filename)) {
}else{
	file_put_contents($filename,json_encode($usuario));
}



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



$errores = [];

 //Codigo persistencia de datos 
$nombre = (isset($_POST['nombre']) && strlen($_POST['nombre'])) ? $_POST['nombre'] : 'Ingrese su nombre';
$email = (isset($_POST['email']) && strlen($_POST['email'])) ? $_POST['email'] : 'Ingrese su email';
$telefono = (isset($_POST['telefono']) && strlen($_POST['telefono'])) ? $_POST['telefono'] : 'Ingrese su telefono';
$direccion = (isset($_POST['direccion']) && strlen($_POST['direccion'])) ? $_POST['direccion'] : 'Ingrese su direccion';
$contrasenia = (isset($_POST['contrasenia']) && strlen($_POST['contrasenia']) ) ? $_POST['contrasenia'] : '';
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
				'contrasenia'=>$contrasenia,
				'emoticon' => false
			];


			//Subida de Imagenes
		$contenido = file_get_contents('usuarios.json', true);
		$usuarios = [];
		if (strlen($contenido)) {
			$usuarios = json_decode($contenido,true);
		} else {
			$usuarios = [];
		}
		//Subida de Imagenes

		$usuario['id'] = count($usuarios) + 1;

		//Subida de Imagenes
		if ($_FILES['emoticon']['error'] == UPLOAD_ERR_OK) {
			pre("El Archivo llego Correctamente");
			$nombreArchivo = "usuario_".$usuario['id']."_.". pathinfo($_FILES["emoticon"]["name"], PATHINFO_EXTENSION);

			if(move_uploaded_file($_FILES["emoticon"]["tmp_name"],"img/users/".$nombreArchivo)){
				$usuario['emoticon'] = "img/users/".$nombreArchivo;
			} else {
				pre("Error al guardar archivo");
			}
		}
	//Subida de Imagenes

			$usuario = crearUsuario($filename,$usuario);
			header("Location: registrocorrecto.php");
			exit();
	    } else {
        	array_push($errores, "Error: El usuario ya existe");
    	}

 	} else if (isset($_POST['submit']) && strlen($_POST['submit'])){
 			array_push($errores, "Se encuentran campos sin completar");
 }

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

	 <h1><?php if (count($errores)) { echo join("<br>",$errores); } ?></h1>

<!-- HEADER -->
	<header>
		<?php include("partials/header.php"); ?>

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
					<input type='text' name='nombre' placeholder="<?=$nombre?>" class=form-control id='name' required>	
				</div>
				  <div class="form-group">
    				<label for='email'>Email:</label>
    				<input type='email' name='email' placeholder="<?=$email?>" class="form-control" id='email' required>
  				</div>

				<div class="form-group">
					<label for ="telefono">Teléfono (opcional):</label>
					<input type='tel' name='telefono' placeholder="<?=$telefono?>" class=form-control id='telefono'>
				</div>
				<div class="form-group">
					<label for ="dirección">Dirección:</label>
					<input type='text' name='direccion' placeholder="<?=$direccion?>" class=form-control id='direccion'>
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
					<label for ="Emoticon">Adjunte una imagen:</label>
					<input type="file" name='emoticon' value="<?=$emoticon?>" class=form-control id='emoticon'>
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
    <?php include("partials/footer.php"); ?>

  </footer>




</body>
</html>
