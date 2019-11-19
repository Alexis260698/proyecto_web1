<?php


include("calis.php");

$idUsuario= $_POST['idUser'];
$nombreUsuario= $_POST['nombreUser'];
$pass=$_POST['pass'];
$tipoUsuario=$_POST['tipoUser'];



$query="UPDATE users SET Usuario='$nombreUsuario', Contrasena='$pass', Tipo='$tipoUsuario' WHERE Usuario='$idUsuario';";

        $resultado=$conexion->query($query);

if ($resultado) {

	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
	# code...
}







?>
