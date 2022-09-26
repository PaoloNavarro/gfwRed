<?php
    include "models/conexion.php";
    include "controlador/controlador_login.php";

    session_start();
    




?>
<!doctype html>
<html lang="es">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,
                shrink-to-fit=no">
            <meta name="description" content="Formulario de login con Bootstrap">
            <meta name="author" content="Parzibyte">
            <title>Inicia Sesión con tu cuenta Glasswing Fellows</title>
            <link rel="icon" href="img/GFWlogo.PNG">

            <!-- Bootstrap CSS v5.2.0-beta1 -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
            <!-- CDN Bootstrap Icon -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
            
             <!-- calnedario -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    </head>

    <body>
            <main role="main" class="container my-auto pt-5">
                <div class="row">
                    <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                        col-12">
                        <div class="text-center bg bg-success text-light">
                            <h2>Bienvenido de nuevo</h2>
                        </div>
                        <img class="img-fluid mx-auto d-block rounded"
                            src="img/GFWlogo.PNG" style="height:200px;" />
                        <div class="container text-light text-center bg bg-primary">
                            <h4>Red de empleo</h4>
                        </div>
                                    <?php 
                             mostrarTextoError(); 
                        ?>
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
                        
                            
                                <div class="row">
                                     <div class="col-lg-4 col-md-3 col-sm-2 pt-2">
                                    <input id="bton" name="btningresar"
                                    class="btn btn-success" type="submit"
                                    placeholder="Ingresar" value="INICIAR SESION">
                                     </div>
                                     <div class="col-lg-1"></div>
                                    <div class="col-lg-4 col-md-3 col-sm-2 pt-2">
                                        <input id="resgistbtn" name="resgistbtn"
                                        class="btn btn-info" data-bs-toggle="modal" data-bs-target="#btnregis"
                                         type="buton" placeholder="Ingresar" value="REGISTRO">
                                    </div>
                                </div>
                            <div class="row pt-2 text-center align-middle">
                                <div class="col-4">
                                                   <input id="resgistbtn" name="resgistbtn"
                                    class="btn btn-info" data-bs-toggle="modal" data-bs-target="#btrRecupe"
                                     type="buton"
                                    placeholder="Olvide mi contraseña" value="Olvide mi contraseña" 
                                  >
                                </div>
                  
                            </div>

                        </form>
                    </div>
                </div>
            </main>
    <!--Modal 1 -->
        <div class="modal fade" id="btnregis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <img src="https://glasswing.org/wp-content/uploads/2016/10/logo.png" alt="logosaomia logo" style="max-width:20px;" class="img-fluid">
                    Formulario de registro
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <h3>Ingrese sus datos de registro</h3>
                    <form action="" method="post">
                        <?php 
                             mostrarTextoError1(); 
                        ?>
                        <div class="row pt-1">
                            <div class="col-6">
                                    <label for="Nnombre">Nombres</label>
                                    <input id="Nnombre" name="Nnombre"
                                        class="form-control" type="text"
                                        placeholder="Nombres" data-toggle="tooltip" data-placement="top" 
                                                title="Puedes colocar tus dos nombres aqui">
                            </div>

                            <div class="col-6">
                            <label for="Napellido">Apellidos</label>
                                    <input id="Napellido" name="Napellido"
                                        class="form-control" type="text"
                                        placeholder="Apellidos"  data-toggle="tooltip" data-placement="top" 
                                                title="Puedes colocar tus dos apellidos aqui">
                            </div>

                        </div>
                        <div class="row pt-2">
                            <div class="form-group">
                                        <label for="Ncorreo">Correo</label>
                                        <input id="Ncorreo" name="Ncorreo"
                                            class="form-control" type="email"
                                            placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-6">
                                <label for="NContra">Contraseña</label>
                                        <input id="NContra" name="NContra"
                                            class="form-control" type="password"
                                            placeholder="Contraseña">
                                
                            </div>
                            <div class="col-6">
                                <label for="NContra1">Repita su contraseña</label>
                                            <input id="NContra1" name="NContra1"
                                                class="form-control" type="password"
                                                placeholder="Contraseña" 
                                                data-toggle="tooltip" data-placement="top" 
                                                title="Recuerda llenar este campo con la misma contraseña" 
                                                >
                                
                            </div>

                        </div>
                        <div class="row pt-5">
                            <label>Fecha de nacimiento</label>
                        </div>
                        <div class="row pb-5">

                            <div class="col-4">
                            
                            <div class="input-group date" id="datepicker">
                                <input name="fecha" type="text" class="form-control">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                    
                    
                            </div>

                            <div class="col-2 ps-2">

                                <div><SELECT id="PaisD" name="PaisD" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="row pt-5">
                                     <label>Pais</label>
                                    </div>
                
                                        <OPTION class="dropdown-item" value="SV">SV</OPTION>
                
                                        <OPTION class="dropdown-item" value="GT">GT</OPTION>
                
                                        <OPTION class="dropdown-item" value="HN">HN</OPTION>
 
					                </SELECT>
                                </div>
                            </div>
            
                            <div class="col-2">
                            <div>
                                <SELECT id="SexoF" name="SexoF" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="row pt-5">
                                     <label>Sexo</label>
                                    </div>
                                    <OPTION class="dropdown-item" value="M">M</OPTION>

                                    <OPTION class="dropdown-item" value="F">F</OPTION>

                                </SELECT>
                            </div>
            
                            </div>

                            <div class="col-2 ms-2">
                                <div>
                                    <SELECT id="cargoF" name="cargoF" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="row pt-5">
                                        <label>Cargo</label>
                                        </div>
                                        <OPTION class="dropdown-item" value="Admin">Admin</OPTION>

                                        <OPTION class="dropdown-item" value="Fellow">Fellow</OPTION>

                                    </SELECT>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-3 ms-5 pb-3">
                            <div class="col-6">
                                <input id="btResgisnew" name="btResgisnew"
                                            class="btn btn-success" type="submit"
                                            placeholder="Registrase">
                            </div>
                            <div class="col-6">
                                <input id="btcancel" name="btcancel"
                                            class="btn btn-danger" type="submit"
                                            placeholder="Cancelar" value="Cancelar"
                                            >
                            </div>
                        </div>

                    
                    </form>



              
            </div>
          </div>
        </div>
    </div>

    <!--modal 2-->
    <div class="modal fade" id="btrRecupe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                <img src="https://glasswing.org/wp-content/uploads/2016/10/logo.png" alt="logosaomia logo" style="max-width:20px;" class="img-fluid">
                    Formulario de recuperacion
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <h3>Solictud de cambio de contraseña</h3>
                    
                    <div class="row pt-1">
                        <div class="col-6">
                                <label for="Nnombre">Nombres</label>
                                <input id="Nnombre" name="Nnombre"
                                    class="form-control" type="text"
                                    placeholder="Nombres" data-toggle="tooltip" data-placement="top" 
                                            title="Puedes colocar tus dos nombres aqui">
                        </div>

                        <div class="col-6">
                        <label for="Napellido">Apellidos</label>
                                <input id="Napellido" name="Napellido"
                                    class="form-control" type="text"
                                    placeholder="Apellidos"  data-toggle="tooltip" data-placement="top" 
                                            title="Puedes colocar tus dos apellidos aqui">
                        </div>

                    </div>
                    <div class="row pt-2">
                        <div class="form-group">
                                    <label for="Ncorreo">Correo</label>
                                    <input id="Ncorreo" name="Ncorreo"
                                        class="form-control" type="email"
                                        placeholder="Correo electrónico">
                        </div>
                    </div>

                    <div class="row pt-3 ms-5 pb-3">
                        <div class="col-6">
                            <input id="btnSol" name="btnSol"
                                        class="btn btn-success" type="submit"
                                        placeholder="btnSol" value="btnSol">
                        </div>
                        <div class="col-6">
                            <input id="btcancel" name="btcancel"
                                        class="btn btn-danger" type="submit"
                                        placeholder="Cancelar" value="Cancelar"
                                        >
                        </div>
                    </div>
              
            </div>
          </div>
        </div>
    </div>
    
        <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
      <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

    </body>
</html>