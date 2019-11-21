<?php

include("calis.php");

$usuario=$_POST['usuario'];
$nombre= $_POST['nombre'];
$apellidoP=$_POST['apellidoP'];
$apellidoM=$_POST['apellidoM'];
$info=$_POST['info'];
$descuento=$_POST['descuento'];
echo $descuento;

$query="INSERT INTO cliente(id_usuario,nombre,apellido_p,apellido_m,info,descuento)
        VALUES ('$usuario','$nombre','$apellidoP','$apellidoM','$info','$descuento')";

        $resultado=$conexion->query($query);

        if ($resultado) {

        	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
        	# code...
        }
 ?>
