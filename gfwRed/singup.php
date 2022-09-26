<?php 
        include "models/conexion.php";
        include "controlador/controlador_login.php";
?>
<!doctype html>
<html lang="es">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,
                shrink-to-fit=no">
            <meta name="description" content="Formulario de login con Bootstrap">
            <meta name="author" content="Parzibyte">
            <title>Inicia Sesiòn con tu cuenta Glasswing Fellows</title>
            <!-- Bootstrap CSS v5.2.0-beta1 -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <!-- CDN Bootstrap Icon -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    </head>

    <body>
            <main role="main" class="container my-auto">
                <div class="row">
                    <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                        col-12">
                        <h2 class="text-center">Bienvenido de nuevo</h2>
                        <img class="img-fluid mx-auto d-block rounded"
                            src="https://glasswing.org/wp-content/uploads/2016/10/logo.png" />

                        <form method="post" action="">

                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input id="correo" name="correo"
                                    class="form-control" type="email"
                                    placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="palabraSecreta">Contraseña</label>
                                <input id="palabraSecreta" name="palabraSecreta"
                                    class="form-control" type="password"
                                    placeholder="Contraseña">
                            </div>
                            <br>
                            <input id="bton" name="btningresar"
                                    class="btn btn-primary" type="submit"
                                    placeholder="Ingresar" value="INICIAR SESION">
                            <br>
                            <br>
                            <a href="inicio.php">Contraseña olvidada</a>
                        </form>
                    </div>
                </div>
            </main>
    </body>
</html>