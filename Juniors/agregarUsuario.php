<?php

include("calis.php");

$nombre= $_POST['nombreUsuario'];
$pass=$_POST['pass'];
$tipo=$_POST['tipoUsuario'];

$query="INSERT INTO users(Usuario,Contrasena,Tipo)
        VALUES ('$nombre','$pass','$tipo')";

        $resultado=$conexion->query($query);

        if ($resultado) {

        	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
        	# code...
        }
 ?>
