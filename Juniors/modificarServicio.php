<?php


include("calis.php");

$id_servicio= $_POST['idser'];
$nombre= $_POST['nombre'];
$precio=$_POST['precio'];
$entre=$_POST['Hentre'];
$fin=$_POST['Hfin'];



$query="UPDATE servicio SET nombre='$nombre', precio='$precio' , horarioNormal='$entre', horarioFin='$fin' WHERE id_servicio='$id_servicio';";

        $resultado=$conexion->query($query);

if ($resultado) {

	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
	# code...
}
