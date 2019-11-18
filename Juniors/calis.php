<?php
/*require("conexion.php");
$conexion = new mysqli($server,$user,$pass,$bd,$auth_plugin);
if (mysqli_connect_error()) {
  // code...
echo "no conectado", mysqli_connect_error();
  exit();
}else{
  echo "conectado";
}
*/

$servername = "localhost";
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
?>
