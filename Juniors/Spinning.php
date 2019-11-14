<?php  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/Spinning.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Gym.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"> </script>
	<title>Spinning</title>
</head>

<body>

			<!-- CODIGO PARA NAVBAR -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #333333">
			<a href="#" class="navbar-brand">Spinning</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false"> 
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarMenu">
				<ul class="navbar-nav mr-auto">
					<li class="btn btn-link">
						<a href="index.php" class="nav-link">Inicio</a>
					</li>
					<li class="btn btn-link">
						<a href="Gym.php" class="nav-link">Gym</a>
					</li>
					<li class="btn btn-link">
						<a href="areaNiños.html" class="nav-link">Área de Niños</a>
					</li>
					<li class="btn btn-link">
						<a href="#" class="nav-link">Zumba</a>
					</li>
					<li class="btn btn-link">
						<a href="#" class="nav-link">MMA</a>
					</li>
					<li class="btn btn-link">
						<a href="#" class="nav-link">Conocenos</a>
					</li>
				</ul>
			</div>
	</nav>
	<!--FIN NAV BAR-->

	<div class="row">
		<div class="col">
			<div class="mt-5">
				<h1 class="title" align="center">Spinning</h1> 
			</div>
		</div>	
	</div>

	<div class="col-sm-12">
        <div class="card border-dark mb-3 fondo-transparente" >
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

</body>
</html>