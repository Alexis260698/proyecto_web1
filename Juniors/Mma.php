<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Junniors Gym</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Gym.css">


  </head>
  <body>


    <?php

    $lista_servicios = array( );
    $horarioNormal = "";
    $horarioFin ="";
    $precio;
    $nombre_service = strtoupper("mma");
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
                        <li class="nav-item">
                           <a href=" <?php echo $lista_servicios[$contador]; ?>.php" class="nav-link" id="inicio"><?php echo $lista_servicios[$contador]; ?></a>
                         </li>

                        <li class="nav-item">
                           <a href=" <?php echo $lista_servicios[$contador+1]; ?>.php" class="nav-link" id="spin"><?php echo $lista_servicios[$contador+1]; ?></a>
                        </li>

                        <li class="nav-item">
                           <a href=" <?php echo $lista_servicios[$contador+2]; ?>.php" class="nav-link" id="area"><?php echo $lista_servicios[$contador+2]; ?></a>
                        </li>

                        <li class="nav-item">
                           <a href=" <?php echo $lista_servicios[$contador+3]; ?>.php" class="nav-link" id="mma"><?php echo $lista_servicios[$contador+3]; ?></a>
                        </li>

                        <li class="nav-item">
                           <a href="conocenos.php" class="nav-link" id="conocenos">Conocenos</a>
                        </li>

                </ul>

          </div>
    </nav> <!--fin del menu-->

<!--Inicio del slide-->
    <div class="container-fluid">
      <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner parrafos-carusel">
        <div class="carousel-item active">
          <img src="img/mma.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo" >
            <h5 style="font-size: 50px">¡¡El Deporte es Vida!!</h5>
              <p>has ejersicio.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/mma2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5 style="font-size: 50px"> ¡¡Entrenadores 100% Capasitados!!</h5>
              <p>con certificaciones en el area de deportes.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/mma3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5 style="font-size: 50px"> ¡¡Aprende Defensa Personal!!</h5>
              <p>Aprende Mohay Tai, Boxeo, King Boxing, TaikKuandow.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>s
        <span class="sr-only">Next</span>
      </a>
    </div>
      </div>

    </div> <!--Fin del slide-->

      <div class="container-Horario container-fluid fondo-transparente">
        <div class="row">
                <div class="col-sm-3 mt-3">
                    <div class="card	bg-light centrar-horario">
                      <div class="card-header	bg-dark text-white text-uppercase">
                        Horarios

                      </div>

                      <div class="card-body">
                        <h5>Lunes - Viernes</h5>
                        <p> <?php echo $horarioNormal ?> </p>
                        <h5>Sabado</h5>
                        <p><?php echo $horarioFin; ?></p>
                        <h5>Domingo</h5>
                        <p><?php echo $horarioFin ?></p>
                      </div>
                    </div>


                    <div class="card	bg-light mt-5  centrar-horario">
                      <div class="card-header	bg-dark text-white text-uppercase">

                        Precios
                      </div>

                      <div class="card-body">
                        <h5>Estudiante</h5>
                        <p><?php
                        $precio1 = $precio -100;
                        echo $precio1 ?></p>
                        <h5>General</h5>
                        <p><?php echo $precio ?></p>
                      </div>
                    </div>

                </div> <!--Fin del formulario Horario-->

                <div class="col-sm-9">
                  <div class="card border-dark mb-3 fondo-transparente" >
                      <div class="card-header" id ="info">Descripción</div>
                        <div class="card-body text-dark" >
                          <p class="card-text">
                            Las artes marciales mixtas (conocida frecuentemente por sus siglas en inglés MMA, de Mixed martial arts)
                            son la combinación de técnicas provenientes de distintas artes marciales y deportes de combate, generalmente
                            se usa para la competición en el deporte de combate pero también para la defensa personal.
                          </p>
                            <br>
                            <h5 class="card-title" style="font-size:35px">Gym:</h5>
                              <p class="card-text">Contamos con los mejores aparatos del momento, todos hechos en fabrica, contamos con pesas, mancuernas,
                               bancos,diversas maquinas, escaladoras, caminadoras, barras ect.</p>

                            <h5 class="card-title">Entrenadores:</h5>
                               <p class="card-text">Contamos con entreadores 100% capasidados para tu apollo.
                               los culaes se encuentran en todo momento a tu disposicion.
                              Tanbien contamos con entrenadores personalizados para que supervicen, formen y aprueven todo tu entrenamiento</p>
                              <br>
                                <h5 class="card-title">Beneficios de practicar artes marciales mixtas.</h5>
                                <p>
                                  <br>  1) Pierdes calorías y ganas condición física.
                                  <br>  2) Reduces el estrés.
                                  <br>  3) Incrementas tu fuerza y resistencia.
                                  <br>  4) Te preparan para defenderte.
                                  <br>  5) Aumentan tu flexibilidad y agilidad.

                                </p>

                        </div>

                  </div>

                </div> <!--Fin del footer text-->


        </div>
      </div>

      <footer>

         <div class="container-footer-all">

              <div class="container-body">

                  <div class="colum1">
                    <h1>Mas informacion de la compañia</h1>

                    <p>Somos un gimnasio de alto prestigio donde te
                       brindamos el mejor servicio, atención, seguridad y
                       responsabilidad con tu cuerpo. Contando con el mejor TEAM.
                     </p>

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
                          <label>4451234512</label>
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

       <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
       <script type="text/javascript" src="js/bootstrap.min.js"> </script>

  </body>
</html>
