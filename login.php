<?php 
	 session_start();
  //COMPRUEBA LA EXITENCIA Y EL TIPO DE USUARIO
  if (isset($_SESSION['usuario'])) {
    header("Location:menu.php");
  } else{
    
  }	
	 include 'conexion.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
	</div>
	<form method="POST">
	<div class="login-yea">
	<div class="cardinas">
	<div class="card" style="width: 100%">
  		<div class="card-header" style="background-color:#3949AB;">
  		</div>
  		<div class="card-body">
    		<h5 class="card-title">Inicio de sesión</h5>
			<div class="input-group mb-3">
  				<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1"><script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
					<lottie-player
    				src="https://assets1.lottiefiles.com/packages/lf20_O711lP.json"  background="transparent"  speed="1"  style="width: 20px; height: 20px;"  loop  autoplay >
					</lottie-player></span>
  				</div>
  				<input type="text" class="form-control" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1" name="usu">
			</div>
			<div class="input-group mb-3">
  				<div class="input-group-prepend">
    				<span class="input-group-text" id="basic-addon1"><img src="CSS/candado.png"></span>
  				</div>
  				<input type="password" class="form-control" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1" name="password">
			</div>
			<input type="submit" value="Iniciar" class="btn-azul">
  		</div>
  		</div>
  		</div>
		<center>
  		<img src="CSS/logo-provi.png" width="200px" style="margin-left: 50px;margin-top: 30px;">
  		</center>
	</div>
	</form>
</body>
</html>
<?php 

	if ($_POST) {
	
	//USUARIO
	$user = $_POST['usu'];
	//CONTRASEÑA
	$pass = $_POST['password'];

	if(empty($user) || empty($pass)) {

	}else{
		$query = mysqli_query($conexion,"SELECT * FROM `usuarios`  WHERE usuario = '".$user."'");

		if ($row = mysqli_fetch_array($query)) {

			if ($row['password'] == $pass) {

				$_SESSION['usuario'] = $row['usuario'];
				header("location:menu.php");

			}

		}
	}

	}

 ?>