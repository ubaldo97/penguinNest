<?php 
session_start();
require_once 'rutas.php';
require_once MODELS_PATH.'functions.php';


//Destruimos las sesiones
destruirSesion();
//Redireccionamos al index
header("Location:". URL_PATH);
die();

?>