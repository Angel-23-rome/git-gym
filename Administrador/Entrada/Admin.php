<!DOCTYPE html>
<html lang="en">
<?php include_once '../inc/head1.php'; ?>
<body>
    <div class="container"><br><br><br>
        <div class="imagen" style="background-color: gray">
            <img class="img-responsive" src="../imagenes/logosin.png"alt="Chania" width="1000" height="250">
        </div>
        
    <nav class="navbar navbar-expand-lg" style="background-color: red">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="../Usuarios/PlantillaU.php" style="color: white">
                <center>
                    <h5>USUARIOS</h5> 
                    <img class="img-responsive" src="../imagenes/user.png"alt="Chania" width="100" height="80">
                </center>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">
                <center>
                    <h5>PACIENTES</h5> 
                    <img class="img-responsive" src="../imagenes/pacientes.png"alt="Chania" width="100" height="80">
                </center>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">
                <center>
                    <h5>CITAS</h5> 
                    <img class="img-responsive" src="../imagenes/citas2.png"alt="Chania" width="100" height="80">
                </center>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white">
                <center>
                    <h5>CURSOS</h5> 
                    <img class="img-responsive" src="../imagenes/cursob.png"alt="Chania" width="100" height="80">
                </center>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        
    </div>
    </nav>
               
    </div>
    <?php include_once '../inc/footer.php'; ?>
</body>
</html>