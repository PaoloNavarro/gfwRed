<?php

use LDAP\Result;

    $conexion = new mysqli("localhost","id19570303_roor","r6TuxwoacH*8gj","id19570303_gwf");

    $conexion->set_charset("utf8");
    #CONULTA A TABLA
    $result = $conexion->query("SELECT * FROM empleos");

   

    #dejar vairbles en 0
    $empleadoid = "";
    $empleadonom = "";
    $empleadodet = "";
    $empleadopais = "";

    #editar resgistro en tabla
    if(isset($_GET['edit'])){
        $pid = $_GET['edit'];
        $result = $conexion->query("SELECT * FROM  empleos WHERE id=$pid");
         $row = $result->fetch_array();
         $empleadoid = $row['id'];
         $empleadonom = $row['nombre'];
         $empleadodet = $row['detalle'];
         $empleadopais = $row['pais'];
         header("location: ../inicio.php");

        


    }
    #agrgar registro a tabla
    if(isset($_POST["btnagregar"])){
        if(!empty($_POST["btnagregar"])){
            if (!empty($_POST["eid"]) and 
            !empty($_POST["enombre"])and
            !empty($_POST["edes"])and
            !empty($_POST["epais"])) {
                $empleadoid = $_POST["eid"];
                $empleadonom = $_POST["enombre"];
                $empleadodet = $_POST["edes"];
                $empleadopais =$_POST["epais"];
                $sql = $conexion->query("INSERT INTO empleos (id,nombre,detalle,pais) VALUES('$empleadoid','$empleadonom','$empleadodet','$empleadopais')");
                $empleadoid = "";
                $empleadonom = "";
                $empleadodet = "";
                $empleadopais = "";
                session_reset();

            }
            else{
                echo "<div class='alert alert-danger'><h1>Datos vacios</h1></div>";
    
            }
    
        }
        else{
            echo "<div class='alert alert-danger'><h1>Dastos Vacios</h1></div>";
    
        };

    }

    #eliminar registro
    if(isset($_GET['delete'])){
        echo$_GET['delete'];
        $pid = $_GET['delete'];
        $sql = $conexion->query("DELETE FROM  empleos WHERE id=$pid");
        echo "<h1>Eleminado con exito</h1>";
        header("location: ../inicio.php");

    }

    #añadir fellow





?>