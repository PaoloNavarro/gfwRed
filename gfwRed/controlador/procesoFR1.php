<?php 
 $conexion = new mysqli("localhost","id19570303_roor","r6TuxwoacH*8gj","id19570303_gwf");
 $conexion->set_charset("utf8");

     #aceptar solictud de fellow
     if(isset($_GET['create'])){
         
         $pid = $_GET['create'];
         
         $sql =  $conexion->query("SELECT * FROM usuariosprueba where id='$pid'");
         $row = $sql->fetch_assoc();
           
             $Pmail = $row['correo'];
             $Pname =  $row['nombre'];
             $Papellido = $row['apellido'];
             $Ppassword1 = $row['contra'];
             $Ppaisf =  $row['pais'];
             $PsexoF =   $row['sexo'];
             $Pcargo = $row['cargo'];
             $Pfecha = $row['fecha_n'];
             $sql1 = $conexion->query("INSERT INTO usuariosoficial (nombre,apellido,correo,contra,fecha_n,pais,cargo,sexo,estado)
             VALUES('$Pname','$Papellido','$Pmail','$Ppassword1','$Pfecha','$Ppaisf','$Pcargo','$PsexoF','Activo')");
             
         
             $sql2 = $conexion->query("UPDATE usuariosprueba SET estado='Detenido' WHERE id='$pid'");
             header('Location: https://redempleogwf.000webhostapp.com/adminFS.php');

         
         
     }else{
         echo "ERROR EN ACEPTAR";
     }


?>