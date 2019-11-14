<?php
function conectar(){

  $user = "root";
  $pass = "root";
  $server = "localhost";
  $db = "juniors_gym";
  $conexion = mysql_connect($server,$user,$pass) or die ("Error al conectarse a la base de datos".mysql_error());
  mysql_select_db($db,$conexion);
  return $conexion;
}

?>
