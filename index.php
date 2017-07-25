<?php
  session_start();

?>


<!doctype html>
<html lang="es">
<head>
	<title>Pandora | Indumentaria</title>
 	<meta charset="utf-8">
    <meta name="Pandora - Tienda Virtual" content="Pagina de Ropa">
  	<meta name="author" content="Grupo5">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/propio.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>
  <header>
    <div class="container Logo">
      <div class="row">
        <div class="col-sm-12">
          <img src="img/img_Logo/pandora.jpg"></div>
      </div>
    </div>
    <nav class="navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Pandora</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
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
          <li><form class="navbar-form navbar-right">
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
        </ul>
      </div>
    </nav>
<!--INICIA SLIDER-->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="img/Slider/19_slider.jpg" alt="Hombre">
          <div class="carousel-caption">
            <h3>Ropa para Hombre</h3>            
          </div>
        </div>

        <div class="item">
          <img src="img/Slider/slider-eyshe-1.jpg" alt="Mujer">
          <div class="carousel-caption">
            <h3>Ropa para Mujer</h3>
          </div>
        </div>

        <div class="item">
          <img src="img/Slider/timthumb.jpg" alt="HombreMujer">
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<!--FINALIZA SLIDER-->
  </header>

<!--INICIAN PRODUCTOS-->
<!--INICIA FILA 1-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          </br>
          </br>
          </br>
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-sm-3 backgproductos">
          <img src="img/Hombre/zapato/azul1.jpg" class="productsHome img-rounded center-block" width="80%">
          <h3>Key Biscane</h3>
          <p>Zapato Cuero Gris Customs BA</p>
          <input type="button" class="btn btn-info" value="Agregar al Carrito">
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3 backgproductos">
          <img src="img/Hombre/zapato/marron1.jpg" class="productsHome img-rounded center-block" width="80%">
          <h3>G4</h3>
          <p>Zapato Marrón G4</p>
          <input type="button" class="btn btn-info" value="Agregar al Carrito">
        </div>
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3 backgproductos">
          <img src="img/Hombre/vestidos/camperaA1.jpg" class="productsHome img-rounded center-block" width="80%">
          <h3>Timberland</h3>
          <p>Campera Marron Timberland Mountain</p>
          <input type="button" class="btn btn-info" value="Agregar al Carrito">
        </div>
       </div>
    </div>
<!--FINALIZA FILA 1-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><br></div>
      </div>
    </div>
<!--INICIA FILA 2-->
    <div class="container">
      	<div class="row">
	        <div class="col-sm-3 backgproductos">
	          <img src="img/Mujer/vestidos/vestido1.jpg" class="productsHome img-rounded center-block" width="80%">
	          <h3>Pepe Jeans</h3>
	          <p>Vestido Natural Pepe Jeans Sky</p>
	          <input type="button" class="btn btn-info" value="Agregar al Carrito">
	        </div>
	        <div class="col-sm-1">
	        </div>
	        <div class="col-sm-3 backgproductos">
	          <img src="img/Hombre/vestidos/camperaB1.jpg" class="productsHome img-rounded center-block" width="80%">
	          <h3>Timberland</h3>
	          <p>Campeara Azul Timberlando Mountain</p>
	          <input type="button" class="btn btn-info" value="Agregar al Carrito">
	        </div>
	        <div class="col-sm-1">
	        </div>
	        <div class="col-sm-3 backgproductos">
	          <img src="img/Hombre/accesorios/mochilaA1.jpg" class="productsHome img-rounded center-block" width="80%">
	          <h3>Uniform</h3>
	          <p>Mochila Negra Uniform Lisa Suiza</p>
	          <input type="button" class="btn btn-info" value="Agregar al Carrito">
	        </div>
    	</div>
    </div>

<!--FINALIZA FILA 2-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><br></div>
      </div>
    </div>
<!--INICIA FILA 3-->
    <div class="container">
      	<div class="row">
	        <div class="col-sm-3 backgproductos">
	          <img src="img/Hombre/accesorios/RelojA1.jpg" class="productsHome img-rounded center-block" width="80%">
	          <h3>Tommy Hilfiger</h3>
	          <p>Reloj Negro Tommy Hilfiger</p>
	          <input type="button" class="btn btn-info" value="Agregar al Carrito">
	        </div>
	        <div class="col-sm-1">
	        </div>
	        <div class="col-sm-3 backgproductos">
	          	<img src="img/Hombre/accesorios/Reloj1.jpg" class="productsHome img-rounded center-block" width="80%">
	          	<h3>Adidas</h3>
	          	<p>Reloj Negro Adidas</p>
	          	<input type="button" class="btn btn-info" value="Agregar al Carrito"></div>
	        	<div class="col-sm-1">
	        </div>
	        <div class="col-sm-3 backgproductos">
	          <img src="img/Mujer/accesorios/bufandaC1.jpg" class="productsHome img-rounded center-block" width="80%">
	          <h3>A.Y. NOT DEAD</h3>
	          <p>Bufanda Naranja A.Y. NOT DEAD</p>
	          <input type="button" class="btn btn-info" value="Agregar al Carrito">
	        </div>
    	</div>
    </div>

<!--FINALIZA FILA 3-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><br></div>
      </div>
    </div>
        <div class="container">
	      	<div class="row">
	        	<div class="col-sm-12"></div>
	      	</div>
    </div>
<!--FINALIZA PRODUCTOS-->
	<footer>
	    <div class="panel-footer backgfooter">
	      <div class="row">
	        <div class="col-sm-4">
	          <ul>
	            <li class="title-li">Nosotros</li>
	            <li><a href="#" class="listfoo">Sobre ###</a></li>
	            <li><a href="#" class="listfoo">Politica de Privacidad</a></li>
	            <li><a href="faq.php" class="listfoo">Dudas frecuentes</a></li>
	            <li><a href="#" class="listfoo">Atencion al cliente</a></li>
	            <li><a href="#" class="listfoo">Terminos y condiciones</a></li>
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
	          <p>Subscribite a nuestro <button type="button" class="btn btn-success"><a href="#" class="whtfont"> Newsletter</a></button></p>
	          <p>y descubri nuestras ofertas y premios</p>
	        </div>
	      </div>
	    </div>
	  </footer>
</body>
</html>
