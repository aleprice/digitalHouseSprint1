<?php


class ConectarSQL
{
	public function con()
	{
		$dsn = 'mysql:host=localhost;dbname=pandoradb;charset=utf8mb4;port:3306';
		$db_user = 'root';
		$db_pass = 'laura';
		$db = new PDO($dsn, $db_user, $db_pass);
		return $db;		
	}
}

class Usuarios
{
	
	public function AgregarUsuario($nombre, $apellido,$email,$direccion,$contrasenia)
	{	    
		
			$db1=Conectar::con();						
			$query = "INSERT into usuarios values(default,'$nombre','$apellido','$email','$direccion','$contrasenia');";			
			$res = $db1->prepare($query);		
		    $val=$res -> execute();
		
		if (!empty($val)){
			echo"<script type='text/javascript'>
		alert('El registro se realizó correctamente');
		window.location='home.php';
		</script>";
		
		}else{
			echo "Error";
		}				
	}	
}

?>