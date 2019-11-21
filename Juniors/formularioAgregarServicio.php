<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Registro de Servicio</title>
    <script type="text/javascript" src="js/productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="agregarServicio.php" method="post" name="frmRegistro">
		 Nombre del Servicio:
		<input type="text" name="nombreServicio" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		 Precio:
		<input type="text" name="precio" id="password"  class="box" required="required"><br> <br>
		Horario Entresemana:
		<input type="text" name="Hentre" id="tipo"  class="box" required="required"><br> <br>
		Horario Fin de Semana:
		<input type="text" name="Hfin" id="tipo"  class="box" required="required"><br> <br>

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
