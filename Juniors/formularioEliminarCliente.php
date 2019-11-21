<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Eliminar Clientes</title>
    <script type="text/javascript" src="js/productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="eliminarCliente.php" method="post" name="frmRegistro">
		 ID cliente:
		<input type="text" name="idEmpleado" id="nombre" class="box" autofocus="autofocus"   required="required"><br><br>

		<input type="submit" name="btnAceptar" value="Eliminar Usuario"  class="boton_personalizado" onclick= "crearProducto()">
		<input type="reset" name="btnCancelar" value="Cancelar"  class="boton_personalizado2" onclick= "cancelar()">
		<br>
		<br>
		<br>
	</form>
    </div>
    </CENTER>
</Boby>
</html>
