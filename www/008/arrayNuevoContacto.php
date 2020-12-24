<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Completo</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    <div class="container">
      <h1>Formulario Completo</h1>
      <?php $contacto =  $_POST["contacto"];?>
      <div class = "col-md-12 well">
        Nuevo Contacto: <?=$contacto["nombre"] . " " . $contacto["apellidos"]?>
      </div>
      <div class = "col-md-12 well">
        Correo electrónico: <?=$contacto["correo"]?>
      </div>
      <div class = "col-md-12 well">
        Métodos de Pago: 
        <?php
          $metodosPago = $_POST["metodosPago"];
          foreach( $metodosPago as $metodoPago ){
            echo "[$metodoPago]";
          }
        ?>
     </div>
    </div>
  </body>
</html>