<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['pass'];
$entro = false;

echo "el usuario es ".$usuario;
echo "la contraseña es ".$contrasena;

include("conexion.php");
$mysql= new mysqli($server,$user,$pass,$bd);
$listaUser = $mysql->query("select * from users");
foreach ($listaUser as $user) {
var_dump($user);
	if ($user['Usuario']==$usuario) {
		$a = $a + 1;
    echo "entro al nombre";
    echo $user['Contrasena']."==".$contrasena;
		if ($user['Contrasena']==$contrasena) {
      echo "entro al contraseña";
      $entro = true;
      if ($user['Tipo'] == "admin") {
          	header("Location: menu.html");
      }else{
        	header("Location: index.php");
      }

                                    }
                                  }
                                }
if ($entro) {

}else{
header("Location: login.html");
}

?>
