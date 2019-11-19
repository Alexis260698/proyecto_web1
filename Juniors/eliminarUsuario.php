<?php
include("calis.php");

$idEmpleado= $_POST['idEmpleado'];
echo $idEmpleado;
$query="DELETE FROM users WHERE Usuario='$idEmpleado';";

        $resultado=$conexion->query($query);

if ($resultado) {

	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
	# code...
}

 ?>
