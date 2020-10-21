<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página web con PHP</title>
    </head>
    <body>
        <h1>Ejemplo con PHP y HTML</h1>
        <p>
            <?php
            $fecha = date("d/m/Y");
            echo "La fecha de hoy es $fecha";
            ?>
        </p>
    </body>
</html>