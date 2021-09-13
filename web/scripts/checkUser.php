<?php
require_once 'rutas.php';
require_once MODELS_PATH.'functions.php';
if (isset($_POST['user'])) {
    $user = sanitizarString($_POST['user']);
    $resultado = consultarMysql("SELECT * FROM users WHERE user='$user'");

    if ($resultado->num_rows) {
        echo "El usuario <b>$user</b> ya existe";
    } else {
        echo "";
    }
}
