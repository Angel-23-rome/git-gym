<!DOCTYPE html>
<html lang="en">
<?php include_once '../inc/head1.php'; ?>
<body>
    <div class="container">
        <div class="row d-flex justify-content-around mt-5">
            <div class="card col-md-6 col-md-offset-6">
            <p align="right"><a  href="Recuperacion/recupera.php">Olvidaste tu Contraseña</a></p>
            <img class="img-responsive" src="../imagenes/gym2.jpg"alt="Chania" width="550" height="180">
                <article class="card-body">
                    <h4 class="card-title mb-4 mt-1 text-center">Login</h4>
                    <form method="POST"   action="../Entrada/Admin.php">
                        <div class="form-group">
                        
                            <label><i class="fa fa-user-md fa-2x"></i>Usuario</label>
                            <input name="user" type="text" class="form-control" placeholder="usuario" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-key fa-2x"></i>Password</label>
                            <input name="password" type="password" class="form-control" placeholder="*******" required>
                        </div>
                        <div class="form-group">
                            
                            <button type="submit" class="btn btn-outline-warning" name="sesion1">Entrar</button>
                        </div>
                    </form>
                    <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                </article>
                
            </div>
        </div>
    </div>
    <?php include_once '../inc/footer.php'; ?>
</body>
</html>