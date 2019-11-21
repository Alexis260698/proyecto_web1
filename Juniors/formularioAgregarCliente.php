<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Registro de Clientes</title>
    <script type="text/javascript" src="js/productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="agregarCliente.php" method="post" name="frmRegistro">
    Nombre del Usuario:
    <input type="text" name="usuario" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		 Nombre del Cliente:
		<input type="text" name="nombre" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		 Apellido Paterno:
		<input type="text" name="apellidoP" id="password"  class="box" required="required"><br> <br>
		Apellido Materno:
		<input type="text" name="apellidoM" id="tipo"  class="box" required="required"><br> <br>
		informacion:
		<input type="text" name="info" id="tipo"  class="box" required="required"><br> <br>
		Descuento:
		<input type="text" name="descuento" id="tipo"  class="box" required="required"><br> <br>

		<input type="submit" name="btnAceptar" value="Guardar"  class="boton_personalizado" >
		<input type="reset" name="btnCancelar" value="Cancelar"  class="boton_personalizado2" >
		<br>
		<br>
		<br>
	</form>
    </div>
    </CENTER>
</Boby>
</html>
