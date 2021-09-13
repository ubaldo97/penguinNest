<?php 
require_once 'rutas.php';
require_once MODELS_PATH.'functions.php';
    $user = $pass = $pass2 ="";
    $error = "Error";
    if(isset($_SESSION["user"])){
        destruirSesion();
    }
    if(isset($_POST["username"])){
        $user = sanitizarString($_POST["username"]);
        $pass = sanitizarString($_POST["password"]);
        $pass2 = sanitizarString($_POST["confirmacion"]);
        if ($user=="" || $pass=="" || $pass2=="") {
           $error = "Error faltan campos";
        }else{
            if($pass!=$pass2){
                $error  = "Error las contraseñas no coinciden";
            }else{
                $resultado = consultarMysql("SELECT * FROM users WHERE user='$user'");
                if($resultado->num_rows){
                    $error = "Error el usuario ya existe";
                }else{
                    $pass = password_hash($pass,PASSWORD_DEFAULT);
                    consultarMysql("INSERT INTO users VALUES('$user','$pass')");
                    $error = "Cuenta creada exitosamente";       
            }
         }
        }
    }
    echo $error;
