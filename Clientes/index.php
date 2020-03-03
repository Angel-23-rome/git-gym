<!DOCTYPE html>
<html lang="en">
<?php  
    include_once 'inc/head.php';
?>
<body style="background-color:#8f8f8f;">

<div class="social-bar">
    <a href="https://www.facebook.com/josue.garcialeyva" class="icon icon-facebook2" target="_blank"></a>
    <a href="https://twitter.com/jgl_trainer?s=08" class="icon icon-twitter" target="_blank"></a>
    <a href="#" class="icon icon-youtube" target="_blank"></a>
    <a href="https://instagram.com/leyva_coach?igshid=1ql4ew2ta81cr" class="icon icon-instagram" target="_blank"></a>
    <a href="https://api.whatsapp.com/send?phone=+5217621040114&text=Hola%20Gracias%20Por%20Contactarme" class="icon icon-whatsapp" target="_blank"></a>
    <a href="http://localhost/CursoPhp/ProyectoGym/Clientes/correo.php" class="icon icon-mail" target="_blank"></a>
  </div>

<nav class="navbar navbar-expand-lg "style="background-color:#000000">
  <a class="navbar-brand" href="#">
  <img class="img-responsive" src="imagenes/logosin.png"  alt="First slide" width="200" height="70"></a>

  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fa fa-bars" style="background-color:#FFFFFF"></i>
  
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav"> 
      <li class="nav-item active">
        <a class="nav-link" href="#" style="color:#FFFFFF";>Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Agenda/agenda.php"  style="color:#FFFFFF";>Consultas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#FFFFFF";>Healthy & Perfect</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#" style="color:#FFFFFF";>Mi Trayectoria</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="#" style="color:#FFFFFF";>Team Leyva</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#FFFF";>
          Material
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Videos De Ejercios</a>
          <a class="dropdown-item" href="#">Recetarios</a>
         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#FFFF";>
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>



<!-- carrusel-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagenes/logo1.jpg" alt="First slide" width="1150" height="450">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/tnt.jpeg" alt="Second slide" width="1150" height="450">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagenes/max.jpeg" alt="Third slide" width="1150" height="450">
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


<main>
<section class="contenedor sobre-nosotros">
<h2 class="titulo">Buscaremos Juntos la Mejor Version de Ti</h2>
<div class="contenedor-sobre-nosotros">
<img src="imagenes/promo.jpeg" alt="" class="imagen-about-us">
<div class="contenido-textos">
<h3><span>1</span>los mejores</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt autem exercitationem, earum vero beatae rerum aliquid eaque omnis recusandae maiores et. Possimus cum harum id eum numquam cupiditate nemo.</p>
<h3><span>2</span>los mejores</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt incidunt autem exercitationem, earum vero beatae rerum aliquid eaque omnis recusandae maiores et. Possimus cum harum id eum numquam cupiditate nemo.</p>
</div>
</div>
</section>
<section class="portafolio">
<div class="contenedor">
<h2 class="titulo">portafolio</h2>
<div class="galeria-port">
<div class="imagen-port">
<img src="imagenes/team.jpeg" alt="">
<div class="hover-galeria">
<img src="imagenes/select.png" alt="">
<p>Nuestro trabajo</p>
</div>
</div>
<div class="imagen-port">
<img src="imagenes/moti.jpg" alt="">
<div class="hover-galeria">
<img src="imagenes/select.png" alt="">
<p>Nuestro trabajo</p>
</div>
</div>
<div class="imagen-port">
<img src="imagenes/moti3.jpg" alt="">
<div class="hover-galeria">
<img src="imagenes/select.png" alt="">
<p>Nuestro trabajo</p>
</div>
</div>
<div class="imagen-port">
<img src="imagenes/moti2.jpg" alt="">
<div class="hover-galeria">
<img src="imagenes/select.png" alt="">
<p>Nuestro trabajo</p>
</div>
</div>
</div>
</div>
</section>
<section class="clientes contenedor">
<h2 class="titulo">Que dicen nuestro clientes</h2>
<div class="cards">
<div class="card">
<img src="imagenes/face1.jpeg" alt="">
<div class="contenido-texto-card">
<h4>name</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi, delectus reprehenderit modi, magni enim consequatur odio amet ex neque magnam. Eius consectetur quidem quos, voluptates totam natus at velit.</p>
</div>
</div>
<div class="card">
<img src="imagenes/face2.jpeg" alt="">
<div class="contenido-texto-card">
<h4>name</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quasi, delectus reprehenderit modi, magni enim consequatur odio amet ex neque magnam. Eius consectetur quidem quos, voluptates totam natus at velit.</p>
</div>
</div>
</div>
</section>
<section class="about-services">
<div class="contenedor">
<h2 class="titulo">Nuestro servicios</h2>
<div class="servicio-cont">
<div class="servicio-ind">
<img src="imagenes/plan.png" alt="">
<h3>name</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur odit ipsam sit suscipit labore modi sint earum, officia omnis ratione enim et, non, aperiam minus distinctio similique blanditiis asperiores.</p>
</div>
<div class="servicio-ind">
<img src="imagenes/red.png" alt="">
<h3>name</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur odit ipsam sit suscipit labore modi sint earum, officia omnis ratione enim et, non, aperiam minus distinctio similique blanditiis asperiores.</p>
</div>
<div class="servicio-ind">
<img src="imagenes/plan1.jpg" alt="">
<h3>name</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos tenetur odit ipsam sit suscipit labore modi sint earum, officia omnis ratione enim et, non, aperiam minus distinctio similique blanditiis asperiores.</p>
</div>
</div>
</div>
</section>
</main>

  



<!--<div class="row">
  <div class="col-4">
  <h2>Buscaremos Juntos la Mejor Version de Ti</h2>
<img class="card-img-top" src="imagenes/promo.jpeg" alt="" width="10" height="500">
</div>-->

</div>
    <div class="col-8">
    <div class="card text-white  mb-3"  style="background-color:#000000;width: 18rem;">
        <img class="card-img-top" src="imagenes/coach.jpeg" alt="">
    <div class="card-body">
        <h5 class="card-title">Josue Garcia Leyva</h5>
        <p class="card-text">Lic. en Nutrición/Entrenador Profesional</p>
    </div>
   
    <div class="card-body">
        <a href="#" class="card-link" style="color:#FFFFFF";>Saber mas</a>
        <a href="#" class="card-link" style="color:#FFFFFF";>Mi Carrera</a>
    </div>
    </div>
    </div>
</div>
</body>
</html>