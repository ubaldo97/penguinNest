<DOCTYPE html>
    <html>
    <head>
        <title>Configurando base de datos</title>
    </head>
    <body>
        <h3>configurando...</h3>
<?php
require_once 'functions.php';

crearTabla('users', 
            'user VARCHAR(16),
            pass VARCHAR(16),
            INDEX(user(6))');

crearTabla('messages',
            'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            auth VARCHAR(16),
            recip VARCHAR(16),
            pm CHAR(1),
            time INT UNSIGNED,
            message VARCHAR(4096),
            INDEX(auth(6)),
            INDEX(recip(6))');

crearTabla('friends',
            'user VARCHAR(16),
            friend VARCHAR(16),
            INDEX(user(6)),
            INDEX(friend(6))');

crearTabla('profiles',
            'user VARCHAR(16),
            text VARCHAR(4096),
            INDEX(user(6))');
?>
<br> Tablas creadas.
    </body>
    </html>