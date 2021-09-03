<?php
require_once 'recursos/php/rutas.php';
require_once  HEADER;
?>
<div class="container-fluid">
    <div class="row align-items-center justify-content-between">
        <div class="col">
            <img src= <?php echo PINGUINO; ?>  id="penguin" alt="pinguino">
        </div>
        <div class="col">
            <div class="shadow-lg p-3 m-5 bg-white rounded">
                <form>
                    <div class="form-group" >
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>