<?php 
    session_start();
    if (empty($_SESSION["id"])) {
        header("location: ../login.php");

    }
    include "models/conexion.php";
    $pPais=$_SESSION["pais"];
    $PRol=$_SESSION["rol"];
    $result = $conexion->query("SELECT * FROM empleos where pais='$pPais'");
    $restult2 = $conexion->query("SELECT * FROM empleos where pais='$PRol'");
    $restult3 =  $conexion->query("SELECT * FROM usuariosoficial where pais='$pPais' and cargo='Fellow'");
    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '<pre>';
    }
    
?>

<!<doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <link rel="icon" href="img/GFWlogoSV.PNG">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
        <!-- CDN Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
 
  </head>
  <body>
    <nav class="navbar navbar-info bg-info fixed-top mb-5">
      <div class="container-fluid">
        <!--Contenido de barra-->
                <span href="#" class="d-flex align-items-center text-white text-decoration-none">
                    <?php
                            if($_SESSION["pais"]=="SV"){
                        echo "<img src='img/GFWlogoSV.PNG' alt='SV' class='' 
                                style='width:50px;'>FELLOWS EL SALVADOR"; 
                                }
                        elseif($_SESSION["pais"]=="GT"){
                         echo "<img src='img/GFWlogoGT.png' alt='GT' class='' 
                                style='width:50px;'>FELLOWS GUATEMALA";                                                     
                                                    }
                        elseif($_SESSION["pais"]=="HN"){
                            echo "<img src='img/GFWlogoHN.png' alt='HN' class='' 
                                style='width:50px;'>FELLOWS HONDURAS";                                                  
                            }
                        ?>
                  </span>
        <!--<a class="navbar-brand" href="#">Glasswing Fellows</a>-->
        
        
                        
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-ligt" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">

        <!--Cabecera del menu -->

        <div class="offcanvas-header">
              <div class="dropdown pb-4">
                 <a href="#" class="pt-2 d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                        <?php
                                            echo $_SESSION["nombre"]."<br>".$_SESSION["apellido"] ;
                                        ?>

                  </a>
                 <ul class="dropdown-menu dropdown-menu-ligth text-small shadow">
                       <li><a class="dropdown-item" href="#">Ajustes</a></li>
                       <li><a class="dropdown-item" href="#">Perfil</a></li>
                       <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li>
                          <a class="dropdown-item" href="controlador/controlador_logout.php">Cerrar sesion</a>
                        </li>
                  </ul>
                </div>
              <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              
          </div>
          <!--Lista de Menu -->
          <div class="offcanvas-body">
            <h6>Menu</h6>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                 <a href="inicio.php" class="nav-link align-middle px-0">
                     <i class="fs-4 bi-house "></i> 
                     Inicio

                  </a>
              </li>
              <li class="nav-item">         
              
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                   <i class="fs-4 bi-grid"></i>Panel de empleos
                </a>
                    <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                         <li nav-item>
                        <a href="panelE.php" class="nav-link align-middle px-0">
                         <i class="fs-4 bi-grid"></i>Lista de empleos
                         </a>    
                        </li>
                    </ul>
                
              </li>
                <li class="nav-item">         
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                         <i class="fs-4 bi-table"></i>Panel de fellows
                        </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                       <li nav-item>
                         <a href="panelF.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-grid"></i>Lista de fellows
                        </a>    
                       </li>
                        <li nav-item>
                         <a href="adminFS.php" class="nav-link align-middle px-0">
                          <i class="fs-4 bi-grid"></i> 
                            Solicitud de Registro
                          </a>    
                        </li>
                    </ul>
                    </li>
                </li>
              <li>
                <a href="#" class="nav-link px-0 align-middle">
                 <i class="fs-4 bi-people"></i> Soporte</a>
              </li>
              <li>
                    <?php 
                                    if($_SESSION["rol"]=="Admin"){
                                        echo "
                                      <li class='pt-3'>
                                      <div class='row'>
                                        <div class='col-6'>
                                            <a href='adminI.php'
                                            class='form-check-input'
                                            type='radio'>Admin</a>

                                        </div>
                                        <div class='col-6'>
                                        <a href='inicio.php'
                                        class='form-check-input'
                                        type='radio'>Fellow</a>

                                        </div>
                                    </li>
                                            </div>";

                                    }
                                    elseif($_SESSION["pais"]=="fellow"){

                                        
                                    }

                    ?>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </nav>
    <main class="container pt-5 mt-5 pb-5 mb-5">
                                        <form action="" method="post">
                                    <?php
                                        include "models/conexion.php";
                                        include "controlador/procesos.php";
                                    ?>
                                    <div class="form-group">
                                        <label for="eid">id de</label>
                                        <input id="eid" name="eid"
                                         class="form-control" type="text"
                                         value="<?php echo$empleadoid; ?>"
                                         placeholder="id nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="enombre">Nombre</label>
                                        <input id="enombre" name="enombre"
                                                class="form-control" type="text"
                                                value="<?php echo$empleadonom; ?>"
                                                placeholder="Nombre de empleo">
                                    </div>
                                    <div class="form-group">
                                        <label for="edes">Descripcion</label>
                                        <input id="edes" name="edes"
                                            class="form-control" type="text"
                                            value="<?php echo$empleadodet; ?>"
                                                placeholder="Detalle de empleo">
                                                
                                    </div>
                                    <div class="form-group">
                                        <label for="epais">Pais</label>
                                        <input id="epais" name="epais"
                                        class="form-control" type="text"
                                        value="<?php echo$empleadopais; ?>"
                                        placeholder="Nombre Pais">
                                                
                                    </div>
                                    <br>
                                    <input id="btnagregar" name="btnagregar"
                                    class="btn btn-primary" type="submit"
                                    placeholder="Añadir" value="Añadir fellow">
                                    <br>
                                    <div>
                                       <table class="table table-striped text-center align-middle">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre<i class="bi bi-credit-card"></i></th>
                                                            <th>Edad <i class="bi bi-calendar"></i></th>
                                                            <th>Correo<i class="bi bi-mail"></i></th>
                                                            <th>Editar<i class="bi bi-calendar"></i></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while($row = $restult3->fetch_assoc()){?>
                                                            <tr>
                                                                <td><?php echo $row['nombre'],' ',$row['apellido']?></td>
                                                                <td><?php echo $row['fecha_n']?></td>
                                                                <td><?php echo $row['correo']?></td>
                                                                <td>
                                                                    <a href="controlador/procesos.php?delete=<?php echo$row['id']?>" 
                                                                   class="btn btn-danger">Eliminar</a>

                                                                </td>
                                                    
                                                            </tr>
                                                        <?php }?>                                                       
                                                    </tbody>
                        
                                        </table>
                                    </div>


                                </form>
                                   
                            </div>
    </main>


    <!--Pie de pagina-->
    <footer class="mt-5  bg-info text-white pt-2 position-fixed bottom-0 w-100">
            <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <p> Hecho por:&copy; Paolo Navarro</p>
        
                </div>
                <div class="col-md-4">
                <p>Glasswing Fellows:</p>
                </div>
                <div class="col-md-4">
                    <div class="btn-group me-2" role="group" aria-label="tercer group">
                        
                        <a class="pe-2" href="#" target="_blank">
                            
                            <i class="bi bi-instagram"> Instagram </i>
                        </a>
                    
                        <a class="pe-2" href="#" target="_blank">
                            <i class="bi bi-twitter"> Twitter </i>
                        </a>
                        
                        <a class="pe-2" href="https://www.facebook.com/GlasswingV/?ref=page_internal" target="_blank">
                            <i class="bi bi-facebook"> Facebook </i>
                        </a>
                    </div>

                </div>
            </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>