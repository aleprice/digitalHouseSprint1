<?php
require_once("conexion.php");
$nuevo=new Usuarios();
var_dump($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["email"],$_POST['contrasenia']);
$nuevo->AgregarUsuario($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["email"],$_POST['contrasenia']);
?>