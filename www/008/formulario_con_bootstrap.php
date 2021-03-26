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
      <h1>Formulario Simple</h1>
      <div class = "col-md-12 well">
        <form role = "form" id = "myForm" action = "nuevoContacto.php" method = "post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombreHelp">
              <div id="nombreHelp" class="form-text">Introduce el nombre completo</div>
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="apellidos" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="marcar" name="marcar">
              <label class="form-check-label" for="marcar">Aceptar los términos y condiciones</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </body>
</html>