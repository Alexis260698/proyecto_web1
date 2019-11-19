<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Registro de Empleados</title>
    <script type="text/javascript" src="js/productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="agregarUsuario.php" method="post" name="frmRegistro">
		 Nombre del Uusario:
		<input type="text" name="nombreUsuario" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		 Contraseña:
		<input type="password" name="pass" id="password"  class="box" required="required"><br> <br>
		Tipo de Usuario:
		<input type="text" name="tipoUsuario" id="tipo"  class="box" required="required"><br> <br>
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
