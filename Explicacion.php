<?php  

  session_start();
  //COMPRUEBA LA EXITENCIA Y EL TIPO DE USUARIO
  if (isset($_SESSION['usuario'])) {
    
  } else{
    header("Location:index.php");
  }
  $v1 = $_GET['dino'];
  $v2 = $_GET['roger'];
  include 'conexion.php';

  $result = mysqli_query($conexion,"SELECT * FROM `niveles` WHERE id_nivel = '".$v1."'");

  $mostrar= mysqli_fetch_array($result);

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
  <h2 style="color: white;margin-left: 20px;padding-bottom: 20px;"><?php  echo utf8_encode($mostrar['titulo']) ?></h2>
</div>
  <div class="turibus">
    <div class="iz-ex">
      <center>
          <?php  echo $mostrar['video'] ?>
          </center>
    </div>
    <div class="dr-ex">
      <center>
        <?php  echo $mostrar['img']?>
        <br><br>
        <input type="button" class="btn-azul" value="Practicas" onclick="location.href='actividades.php?dino=<?php  echo $v1 ?>&&roger=<?php echo $v2 ?>&&nivel=<?php echo 0 ?>&&numerito=<?php echo utf8_encode($mostrar['titulo']) ?>'">
        </center>
    </div>
  </div>
  <br>
</body>
</html>