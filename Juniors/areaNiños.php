<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/AreaNiños.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Gym.css">
	<title>Area de Niños</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"> </script>

    </head>
<body>
	<!-- CODIGO PARA NAVBAR -->
	<?php

	$lista_servicios = array( );
	$horarioNormal = "";
	$horarioFin ="";
	$precio;
	$nombre_service = strtoupper("Area para niños");
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

	<!--Titulo e imagen -->
	<div class="row">
		<div class="col">
			<div class="mt-5">
				<h1 class="display-4" align="center">Área de Niños</h1>
			</div>
		</div>
	</div>
	<!--Fin titulo e imagen-->

       <div class="col-sm-12">
                  <div class="card border-dark mb-3 fondo-transparente" >

                        <div class="card-body text-dark" >
                          <p class="card-text justificar" style="color: gray">
                            Contamos con área para niños en donde se pueden divertir y entretener jugando seguros mientras tu entrenas. Contamos con una gran cantidad de juegos y una alberca de pelotas para tus niños.
                          </p>
                        </div>
                  </div>
                </div>

			<!-- Slider -->
	  <div class="container-fluid">
      <div class="col-md-12-sm-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Niños.jpeg" class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5>Contamos con Área para tus niños</h5>
              <p>Se Parte de Junior's GYM.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="img/Niños 2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Niños 3.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Niños 4.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/Niños 5.jpeg" class="d-block w-100" alt="...">
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
    <!-- Fin Slider-->

            <div class="container-Horario container-fluid">
        <div class="row">
                <div class="col-sm-2 mt-2">
                    <div class="card  bg-light mt-5">
                      <div class="card-header bg-dark text-white text-uppercase">
                        Precios
                      </div>
                      <div class="card-body">
                          <h4>Por hora</h4>
                          <p><?php echo $precio ?></p>
                          <p>Tus hijos podran disfrutar de nuestras instalaciones de juegos</p>
                      </div>
                    </div>

                </div> <!--Fin del formulario Horario-->

                <div class="col-sm-10">
                  <div class="card border-dark mb-3 fondo-transparente" >
                      <div class="card-header" id ="info">Nuestra área de Niños cuenta con:</div>
                        <div class="card-body text-dark" >
                         <li>
                           Alberca de pelotas
                         </li>
                         <li>
                           Juegos muy completos
                         </li>
                          <li>
                           Lugar para poner tus zapatos
                         </li>
                          <li>
                           Tuneles
                         </li>
                          <li>
                           Colgantes
                         </li>
                          <li>
                           Resbaladillas
                         </li>
                          <li>
                           Área muy grande para poder jugar
                         </li>
                            <br>
                            <h5 class="card-title" style="font-size:35px">Importancia del Área de Niños</h5>
                              <p class="card-text justificar">El gimnasio Junior's Gym de Moroleón esta pensado para que los padres que tengan hijos y no tengan tiempo de entrar puedan acudir con nosotros por eso hemos diseñado un área especial para que los pequeñines puedan gozar de la experiencia y divertirse con la seguridad debida.</p>

                               <p class="card-text justificar">
                                 Un lugar con un área infantil bien diseñada, no solo le brinda a los padres la seguridad que buscan, sino que propicia la convivencia familiar, ya que es una espacio que permite que los adultos entrenen tranquilamente, mientras sus hijos se divierten de forma sana.
                               </p>
                        </div>
                  </div>
                </div>
                <!--Fin del footer text-->
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
