<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Edictar Empleados</title>
    <script type="text/javascript" src="productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="modificarUsuario.php" method="post" name="frmRegistro">
		 ID del Usuario:
		<input type="text" name="idUser" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		Nuevo Nombre del Usuario:
		<input type="text" name="nombreUser" id="nombre" class="box" required="required"><br><br>
		Nueva Contraseña:
		<input type="text" name="pass" id="precio" required="required"  class="box"><br> <br>
		Nuevo Tipo de Usuario:
		<input type="text" name="tipoUser" id="cantidad" required="required"  class="box"><br> <br>



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
