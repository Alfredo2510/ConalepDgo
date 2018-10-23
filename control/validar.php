<?php
include('conexion.php');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtpass'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($usuario) | empty($pass)) 
	{
	header("Location: ../Sections/Alumnos/Valoracion-Aprovechamiento.php");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
$sql = mysqli_query("SELECT * FROM usuarios WHERE usuario='$usuario' AND pass='$pass' " );

if ($row = mysqli_fetch_array($sql))
{
			session_start();
			$_SESSION['usuario'] = $usuario;
			header("Location: ../Sections/Alumnos/perfil.php");
}else{
			header("Location: ../Sections/Alumnos/perfil.php");
			exit();
  }
}
?>