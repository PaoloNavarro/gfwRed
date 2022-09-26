<?php 
       session_start();
    $_SESSION["MensajeErro2"]= "";
    $_SESSION["MensajeErro1"]= "";

    if(isset($_POST["btningresar"])){

                if(!empty($_POST["btningresar"])){
            if (!empty($_POST["correo"]) and !empty($_POST["palabraSecreta"])) {
                $usuario = $_POST["correo"];
                $password = $_POST["palabraSecreta"];
              
            $sql = $conexion->query("SELECT * FROM usuariosoficial WHERE correo = '$usuario' and contra='$password'");
                if ($datos=$sql->fetch_object()) {

                    $_SESSION["id"]=$datos->id;
                    $_SESSION["nombre"]=$datos->nombre;
                    $_SESSION["apellido"]=$datos->apellido;

                    $_SESSION["pais"]=$datos->pais;

                    $_SESSION["rol"]=$datos->cargo;
                
                    header('Location: https://redempleogwf.000webhostapp.com/inicio.php');
                    

                   

                } else {
                    $_SESSION["MensajeErro1"]= "<div class='alert alert-danger'>
                    <div class='row'>
                        <div class='col-10'>
                            <label>ACESSO DENEGADO</label>

                        </div>
                        <div class='col-2'>
                            <a class=' btn btn' href='login.php'>X</a>

                        </div>

                    </div>
                    
                    </div>";
                }
                
            } else {
                    $_SESSION["MensajeErro1"]= "<div class='alert alert-danger'>
                    <div class='row'>
                        <div class='col-10'>
                        <label>LLENE ESPACIO</label>
                        </div>
                        <div class='col-2'>
                            <a class=' btn btn' href='login.php'>X</a>

                        </div>

                    </div>
                    
                    
                    </div>";
                    
            }
            
    
        }
        
        
        
    }
    
     #Solictud Registro
    if(!empty($_POST["btResgisnew"])){
        
        if (!empty($_POST["Ncorreo"]) and 
            !empty($_POST["Nnombre"]) and
            !empty($_POST["Napellido"]) and 
            !empty($_POST["NContra"]) and 
            !empty($_POST["NContra1"]) and
            !empty($_POST["PaisD"]) and
            !empty($_POST["SexoF"]) and
            $Nfecha = $_POST["fecha"]){

            $Nmail = $_POST["Ncorreo"];
            $Nname = $_POST["Nnombre"];
            $Napellido = $_POST["Napellido"];
            $Npassword1 = $_POST["NContra"];
            $Npassword2 = $_POST["NContra1"];
            $Npaisf = $_POST["PaisD"];
            $NsexoF =   $_POST["SexoF"];
            $cargo = $_POST["cargoF"];
            $Nfecha = $_POST["fecha"];

            echo $Npaisf;
            echo $NsexoF;
            echo $Nfecha;
            if($Npassword1==$Npassword2){
                $sql = $conexion->query("INSERT INTO usuariosprueba (nombre,apellido,correo,contra,fecha_n,pais,cargo,sexo,estado)
                VALUES('$Nname','$Napellido','$Nmail','$Npassword1','$Nfecha','$Npaisf','$cargo','$NsexoF','Activo')");
                echo"funciono";
            }else{
                $_SESSION["MensajeErro2"]= "<div class='alert alert-danger'>
                <div class='row'>
                    <div class='col-10'>
                        <span>La contraseña debe ser la misa</spna>

                    </div>
                    <div class='col-2'>
                        <a class=' btn btn' >X</a>

                    </div>

                </div>
                
                </div>";
                
                
            }




        } else {
            $_SESSION["MensajeErro2"]= "<div class='alert alert-danger'>
            <div class='row'>
                <div class='col-10'>
                    <label>LlENE TOODOS LOS DATOS</label>
                </div>
                <div class='col-2'>
                    <a class=' btn btn' >X</a>

                </div>

            </div>
            
            </div>";

        }
        

    }
    #solicitar nueve contraseña 
    function mostrarTextoError(){
        if(isset($_POST["btningresar"])){
            echo $_SESSION["MensajeErro1"];
        }

        // Aquí pueden venir varias líneas de instrucciones

    }
     function mostrarTextoError1(){
        if(isset($_POST["btResgisnew"])){
            echo $_SESSION["MensajeErro2"];
        }

        // Aquí pueden venir varias líneas de instrucciones

    }
    
    


?>