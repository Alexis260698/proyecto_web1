<?php

/*$servername = "localhost";
$database = "juniors_gym";
$username = "root";
$password = "root";
$puerto = 3306;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
*/
$conexion = new mysqli("localhost","root","root","juniors_gym");

if ($conexion) {
  echo "conectado";
}else{
  echo "error conexion";
}

?>
