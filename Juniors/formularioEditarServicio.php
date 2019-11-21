<!DOCTYPE html>
<html>
<head>

	<meta charset=UTF-8>
    <title>Editar Servicio</title>
    <script type="text/javascript" src="productoFormulario.js"></script>
    <link rel="stylesheet" type="text/css" href="estiloFormularios.css">
</head>
<Boby>

<div class="head">

<center><h1>  </h1></center>

</div>

	<CENTER>
	<div class="body"> <br><br>
	<form action="modificarServicio.php" method="post" name="frmRegistro">
		 ID del Servicio:
		<input type="text" name="idser" id="nombre" class="box" autofocus="autofocus" required="required"><br><br>
		Nuevo Nombre del Servicio:
		<input type="text" name="nombre" id="nombre" class="box" required="required"><br><br>
		Nueva Precio:
		<input type="text" name="precio" id="precio" required="required"  class="box"><br> <br>
		Nuevo Horario Normal:
		<input type="text" name="Hentre" id="cantidad" required="required"  class="box"><br> <br>
    Nuevo Horario Fin de Semana:
    <input type="text" name="Hfin" id="cantidad" required="required"  class="box"><br> <br>

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
