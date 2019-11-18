<?php
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$a=0;
include("conexion.php");
echo "el usuario es ".$usuario;
echo "la contraseña es ". $pass;


$mysql= new mysqli($server,$user,$pass,$bd);
$listaUser = $mysql->query("select * from users");
var_dump($listaUser);
foreach ($listaUser as $user) {
	if ($user['usuario']==$usuario) {
		$a = $a + 1;
		if ($user['contrasena']==$pass) {

      if ($user['tipo'] == "admin") {
          	header("Location: index.php");
      }else{
        	header("Location: index.php");
      }


		}else{
			header("Location:login.html");

		}
	}else{
		header("Location:login.html");
	}
}

?>
