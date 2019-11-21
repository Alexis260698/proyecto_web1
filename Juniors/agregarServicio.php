<?php

include("calis.php");

$nombre= $_POST['nombreServicio'];
$precio=$_POST['precio'];
$entre=$_POST['Hentre'];
$fin=$_POST['Hfin'];


$query="INSERT INTO servicio(nombre,precio,HorarioNormal,horarioFin)
        VALUES ('$nombre','$precio','$entre','$fin')";

        $resultado=$conexion->query($query);

        if ($resultado) {

        	 echo '<script type="text/javascript">alert(\'Operacion exitosa\');</script>';
        	# code...
        }
 ?>
