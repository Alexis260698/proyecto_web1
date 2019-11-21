<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estiloFormularios.css">
	<title>Mostrar Servicio</title>
</head>
<body>
	<div class="body">
<center>
	<table>
		<thead >

			<tr>


		<th colspan="5">Servicios</th>

			</tr>

		</thead>
		<tbody>

			<tr>
				<td>id_Servicio</td>
				<td>Nombre</td>
				<td>Precio</td>
        <td>Horario Normal</td>
				<td>Horario Fin de Semana</td>
			</tr>

			<?php

			include ("calis.php");
			$query="SELECT * FROM servicio";
			$resultado=$conexion->query($query);
			while ($row=$resultado->fetch_assoc()) {

			?>

			<tr>
				<td><?php echo $row['id_servicio']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['precio']; ?></td>
        <td><?php echo $row['horarioNormal']; ?></td>
        <td><?php echo $row['horarioFin']; ?></td>

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
