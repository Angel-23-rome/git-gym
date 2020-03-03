<!DOCTYPE html>
<html lang="en">
<?php  include_once '../inc/head.php';  ?>
<body style="background-color: gray"><br><br>

    <!-- carrusel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../imagenes/logo1.jpg" alt="First slide" width="1150" height="450">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imagenes/tnt.jpeg" alt="Second slide" width="1150" height="450">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../imagenes/max.jpeg" alt="Third slide" width="1150" height="450">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- fin de carousel-->
<div class="container">
    <center><h3>Agendar Cita</h3></center>
<form action="" method="post">
    <div class="ciudad">
    <input type="date" name="fecha">
    <button type="submit" class="btn-primary" name="buscar">Buscar Disponibilidad</button>
    </div>
</form>
    <table class="table table-sm">
        <thead>
        <tr class="bg-primary">
            <th scope="col">Fecha</th>
            <th scope="col">Horario</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Agendar</th>
        </tr>
        </thead>
    </table>
</div>
</body>
</html>
<?php
date_default_timezone_set('America/Mexico_City');
    if (isset($_POST['buscar'])) {
        $busq=$_POST['fecha'];
        
        // NOMBRE DIAS
        $fechadia = $busq; 
        $fechats = strtotime($fechadia); //a timestamp
        $NomDia="";
        
        switch (date('w', $fechats)){
            case 0: $NomDia= "Domingo"; break;
            case 1: $NomDia= "Lunes"; break;
            case 2: $NomDia= "Martes"; break;
            case 3: $NomDia= "Miercoles"; break;
            case 4: $NomDia= "Jueves"; break;
            case 5: $NomDia= "Viernes"; break;
            case 6: $NomDia= "Sabado"; break;
        }  //FIN DE DIAS
        echo $NomDia;
        $fechadia1 = $busq; 
        $fechats1 = strtotime($fechadia1); //a timestamp
        $NomDia1="";
        
        switch (date('w', $fechats1)){
            case 0: $NomDia1= "1"; break;
            case 1: $NomDia1= "2"; break;
            case 2: $NomDia1= "3"; break;
            case 3: $NomDia1= "4"; break;
            case 4: $NomDia1= "5"; break;
            case 5: $NomDia1= "6"; break;
            case 6: $NomDia1= "7"; break;
        }  //FIN DE DIAS
        echo $NomDia1;
    }


?>