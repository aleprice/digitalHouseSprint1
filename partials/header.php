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