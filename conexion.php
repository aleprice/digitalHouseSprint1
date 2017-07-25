<?php


class Conectar
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
			$contraseniahash = password_hash($contrasenia,PASSWORD_DEFAULT);
			$db1=Conectar::con();	
            var_dump($contraseniahash);
			$query = "insert into usuarios values(default,'$nombre','$apellido','$email','$direccion', '$contraseniahash');";			
			$res = $db1->prepare($query);		
		    $val=$res -> execute();
		
		if (!empty($val)){
			echo"<script type='text/javascript'>
					alert('El registro se realizó correctamente');
					window.location='index.php';
				 </script>";
		
		}else{
			echo mysql_error();
		}				
	}	
}

?>