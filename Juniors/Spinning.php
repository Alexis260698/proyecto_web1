<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/spin.css">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"> </script>
	<title>Spinning</title>
</head>

<body>

			<!-- CODIGO PARA NAVBAR -->
			<?php

	    $lista_servicios = array( );
	    $horarioNormal = "";
	    $horarioFin ="";
	    $precio;
	    $nombre_service = strtoupper("spinning");
	$contador=0;

	             include ("calis.php");
	             $query="SELECT * FROM servicio";
	             $resultado=$conexion->query($query);

	             while ($row=$resultado->fetch_assoc()) {

	               $lista_servicios[$contador] = $row['nombre'];
	               $evaluar = strtoupper($row['nombre']);
	               if ($nombre_service == $evaluar) {
	                 $horarioNormal = $row['horarioNormal'];
	                 $horarioFin = $row['horarioFin'];
	                 $precio = $row['precio'];
	               }

	               $contador++;
	        }

	        $contador = 0;
	?>

	    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	          <a href="index.html" class="navbar-brand" id="titulo">Inicio</a>
	          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-Menu" aria-controls="navbar-Menu"	aria-expanded="false">
	              <span class="navbar-toggler-icon"></span>
	          </button>


						              			<div class="collapse navbar-collapse" id="navbar-Menu">
						              						<ul class="navbar-nav mr-auto">

						                            <?php

						                                for ($i=0; $i < count($lista_servicios); $i++) {


						                             ?>


						              										<li class="nav-item">
						              											 <a href="<?php echo $lista_servicios[$i]; ?>.php" class="nav-link" id="inicio"><?php echo $lista_servicios[$i]; ?></a>
						              										 </li>

						                            <?php
						                                  }

						                            ?>

						                                  <li class="nav-item">
						                                     <a href="conocenos.php" class="nav-link" id="conocenos">Conocenos</a>
						                                  </li>

						              						</ul>

						              			</div>
						    </nav> <!--fin del menu-->
	<!--FIN NAV BAR-->

	<div class="row">
		<div class="col">
			<div class="mt-5">
				<h1 class="title" align="center">Spinning</h1>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
        <div class="card border-dark mb-3 fondo-transparente">
            <div class="card-header" id ="info">Sabias que...</div>
                <div class="card-body text-dark" >
                    <p class="card-text">
                        <li>
                         Mejora el metabolismo, ya que el cuerpo aprende a quemar grasas a la vez que entrena. Y seguirás quemando después de clase.
                        </li>
                        <li>
                        Aumenta la resistencia cardiaca, lo que nos ayuda a prever patologías cardíacas y se tonifica el corazón.
                        </li>
                    </p>
            </div>
        </div>
    </div>

    <h3 class="conoce">Conoce nuestra zona de Spinning</h3>
     <div class="container-fluid">
      <div class="col-md-12-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Spinning.jpeg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5>Contamos con zona para Spinning</h5>
              <p>Se Parte de Junior's GYM.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/Spinning 1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Spinning 2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Spinning 3.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      </div>
    </div>

<div class="tipos">
  <img src="img/tiposclases.PNG">
</div>


     <div class="container-Horario container-fluid fondo-transparente">
        <div class="row">
                <div class="col-sm-2 mt-2">
                    <div class="card  bg-light">
                      <div class="card-header bg-dark text-white text-uppercase">
                        Horarios
                      </div>
                      <div class="card-body hora">
												<h5>Lunes - Viernes</h5>
                        <p> <?php echo $horarioNormal ?> </p>
                        <h5>Sabado</h5>
                        <p><?php echo $horarioFin; ?></p>
                        <h5>Domingo</h5>
                        <p><?php echo $horarioFin ?></p>
                      </div>
                    </div>


                    <div class="card bg-light mt-5">
                      <div class="card-header bg-dark text-white text-uppercase">
                        Precios
                      </div>

                      <div class="card-body hora">
												<h5>Estudiante</h5>
												<p><?php
												$precio1 = $precio -100;
												echo $precio1 ?></p>
												<h5>General</h5>
												<p><?php echo $precio ?></p>
                      </div>
                    </div>

                </div> <!--Fin del formulario Horario-->

                <div class="col-sm-10">
                  <div class="card border-dark mb-3 fondo-transparente" >
                      <div class="card-header" id ="info">Mas info...</div>
                        <div class="card-body text-dark" >
                          <p class="card-text">
                           En cada clase de Spinning vivirás una experiencia de cycling en donde puedes conectar mente y cuerpo. Además de ser un ejercicio completo y funcional de cardio y fuerza, llevarás tu cuerpo más allá de lo que piensas que es tu límite.
                          </p>
                            <br>
                            <h5 class="card-title" style="font-size:35px">Contamos con:</h5>
                            <li>Más de 15 bicicletas</li>
                            <li>Instructor para clases</li>
                            <li>Calidad de clases</li>
                            <li>Clases dinamicas</li>

                              <br>
                               <h5 class="card-title"  style="font-size:35px">Beneficios:</h5>
                                  <ol>
                                    Permite fortalecer y tonificar nuestro tren inferior.
                                  </ol>
                                  <ol>
                                    Las sesiones de spinning combinan entrenamiento aeróbico y anaeróbico gracias a los cambios de ritmo.
                                  </ol>
                                  <ol>
                                    Quema grasa y reduce el volumen.
                                  </ol>
                                  <ol>
                                    Si se realiza de forma adecuada, cuidando sobre todo la postura sobre la bici, se trabaja muy intensamente el core (la zona abdominal).
                                  </ol>
                                  <ol>
                                    El spinning es un muy buen remedio anti-stress: aparte de la producción de endorfinas que conseguimos a través del ejercicio, favorece la concentración.
                                  </ol>
                          </div>
                  </div>
              </div>
      </div>
</div>

 <footer>
         <div class="container-footer-all">
              <div class="container-body">
                  <div class="colum1">
                      <h1>Mas informacion de la compañia</h1>
                      <p>Somos un gimnasio de alto prestigio donde te
                          brindamos el mejor servicio, atención, seguridad y
                          responsabilidad con tu cuerpo. Contando con el mejor TEAM.</p>
                  </div>
                  <div class="colum2">
                      <h1>Redes Sociales</h1>
                      <div class="row">
                          <img src="icon/facebook.png">
                          <a href="https://web.facebook.com/pg/Juniors-GYM-Morole%C3%B3n-334210720387183/posts/" style="color: white">
                            Junior's GYM #Moroleón.
                          </a>
                      </div>
                      <div class="row">
                          <img src="icon/instagram.png">
                          <a href="http://www.instagram.com/juniors_gym/"
                          style="color: white">Juniors_gym</a>
                      </div>
                  </div>

                  <div class="colum3">

                      <h1>Informacion Contacto</h1>

                      <div class="row2">
                          <img src="icon/house.png">
                          <label>Calle defensores de moroleon #4A
                            38800 Moroleón</label>
                      </div>

                      <div class="row2">
                          <img src="icon/smartphone.png">
                          <label>445</label>
                      </div>

                      <div class="row2">
                          <img src="icon/contact.png">
                           <label>s16120271@alumnos.itsur.edu.mx</label>
                      </div>

                  </div>

              </div>

          </div>

          <div class="container-footer">
                 <div class="footer">
                      <div class="copyright">
                          © 2019 Todos los Derechos Reservados | <a href="">ITSUR</a>
                      </div>

                      <div class="information">
                          <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                      </div>
                  </div>

              </div>

      </footer>

</body>
</html>
