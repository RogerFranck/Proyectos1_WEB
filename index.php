<?php 
	session_start();
  //COMPRUEBA LA EXITENCIA Y EL TIPO DE USUARIO
  if (isset($_SESSION['usuario'])) {
    header("Location:menu.php");
  } else{
    
  }	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/btn-duo.css">
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
	<link rel="shortcut icon" href="CSS/favicon.ico" type="image/x-icon" />
</head>
<body>
	<div class="fondo">
	<nav class="navbar">
  		<a class="naval naval-tit" href="index.php">Roger´s</a>
  		<div class="nav-dr">
  			<a href="registro.php" class="naval">Crear cuenta</a>
  			<a href="login.php" class="naval">Ya tengo cuenta</a>
  		</div>
	</nav>
	<div class="descri">
		<center>
		<h1>Aprende con Roger´s</h1>
		<h3>Mejora tus habilidades con el nuevo sistema de educación online</h3>
		<br>
		<img src="CSS/dinoway.png" width="200px">
		</center>
	</div>
	</div>
	<div class="Iconoschidos">
			<div><img src="CSS/mas.png" width="100px;" class="hijoflex"><center><h4>Sumar</h4></center></div>
			<div><img src="CSS/multiplicar.png" width="100px;" class="hijoflex"><center><h4>Multiplicar</h4></center></div>
			<div><img src="CSS/division.png" width="100px;" class="hijoflex"><center><h4>Dividir</h4></center></div>
			<div><img src="CSS/menos.png" width="100px;"class="hijoflex"><center><h4>Restar</h4></center></div>
	</div>
	<!--<div>Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>-->
</body>
</html>