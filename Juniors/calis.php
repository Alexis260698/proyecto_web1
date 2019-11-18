<?php
require("conexion.php");
$conexion = new mysqli($server,$user,$pass,$bd,$auth_plugin);
if (mysqli_connect_error()) {
  // code...
echo "no conectado", mysqli_connect_error();
  exit();
}else{
  echo "conectado";
}

 ?>
