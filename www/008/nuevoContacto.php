<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Simple</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    <div class = "container">
      <div class = "container">
        <h1>Formulario Simple</h1>
        <div class = "col-md-12 well">
          Nombre: ( $_POST ): <?= $_POST[ 'nombre' ]?>
        </div>
        <div class = "col-md-12 well">
          Apellidos: ( $_REQUEST ): <?= $_REQUEST[ 'apellidos' ]?>
        </div>
      </div>
    </div>
  </body>
</html>