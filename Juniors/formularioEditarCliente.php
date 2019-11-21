<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Editar Cliente</title>
    <script type="text/javascript" src="productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="modificarCliente.php" method="post" name="frmRegistro">
		 ID Cliente:
		<input type="text" name="idser" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
    Usuario:
   <input type="text" name="usuario" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		Nuevo Nombre del Cliente:
		<input type="text" name="nombre" id="nombre" class="box" required="required"><br><br>
		Nueva Apellido Paterno:
		<input type="text" name="apellidoP" id="precio" required="required"  class="box"><br> <br>
		Nuevo Apellido Materno:
		<input type="text" name="apellidoM" id="cantidad" required="required"  class="box"><br> <br>
    Informacion:
    <input type="text" name="info" id="cantidad" required="required"  class="box"><br> <br>
    Descuento:
    <input type="text" name="descuento" id="cantidad" required="required"  class="box"><br> <br>

		<input type="submit" name="btnAceptar" value="Guardar"  class="boton_personalizado" onclick= "crearProducto()">
		<input type="reset" name="btnCancelar" value="Cancelar"  class="boton_personalizado2" onclick= "cancelar()">
		<br>
		<br>
		<br>
	</form>
    </div>
    </CENTER>
</Boby>
</html>
