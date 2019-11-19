<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estiloFormularios.css">
	<title>MostrarUsuario</title>
</head>
<body>
	<div class="body">
<center>
	<table>
		<thead >

			<tr>


		<th colspan="5">Usuarios</th>

			</tr>

		</thead>
		<tbody>

			<tr>

			
				<td>Nombre</td>
				<td>Password</td>
				<td>Tipo</td>


			</tr>

			<?php

			include ("calis.php");
			$query="SELECT * FROM users";
			$resultado=$conexion->query($query);
			while ($row=$resultado->fetch_assoc()) {

			?>

			<tr>
				<td><?php echo $row['Usuario']; ?></td>
				<td><?php echo $row['Contrasena']; ?></td>
				<td><?php echo $row['Tipo']; ?></td>

			</tr>


			<?php
		            }
			?>





		</tbody>
	</table>
</center>
</div>
</body>

</html>
