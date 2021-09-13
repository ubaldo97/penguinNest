<?php
session_start();
require_once 'rutas.php';
require_once MODELS_PATH.'functions.php';
$user = $pass = "";
$error = "Error";
if (isset($_POST['username'])) {
    $user = sanitizarString($_POST["username"]);
    $pass = sanitizarString($_POST["password"]);
    if ($user == "" || $pass == "") {
        $error = "Error faltan campos";
    } else {
        $result = consultarMysql("SELECT * FROM users WHERE user='$user'");
        if ($result->num_rows) {
            $pass2 = $result->fetch_assoc();
            if (password_verify($pass, $pass2['pass'])) {
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass2['pass'];
                $error = "ok";
            } else {
                $error = "Error usuario y/o contraseña incorrecto";
            }
        } else {
            $error = "Error usuario y/o contraseña incorrecto";
        }
    }
}
echo $error;
