<?php  

  session_start();
  //COMPRUEBA LA EXITENCIA Y EL TIPO DE USUARIO
  if (isset($_SESSION['usuario'])) {
    
  } else{
    header("Location:index.php");
  }

  include 'conexion.php';

  $v1 = $_GET['dino'];
  $v2 = $_GET['roger'];
  $v3 = $_GET['numerito'];
  $numero = $_GET['nivel'] + 1;

  $result = mysqli_query($conexion,"SELECT * FROM `juego1` WHERE id_nivel = '".$v1."' AND `numero` = '".$numero."' ");

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
  <h2 style="color: white;margin-left: 20px;padding-bottom: 20px;"><a href="tema.php?roger=<?php  echo $v2 ?>"><?php  echo $v3 ?></a></h2>
</div>

<form method="POST">
<div class="juego">
  <div class="card" style="width: 400px;" >
  <div class="card-header" style="background-color:  #3949AB; color: white;display: flex;justify-content: space-between;">
   <h5>Problema <?php  echo $mostrar['numero'] ?></h5>
   <img src="CSS/help.png">
  </div>
  <div class="card-body" id="bo">
    <h6 class="card-title">Resuelve la siguiente multiplicación:</h6>
    <div style="width: 100%;display: flex;justify-content: center;">
    <h3 class="card-text"><?php  echo $mostrar['oper'] ?> = </h3>
    <input type="text" class="form-control" placeholder="Respuesta" aria-label="Respuesta" aria-describedby="basic-addon1" style="width: 70%;margin-left: 10px;" readonly="readonly">
    </div>
    <br>
    <div style="justify-content: center;display: flex;">
    <input type="button" class="btn btn-primary" id="1" onclick="veri1()" value="<?php  echo $mostrar['respuesta1'] ?>" style="width: 100px;margin-right:10px;">
    <input type="button" class="btn btn-primary" id="2" onclick="veri2()" value="<?php  echo $mostrar['respuesta2'] ?>" style="width: 100px;margin-right:10px;">
    <input type="button" class="btn btn-primary" id="3" onclick="veri3()" value="<?php  echo $mostrar['respuesta3'] ?>" style="width: 100px;margin-right:10px;">
    </div>
  </div>
  <div class="roger" id="ger">
     <h4 style="margin:10px;">Bien</h4>
     <input type="button" name="yes" value="Siguiente" class="btn btn-success" style="margin:10px;" onclick="location.href='actividades.php?dino=<?php  echo $v1 ?>&&roger=<?php echo $v2 ?>&&nivel=<?php echo $numero ?>&&numerito=<?php echo $v3 ?>'">
  </div>
    <div class="ro" id="ro">
     <h4 style="margin:10px;">vuelve a intentarlo</h4>
  </div>
   <div class="card-body" id="gero" style="display: none;">
     <h5 class="card-text">Actividad completada</h5>
      <input type="button" name="yes" value="Terminar" class="btn btn-success" style="margin:10px;" onclick="location.href='tema.php?roger=<?php echo $v2 ?>&&numerito=<?php echo $v3 ?>'">
  </div>
</div>
</div>
</form>
  <script type="text/javascript">

    var respuesta = "<?php  echo $mostrar['solucion'] ?>";
    function veri1(){

      
      var dato = document.getElementById('1').value;

      if (respuesta==dato) {
        document.getElementById("ro").style.display="none";
        document.getElementById("ger").style.display="flex";
      }else{
        document.getElementById("ger").style.display="none";
        document.getElementById("ro").style.display="flex";
      }


    }
    function veri2(){

      
      var dato = document.getElementById('2').value;

      if (respuesta==dato) {
        document.getElementById("ro").style.display="none";
        document.getElementById("ger").style.display="flex";
      }else{
        document.getElementById("ger").style.display="none";
        document.getElementById("ro").style.display="flex";
      }


    }
    function veri3(){

      
      var dato = document.getElementById('3').value;

      if (respuesta==dato) {
        document.getElementById("ger").style.display="flex";
        document.getElementById("ro").style.display="none";
      }else{
        document.getElementById("ger").style.display="none";
         document.getElementById("ro").style.display="flex";
      }


    }

      var numero = <?php echo $numero ?>;
      if (numero==11) {
          document.getElementById('bo').style.display='none';
          document.getElementById('gero').style.display='flex';
       }


  </script>

</body>
</html>