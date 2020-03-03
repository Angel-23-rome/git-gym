<!DOCTYPE html>
<html lang="en">
<?php  include_once '../inc/head1.php';  ?>
<body>
    <div class="container"><br><br><br>
        <div class="admin" style="background-color:teal">
            <center>
                <h5>ADMINISTRAR USUARIOS</h5>
            </center>
        </div>
    <br><br>
        <button class="btn btn-primary" data-toggle="modal" data-target="#agregaru">
        <i class="fa fa-user-plus "></i>Agregar Usuario
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
                <h5>LISTA DE USUARIOS</h5>
            </center>
        </div>
        <div class="tabladatos">
            <table class="table  table-primary">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Usuario</th>
                <th scope="col">Correo</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
            </table>
        </div>
        <div class="modal fade" id="agregaru" tabindex="-1" role="dialog" aria-labelledby="miusuario">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h2 style="color:blue;">REGISTRO DE USUSARIO</h2></center>
                    </div>
                    <div class="modal-body">
                    <form action="modelUsuarios/BDUsuario.php"method="post">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="">Apellido Paterno</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="">Apellido Materno</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="">Nombre de Usuario</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                            <label for="">Contraseña</label>
                            <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <div class="modal-footer">
                        <Button class="btn-primary" type="submit">Guardar</Button>
                        <Button class="btn-danger">Cancelar</Button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>