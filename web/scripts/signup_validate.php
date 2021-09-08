<?php 
require_once '../modelos/funciones.php';
    $user = $pass = $pass2 = $error ="";
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
                $error  = "las contraseñas no coinciden";
            }else{
                $resultado = consultarMysql("SELECT * FROM users WHERE user='$user'");
                if($resultado->num_rows){
                    $error = "El usuario ya existe";
                }else{
                    $pass = password_hash($pass,PASSWORD_DEFAULT);
                    consultarMysql("INSERT INTO users VALUES('$user','$pass')");
                    die("Cuenta creada");
            }
         }
        }
    }
    echo $error;
