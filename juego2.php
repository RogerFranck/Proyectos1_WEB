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
  $numero = rand(1, 10);
  $numero2 = rand(1, 100);

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
        <style type="text/css">
          #esfera,
          #esfera2 {
              position: relative;
              display: block;
              width: 100px;
              height: 100px;
              background: red;
              color: #fff;
              border-radius: 50%;
              text-align: center;
              cursor: pointer;
          }

          #esfera2 {
            right: 0;
            position: absolute;
            background: purple;
          }
   
          #lienzo{
              width: 100%;
              height: 500px;
              border: 1px solid gray;
              box-shadow: 0px 0px 20px gray inset;
              border-radius: 20px;
              overflow: hidden;
              position: relative;
          }

          .pregunta {
            font-size: 35px;
          }

          .numero {
            padding: 24px 0px;
            font-size: 45px;
            margin: 0;
          }

          .respuesta {
            font-size: 80px;
            position: fixed;
            top: calc(50% - 40px);
            text-align: center;
            margin: 0 auto;
            width: 100%;
            visibility: hidden;
          }

          .visible {
            visibility: visible;
          }
      </style>
      <script type="text/javascript">
   
          //Definimos las variables:
      var ejeY      = 0;
      var ejeX      = 0;
      var controlY  = 1; 
      var controlX  = 1; 
      var velocidad = 1;
   
          var intervalo = setInterval("mover()", 6);
   
          function mover() {

              if(controlY == 1)
                  ejeY+= velocidad;

              else       
                  ejeY-= velocidad;

              if(ejeY <= 0) {

          controlY = 1;
          ejeY     = 0;

              } else if(ejeY >= document.getElementById("lienzo").offsetHeight - 100) {
   
          controlY = 0;
          ejeY     = document.getElementById("lienzo").offsetHeight - 100;
              }
   
              //Eje X
              if(controlX == 1)
                  ejeX += velocidad;

              else        
                  ejeX -= velocidad;

              if(ejeX <= 0) {

          controlX = 1;
          ejeX     = 0;

              } else if(ejeX >= document.getElementById("lienzo").offsetWidth - 100) {

          controlX = 0;
          ejeX     = document.getElementById("lienzo").offsetWidth - 100;
              }

        document.getElementById("esfera").style.left = String(ejeX) + "px";
        document.getElementById("esfera").style.top  = String(ejeY) + "px";

        var ejeX2 = parseFloat(ejeX) * -1;
        var ejeY2 = parseFloat(ejeY) * -1;

        document.getElementById("esfera2").style.right = String(ejeX) + "px";
        document.getElementById("esfera2").style.top   = String(ejeY) + "px";
          }

          function correcto() {

        document.getElementById("correcto").style.visibility   = "visible";
        document.getElementById("incorrecto").style.visibility = "hidden";

        setTimeout(function() { 

          document.getElementById("correcto").style.visibility = "hidden";

        }, 3000);
          }

          function incorrecto() {

            document.getElementById("correcto").style.visibility   = "hidden";
        document.getElementById("incorrecto").style.visibility = "visible";

        setTimeout(function() { 

          document.getElementById("incorrecto").style.visibility = "hidden";

        }, 3000);
          }
      </script>
</head>
<body>
	<div class="fondo">
 <?php include 'nav.php';?>
 <div style="display: flex;justify-content: space-between;">
  <h2 style="color: white;margin-left: 20px;padding-bottom: 20px;"><a href="tema.php?roger=<?php  echo $v2 ?>"><?php  echo $v3 ?></a></h2>
  <h2 style="color: white;margin-right: 20px;padding-bottom: 20px;"><a href="actividades.php?dino=<?php  echo $v1 ?>&&roger=<?php echo $v2 ?>&&nivel=<?php echo 0 ?>&&numerito=<?php echo $v3 ?>">Juego 1</a></h2>
  </div>
</div>
<br><br>
    <h2 class="pregunta">¿Cuanto es <?php  echo $mostrar['oper'] ?>?</h2>
    <div id="lienzo">
          <div id="esfera"><p class="numero" onclick="incorrecto();"><?php  echo $numero2 ?></p></div>
          <div id="esfera2"><p class="numero" onclick="correcto();"><?php  echo $mostrar['solucion'] ?></p></div>
      </div>
      <h1 class="respuesta" id="correcto"><a href="juego2.php?dino=<?php  echo $v1 ?>&&roger=<?php echo $v2 ?>&&nivel=<?php echo 0 ?>&&numerito=<?php echo $v3 ?>" style="color: black">¡Correcto!</a></h1>
      <h1 class="respuesta" id="incorrecto"><a style="color: black">¡Incorrecto!</a></h1>
<br><br>

<p>Nota: Es un juego infinito para practicar tus tablas de multiplicar en orden aleatorio, al seleccionar una bolita saldra un texto si es correcto presionalo para ir al siguiente nivel</p>

</body>
</html>