!DOCTYPE html>
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

<th colspan="5">Clientes</th>

  </tr>

</thead>
<tbody>

  <tr>


    <td>id_codigo</td>
    <td>id_usuario</td>
    <td>nombre</td>
    <td>Apellido Paterno</td>
    <td>Apellido Materno</td>
    <td>Informacion</td>
    <td>Descuento</td>


  </tr>

  <?php

  include ("calis.php");
  $query="SELECT * FROM cliente";
  $resultado=$conexion->query($query);
  while ($row=$resultado->fetch_assoc()) {

  ?>

  <tr>
    <td><?php echo $row['id_codigo']; ?></td>
    <td><?php echo $row['id_usuario']; ?></td>
    <td><?php echo $row['nombre']; ?></td>
    <td><?php echo $row['apellido_p']; ?></td>
    <td><?php echo $row['apellido_m']; ?></td>
    <td><?php echo $row['info']; ?></td>
    <td><?php echo $row['descuento']; ?></td>

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
