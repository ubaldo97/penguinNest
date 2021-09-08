<?php 
require_once '../scripts/rutas.php';
?>
<form method="post" action=<?php echo SCRIPTS_PATH."signup_validate.php";?>>
<input type="hidden" id="hidde" value="ingresar">
    <div class="form-group">
        <input placeholder="Usuario" type="text" onBlur="checkUser(this.value)" class="form-control" name="username" id="username">
        <div id="used"></div>
    </div>
    <div class="form-group">
        <input placeholder="Contraseña" type="password" class="form-control" name="password" id="password">
    </div>
    <div class="form-group">
        <input placeholder="Confirmar contraseña" type="password" class="form-control" name="confirmacion" id="confirmacion">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Registrar</button>
</form>