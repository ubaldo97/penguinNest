<?php
session_start();
require_once '../modelos/funciones.php';
$user = $pass = $error = "";

if(isset($_POST['username'])){
    $user = sanitizarString($_POST["username"]);
    $pass = sanitizarString($_POST["password"]);
    if ($user=="" || $pass=="" ) {
        echo "Error faltan campos";
     }else{
         $result = consultarMysql("SELECT * FROM users WHERE user='$user'");
         if($result -> num_rows){
            $pass2 = $result->fetch_assoc();
            if(password_verify($pass,$pass2['pass'])){
                echo "Login exitoso";
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass2['pass'];
            }else{
                echo "Usuario y/o contraseña incorrecto";
            }
         }else{
            echo "Usuario y/o contraseña incorrecto";
         }

     }
}