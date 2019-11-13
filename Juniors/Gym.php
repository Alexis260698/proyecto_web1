
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

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    			<a href="#" class="navbar-brand" id="titulo">Gym</a>
    			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-Menu" aria-controls="navbar-Menu"	aria-expanded="false">
    					<span class="navbar-toggler-icon"></span>
    			</button>

    			<div class="collapse navbar-collapse" id="navbar-Menu">
    						<ul class="navbar-nav mr-auto">
    										<li class="nav-item">
    											 <a href="Gym.php" class="nav-link" id="inicio">Inicio</a>
    										 </li>

    										<li class="nav-item">
    											 <a href="Spinning.html" class="nav-link" id="spin">Spinning</a>
    										</li>

                        <li class="nav-item">
                           <a href="areaNiños.html" class="nav-link" id="area">Area para Niños</a>
                        </li>

                        <li class="nav-item">
                           <a href="Mma.php" class="nav-link" id="mma">MMA</a>
                        </li>

                        <li class="nav-item">
                           <a href="areaNiños.php" class="nav-link" id="conocenos">Conocenos</a>
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
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/areaPierna.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo" >
            <h5 style="font-size: 50px">¡¡ Vive la Experiencia !!</h5>
              <p>Se Parte de Junniors GYM.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/jaula.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <h5> 1 ¡¡ Vive la Experiencia !!</h5>
              <p>La mejores instalaciones.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/areaPecho.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block color-fondo">
            <p class="texto-negritas" style="font-weight:900">¡¡ Vive la Experiencia !!</p>
              <p>Los mejores aparatos</p>
          </div>
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

    </div> <!--Fin del slide-->

      <div class="container-Horario container-fluid">
        <div class="row">
                <div class="col-sm-2 mt-2">
                    <div class="card	bg-light">
                      <div class="card-header	bg-dark text-white text-uppercase">
                        Horarios

                      </div>

                      <div class="card-body">
                          <h5>Lunes - Viernes</h5>
                          <p>6:00 am - 10:30 pm</p>
                          <h5>Sabado</h5>
                          <p>6:30 am - 2:00 pm</p>
                          <h5>Domingo</h5>
                          <p>9:30 am - 12:00 pm</p>
                      </div>
                    </div>


                    <div class="card	bg-light mt-5">
                      <div class="card-header	bg-dark text-white text-uppercase">
                        Presios

                      </div>

                      <div class="card-body">
                          <h5>Estudiante</h5>
                          <p>$300</p>
                          <h5>General</h5>
                          <p>$350</p>
                      </div>
                    </div>

                </div> <!--Fin del formulario Horario-->

                <div class="col-sm-10">
                  <div class="card border-dark mb-3 fondo-transparente" >
                      <div class="card-header" id ="info">Descripción</div>
                        <div class="card-body text-dark" >
                          <p class="card-text">
                            Se denomina gimnasio a un establecimiento en donde la gente se reúne para realizar actividad física.
                            Los gimnasios suelen disponer diversos elementos dispuestos para este fin como por ejemplo pesas, juegos
                            de poleas, cintas para correr, etc. Suelen tener también instructores que especifican que tipo de ejercicio
                            es el más recomendado para la situación de cada persona.
                          </p>
                            <br>
                            <h5 class="card-title">Gym:</h5>
                              <p class="card-text">Contamos con los mejores aparatos del momento, todos hechos en fabrica, contamos con pesas, mancuernas,
                               bancos,diversas maquinas, escaladoras, caminadoras, barras ect.</p>

                            <h5 class="card-title">Entrenadores:</h5>
                               <p class="card-text">Contamos con entreadores 100% capasidados para tu apollo.
                               los culaes se encuentran en todo momento a tu disposicion.
                              Tanbien contamos con entrenadores personalizados para que supervicen, formen y aprueven todo tu entrenamiento</p>
                              <br>
                              <p>
                                7 Beneficios de ir al gimnasio.
                              </p>
                              <p>
                                1 Hacer ejercicio nos hace sentir bien.
                              </p>
                              <p>
                                2 El ejercicio físico es un antidepresivo natural.
                              </p>

                              <p>
                                3 El ejercicio regular nos proporciona más energía.
                              </p>

                              <p>
                                4 El ejercicio te hará dormir mejor.
                              </p>
                              <p>
                                5 Mejora los problemas de corazón.
                              </p>

                              <p>
                                6 Refuerza tus músculos y huesos.
                              </p>
                              <p>
                                  7 El ejercicio disminuye el estrés.
                              </p>

                        </div>

                  </div>

                </div> <!--Fin del footer text-->


        </div>
      </div>

      <div class="contenedor-comida" style="background-color: white">
        <p>Alimentos ricos en proteína

Asimismo, las proteínas están compuesta de aminoácidos. Existen 20 tipos de éstos que forman parte de las proteínas, y diferenciarse en aminoácidos esenciales y no esenciales. Los esenciales no los produce el cuerpo por lo que hay que conseguirlos a través de la dieta. Pero, ¿qué alimentos son más ricos en proteínas?

En este artículo te presentamos una lista de 25 alimentos con mayor cantidad de este macronutriente.
1. Cacahuetes

Los cacahuetes son un “snack” ideal con gran contenido en proteínas. Pero, además, son ricos en fibra o magnesio. Muchos estudios sugieren que es un alimento óptimo para perder grasa, y esto se debe a que poseen una gran cantidad de grasas monoinsaturadas, conocidas como grasas buenas.

    Artículo relacionado: "Tipos de grasas (buenas y malas) y sus funciones"

También es posible beneficiarse de este alimento consumiendo manteca de cacahuete, que, además de ser igual de nutritiva, está deliciosa. Contiene un 16% de sus calorías en proteínas: en 28 gramos del producto (159 calorías) 7 gramos son proteínas.
2. Gambas

Ahora ya tienes excusa cada vez que te vas de tapas. Porque las gambas, además de ser un alimento muy sabroso, son ricas en proteína. Las gambas son bajas en calorías, no obstante, contienen numerosos nutrientes. Por ejemplo: selenio, vitamina B12 y grasa omega 3. El contenido en proteínas es del 90%. En 85g (84 calorías), 18 son proteínas.
3. Soja

La soja es una fuente vegetal de proteínas y contiene la mayoría de aminoácidos esenciales a excepción de la metionina. Sin embargo, si mezclamos la leche de soja con cereales es posible nutrirse con este aminoácido faltante. 100g de esta legumbre contienen 15.7g de proteína.
4. Leche

La soja es posible consumirla como semillas de soja o como leche de soja. Pero la leche normal también contiene gran cantidad de proteínas. De hecho, la leche de vaca contiene gran cantidad de nutrientes necesarios para nuestro organismo. Es rica en calcio, fósforo y riboflavina. 149 calorías contienen 8 gramos de proteínas.
5. Salmón

El salmón está compuesto por gran cantidad de proteínas y, además, aporta grasas poliinsaturadas como los ácidos grasos omega-3. Ahora bien, esto también es aplicable con el resto de pescados, pues todos tienen un alto contenido proteico. Algunos contienen más grasas, por ejemplo la caballa, y otros menos, como la merluza. 85g de salmón contienen 19g de proteína.
6. Pechuga de pavo

La pechuga de pavo es un excelente alimento con gran contenido en proteínas. Puesto que contiene poca grasa, también es un alimento ideal para la pérdida de peso.

    Artículo relacionado: "24 alimentos quemagrasas (y altamente saludables)"

Una comida con 85g de pechuga de pavo contiene 24g de proteínas y 146 calorías.
7. Pechuga de pollo

Otra opción, igualmente saludable que la anterior, es la pechuga de pollo, un alimento rico en proteínas y con un bajo contenido calórico. Prácticamente el 80% de sus calorías provienen de las proteínas. 100g de pechuga de pollo contienen 22g de este macronutriente.
8. Avena

La avena es un cereal con un tiene un alto contenido en fibra, lo causa que el metabolismo se acelere y te sientas más lleno. Pero, asimismo, este delicioso cereal también es rico proteínas y contiene numerosos minerales y antioxidantes. En media taza de avena hay 13g de proteínas.
9. Huevos

Existe cierta controversia sobre el colesterol y el consumo de huevos.Pero éste es un alimento sano, rico en vitaminas, minerales y antioxidantes, que no debe faltar en la dieta. Sin lugar a dudas, es la mejor fuente proteica que existe, conteniendo todos los aminoácidos esenciales, en otras palabras, proteínas con alto valor biológico.
Huevos
10. Almendras

Si antes había hablado de los cacahuetes, las almendras también son un alimento rico en proteínas que además incluye numerosos nutrientes como fibra, vitamina E y magnesio. En 28g de almendras hay 6g de proteínas y 161 calorías.
11. Requesón (light)

El requesón es un tipo de queso que en su versión normal contiene mucha grasa. Sin embargo,la versión light está muy recomendada por ser un alimento con alto contenido en un tipo de proteína llamada caseína.

La caseína es una proteína de absorción lenta por lo que es ideal para tomar por la noche si practicas ejercicio físico. Asimismo, contiene un nivel alto de glutamina.

    Si quieres saber más sobre este aminoácido, puedes visitar nuestro post: "Glutamina (aminoácido): características y funciones".</p>

      </div>


      <footer>

         <div class="container-footer-all">

              <div class="container-body">

                  <div class="colum1">
                      <h1>Mas informacion de la compañia</h1>

                      <p>Esta compañia se dedica al desarrollo se software de software con un
                      conjunto de cosas que no se lo que estoy escribiendo, este
                      texto es solo para llenara informacion en el cuadro de informacion
                      de la compañia.</p>

                  </div>

                  <div class="colum2">

                      <h1>Redes Sociales</h1>

                      <div class="row">
                          <img src="icon/facebook.png">
                          <label>Junior's GYM #Moroleón.</label>
                      </div>
                      <div class="row">
                          <img src="icon/twitter.png">
                          <label>Siguenos en Twitter</label>
                      </div>
                      <div class="row">
                          <img src="icon/instagram.png">
                          <label>juniors_gym</label>
                      </div>
            <!--          <div class="row">
                          <img src="icon/google-plus.png">
                          <label>Siguenos en Google Plus</label>
                      </div>
                      <div class="row">
                          <img src="icon/pinterest.png">
                          <label>Siguenos en Pinteres</label>
                      </div>
            -->

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
                          <label>+1-829-395-2064</label>
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
