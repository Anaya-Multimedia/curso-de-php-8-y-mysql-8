<!DOCTYPE html>
<html>
  <head>
    <title>Conexión con MySQL</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
      $servidor = "mysql";
      $usuario = "root";
      $pass = "root";
      $base_datos = "MiBaseDeDatos";
      //Conexión al servidor de bases de datos
      $descriptor = new Mysqli($servidor, $usuario, $pass, $base_datos) 
            or die( "Imposible conectar" );
      //Se cierra la conexión cuando terminemos
      $descriptor->close();
    ?>
    <h1 class="position-absolute top-50 start-50 translate-middle">
    Conexión establecida.
    </h1>
  </body>
</html>