<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Saneado</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    <div class = "container">
      <h1>Formulario saneado</h1>
      <div class="col-md-12 well">
        <?=filter_var($_POST["nombre"],  FILTER_SANITIZE_STRING)?>
      </div>
      <div class="col-md-12 well">
        <?=filter_var($_POST["edad"], FILTER_SANITIZE_NUMBER_INT)?>
      </div>
      <div class="col-md-12 well">
        <?=filter_var($_POST["web"], FILTER_SANITIZE_URL)?>
      </div>
      <div class="col-md-12 well">
        <?=filter_var($_POST["correo"],  FILTER_SANITIZE_EMAIL)?>
      </div>
    <div class="col-md-12 well">
    <?php 
        if(!isset($_POST["nombre"])){
            echo "ERROR: El campo nombre es obligatorio.";
        }
    ?>
    </div>
    <div class="col-md-12 well">
        <?php  
            if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT)){
                echo "ERROR: El campo edad debe ser un número entero.";
            }
        ?>
    </div>
    <div class="col-md-12 well">
        <?php 
            if(!filter_var($_POST["web"], FILTER_VALIDATE_URL)){
                echo "ERROR: El campo web no es correcto.";
            }
        ?>
    </div>
    <div class="col-md-12 well">
        <?php 
            if(!filter_var($_POST["correo"],  FILTER_VALIDATE_EMAIL)){
                echo "ERROR: El campo email no es correcto.";
            }
        ?>
    </div>
    </div>
  </body>
</html>