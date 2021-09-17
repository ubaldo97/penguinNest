<?php
session_start();
$mensajeUser = 'Bienvenido';
if (isset($_SESSION['user'])) {
    require_once '../scripts/rutas.php';
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $mensajeUser = "logeado como: $user";
} else {
    require_once 'web/scripts/rutas.php';
    require_once MODELS_PATH . 'functions.php';
    $loggedin = FALSE;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penguin's Nest</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Estilos propios -->
    <link rel="stylesheet" href=<?php
                                if (!$loggedin)
                                    echo STYLES_PATH . 'styles.css';
                                else
                                    echo STYLES_PATH . 'styles_home.css';
                                ?>>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
    <!-- Scripts de Bootstrap4 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    if ($loggedin) {
    ?>
        <header>
            <nav class="navbar navbar-expand-sm  navbar-light bg-light">
                <div class="w-100 mr-auto">
                    <a class="navbar-brand fas fa-user" href="home"><?php echo " " . $user; ?></a>
                    <button class="navbar-toggler" data-target=".navbar-collapse-3" data-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="w-100 collapse mx-auto navbar-collapse navbar-collapse-3">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link fas fa-user-friends" href="friends"> Friends</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fas fa-user-friends" href="users"> Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fas fa-envelope" href="messages"> Messages</a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 collapse navbar-collapse ml-auto navbar-collapse-3">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link fas fa-sign-out-alt" href="../scripts/logout"> Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <?php } ?>