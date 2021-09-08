<?php
require_once 'web/plantillas/header.php';
?>
<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-7">
            <img class="mx-auto m-5 d-block" src=<?php echo IMG_PATH . 'pinguino.png'; ?> id="penguin" alt="pinguino">
        </div>
        <div class="col-sm-5 ">
            <div class="shadow-lg p-3 bg-white rounded">
                <div>
                    <h2> Penguin's Nest </h2>
                </div>
                <div  id="formulario">
                    <?php require_once VIEWS_PATH . 'login.php'; ?>
                </div>
                <br>
                <span id="registro-s">¿No tienes una cuenta? </span>
                <a id="registro-a" value="registrate" href="#"> Registrate!</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('registro-a').onclick = function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("formulario").innerHTML = this.responseText;
            }
        };
        let f = document.getElementById("hidde").value + "";
        if (f == "registrar") {
            document.getElementById("registro-s").innerHTML = "¿Ya tienes una cuenta? ";
            document.getElementById("registro-a").innerHTML = "Ingresa!";
            document.getElementById("hidde").value = "ingresar";
            xhttp.open("GET", "web/plantillas/signup.php", true);
            xhttp.send();
        } else {
            document.getElementById("registro-s").innerHTML = "¿No tienes una cuenta? ";
            document.getElementById("registro-a").innerHTML = "Registrate!";
            document.getElementById("hidde").value = "registrar";
            xhttp.open("GET", "web/plantillas/login.php", true);
            xhttp.send();
        }

    };

    function checkUser(user) {
        if (user == '') {
            $('#used').html('');
        } else {
           $.post(
               'web/scripts/checkUser.php',
               {user : user},
               function(data) {
                   $('#used').html(data);
               }
           )
        }
    }
</script>
</body>

</html>