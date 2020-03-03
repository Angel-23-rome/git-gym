<!DOCTYPE html>
<html lang="en">
<?php  include_once '../inc/head1.php';  ?>
<body>
    <div class="container"><br><br><br>
        <div class="admin" style="background-color:teal">
            <center>
                <h5>ADMINISTRAR PACIENTES</h5>
            </center>
        </div>
    <br><br>
        <button class="btn btn-primary">
        <i class="fa fa-user-plus "></i>Agregar Paciente
        </button>
        <div class="busqueda" style="float:right; margin-right: 3%;">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
        </div>
        <br><br><br>
        <div class="lista" style="background-color:blue">
            <center>
                <h5>LISTA DE PACIENTES</h5>
            </center>
        </div>
        <div class="datos">
        <div class="row">
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <center>
                <img class=" rounded" src="../imagenes/paciente.png"  alt="Card image cap" width="150" height="130">
            </center>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>