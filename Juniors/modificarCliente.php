<?php

include("calis.php");

$id_servicio= $_POST['idser'];
$usuario= $_POST['usuario'];
$nombre= $_POST['nombre'];
$apellido_p=$_POST['apellidoP'];
$apellido_m=$_POST['apellidoM'];
$info = $_POST['info'];
$descuento= $_POST['descuento'];


$query="UPDATE cliente SET id_usuario='$usuario', nombre='$nombre' , apellido_p='$apellido_p', apellido_m='$apellido_m' , info='$info',
 descuento ='$descuento' WHERE id_codigo='$id_servicio';";

        $resultado=$conexion->query($query);

if ($resultado) {

	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
	# code...
}
