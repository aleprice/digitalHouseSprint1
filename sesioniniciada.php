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
    <?php include("partials/footer.php"); ?>

  </footer>




</body>
</html>