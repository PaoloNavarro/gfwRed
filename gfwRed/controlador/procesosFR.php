<?php
     $conexion = new mysqli("localhost","id19570303_roor","r6TuxwoacH*8gj","id19570303_gwf");
    $conexion->set_charset("utf8");
        #aceptar solictud de fellow

  #eliminar
        if(isset($_GET['delete'])){
            
            $pid = $_GET['delete'];
            
                
            
                $sql5 = $conexion->query("UPDATE usuariosprueba SET estado='Detenido' WHERE id='$pid'");
                header('Location: https://redempleogwf.000webhostapp.com/adminFS.php');
            
            
        }else{
            echo "ERROR EN BORRAR";
        }






?>