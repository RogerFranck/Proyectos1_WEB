<?php  

  session_start();
  //COMPRUEBA LA EXITENCIA Y EL TIPO DE USUARIO
  if (isset($_SESSION['usuario'])) {
    
  } else{
    header("Location:index.php");
  }

  $conexion = mysqli_connect("localhost","root","","rogers") or die ("problemas con la conexion");


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
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
  <link rel="stylesheet" type="text/css" href="CSS/menu.css">
  <link rel="shortcut icon" href="CSS/favicon.ico" type="image/x-icon" />
</head>
<body>
	<div class="fondo">
 <?php include 'nav.php';?>
  <h2 style="color: white;margin-left: 20px;padding-bottom: 20px;">Tabla del 1</h2>
</div>
<div class="juego">
  <div class="card" style="width: 400px;" >
  <div class="card-header" style="background-color:  #3949AB; color: white;display: flex;justify-content: space-between;">
   <h5>Problema 1</h5>
   <img src="CSS/help.png">
  </div>
  <div class="card-body">
    <h6 class="card-title">Resuelve la siguiente multiplicación:</h6>
    <div style="width: 100%;display: flex;justify-content: center;">
    <h3 class="card-text">1x5 = </h3>
    <input type="text" class="form-control" placeholder="Respuesta" aria-label="Respuesta" aria-describedby="basic-addon1" style="width: 70%;margin-left: 10px;">
    </div>
    <br>
    <div style="justify-content: center;display: flex;">
    <input type="button" class="btn btn-primary" value="5" style="width: 100px;margin-right:10px;">
    <input type="button" class="btn btn-primary" value="2" style="width: 100px;margin-right:10px;">
    <input type="button" class="btn btn-primary" value="9" style="width: 100px;margin-right:10px;">
    </div>
  </div>
</div>
</div>
</body>
</html>